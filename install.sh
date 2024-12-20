#!/bin/bash

RED="\033[31m"
GREEN="\033[32m"
YELLOW="\033[33m"
BLUE="\033[34m"
CYAN="\033[36m"
MAGENTA="\033[35m"
RESET="\033[0m"

banner() {
  echo -e "${CYAN}"
  echo "==========================================="
  echo "       HMSC Installation Script PHP 8.4     "
  echo "         Author : Iddant ID | ONE IX        "
  echo "==========================================="
  echo -e "${RESET}"
}

loading() {
  echo -ne "${YELLOW}Processing${RESET} "
  for i in {1..10}; do
    case $((i % 4)) in
      0) echo -ne "|";;
      1) echo -ne "/";;
      2) echo -ne "-";;
      3) echo -ne "\\";;
    esac
    sleep 0.2
    echo -ne "\b"
  done
  echo ""
}

clear
banner

echo -e "${BLUE}[INFO]${RESET} Memperbarui paket-paket di Termux..."
yes n | pkg update -y
yes n | pkg upgrade -y
loading

if ! command -v curl &> /dev/null; then
  echo -e "${BLUE}[INFO]${RESET} Curl tidak ditemukan. Instalasi curl akan dimulai..."
  pkg install curl -y
  loading
fi

echo -e "${BLUE}[INFO]${RESET} Memeriksa apakah PHP sudah terinstall..."
if ! command -v php &> /dev/null; then
  echo -e "${RED}[ERROR]${RESET} PHP tidak ditemukan. Instalasi PHP akan dimulai..."
  pkg install php -y
  loading
else
  echo -e "${GREEN}[SUCCESS]${RESET} PHP sudah terinstal."
fi

echo -e "${BLUE}[INFO]${RESET} Memastikan ekstensi PHP GD terinstal..."
pkg install php-gd -y
loading

echo -e "${BLUE}[INFO]${RESET} Memulai proses instalasi HMSC..."
sleep 1

echo -e "${BLUE}[INFO]${RESET} Membuat direktori ${GREEN}hmsclib${RESET}..."
mkdir -p hmsclib && cd hmsclib
loading

echo -e "${BLUE}[INFO]${RESET} Mengunduh file ${GREEN}hmsc.so${RESET}..."
curl -O https://raw.githubusercontent.com/EddieKidiw/HMSC/master/Linux/Termux/aarch64/php8.4/nts/hmsc.so
if [[ $? -eq 0 ]]; then
  echo -e "${GREEN}[SUCCESS]${RESET} File hmsc.so berhasil diunduh!"
else
  echo -e "${RED}[ERROR]${RESET} Gagal mengunduh file hmsc.so. Periksa koneksi internet Anda."
  exit 1
fi
loading

PHP_LIB_PATH="/data/data/com.termux/files/usr/lib/php/"
echo -e "${BLUE}[INFO]${RESET} Menyalin file hmsc.so ke direktori PHP..."
mkdir -p "$PHP_LIB_PATH"
cp hmsc.so "$PHP_LIB_PATH"

echo -e "${BLUE}[INFO]${RESET} Mengunduh file konfigurasi ${GREEN}php.ini${RESET}..."
curl -O https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini
if [[ $? -eq 0 ]]; then
  PHP_ETC_PATH="/data/data/com.termux/files/usr/etc/php/"
  mkdir -p "$PHP_ETC_PATH"
  cp php.ini "$PHP_ETC_PATH"
  echo -e "${GREEN}[SUCCESS]${RESET} File php.ini berhasil disalin!"
else
  echo -e "${RED}[ERROR]${RESET} Gagal mengunduh atau menyalin file php.ini."
  exit 1
fi
loading

echo -e "${GREEN}[DONE]${RESET} Instalasi berhasil selesai!"
echo -e "${MAGENTA}HMSC telah diinstal dan siap digunakan.${RESET}"
echo -e "${CYAN}Silahkan restart Termux Anda untuk mulai menggunakan.${RESET}"
echo -e "${BLUE}==========================================${RESET}"
