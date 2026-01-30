#!/bin/bash
GREEN="\e[32m"
BLUE="\e[34m"
YELLOW="\e[33m"
RED="\e[31m"
RESET="\e[0m"
BOLD="\e[1m"

FOLDER="ipkzone"
FILE="hmsc.deb"
URL="https://raw.githubusercontent.com/ipkzone/installerhmsc/refs/heads/main/Android/hmsc.deb"

clear
echo -e "${BOLD}${BLUE}"
echo "====================================="
echo "     HMSC 2.0.0 INSTALLER SCRIPT      "
echo "====================================="
echo -e "${RESET}"
echo -e "${YELLOW}[1/3] Membuat folder ${FOLDER}...${RESET}"
mkdir -p "$FOLDER"
sleep 1
echo -e "${GREEN}✔ Folder siap${RESET}"
echo -e "${YELLOW}[2/3] Mengunduh file installer...${RESET}"
cd "$FOLDER" || exit 1

curl -O "$URL"
if [ $? -ne 0 ]; then
    echo -e "${RED}✖ Gagal mengunduh file${RESET}"
    exit 1
fi
echo -e "${GREEN}✔ Download selesai${RESET}"
echo -e "${YELLOW}[3/3] Menginstall paket...${RESET}"
dpkg -i "$FILE"

if [ $? -eq 0 ]; then
    echo -e "${BOLD}${GREEN}"
    echo "====================================="
    echo "   🎉 INSTALLASI SELESAI 🎉"
    echo "====================================="
    echo -e "${RESET}"
else
    echo -e "${RED}✖ Terjadi kesalahan saat instalasi${RESET}"
fi
