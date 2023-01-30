<?php

namespace ipkzoneLib;

class HmscEnc
{
    public static function isHmsc_armv7_php8()
    {
        $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/armv7/php8.1/nts/hmsc.so --output hmsc.so');
        $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/hmsc.so');
        $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
        $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/');
        $cpIni = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/php.ini');

        echo "\e[34mINFO\e[0m: Installed lib hmsc.so armv7 PHP 8.1\n";
    }

    public static function isHmsc_aarch64_php8()
    {
        $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/aarch64/php8.1/nts/hmsc.so --output hmsc.so');
        $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/hmsc.so');
        $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
        $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/');
        $cpIni = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/php.ini');

        echo "\e[34mINFO\e[0m: Installed lib hmsc.so aarch64 PHP 8.1\n";
    }
    public static function isHmsc_armv7()
    {
        $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/armv7/php7.4/nts/hmsc.so --output hmsc.so');
        $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/hmsc.so');
        $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
        $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/');
        $cpIni = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/php.ini');

        echo "\e[34mINFO\e[0m: Installed lib hmsc.so armv7 PHP 7\n";
    }

    public static function isHmsc_aarch64()
    {
        $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/aarch64/php7.4/zts/hmsc.so --output hmsc.so');
        $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/hmsc.so');
        $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
        $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/');
        $cpIni = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/php.ini');

        echo "\e[34mINFO\e[0m: Installed lib hmsc.so aarch64 PHP 7\n";
    }
}

error_reporting(E_ERROR);

use \ipkzoneLib\HmscEnc;

if ($argv[1] == "--armv7_php7") {
    HmscEnc::isHmsc_armv7();
} elseif ($argv[1] == "--aarch64_php7") {
    HmscEnc::isHmsc_aarch64();
} elseif ($argv[1] == "--armv7_php8") {
    HmscEnc::isHmsc_armv7_php8();
} elseif ($argv[1] == "--aarch64_php8") {
    HmscEnc::isHmsc_aarch64_php8();
} elseif (isset($argv[0])) {
    $Yellow = "\e[33m";
    $White = "\e[0m";
    $Green = "\e[92m";
    echo " \e[34mINFO\e[0m: Installing lib HMSC\n";
    echo " \e[34mINFO\e[0m: php name_file.php --armv7_php7\n";
    echo " \e[34mINFO\e[0m: php name_file.php --aarch64_php7\n";
    echo " \e[34mINFO\e[0m: php name_file.php --armv7_php8\n";
    echo " \e[34mINFO\e[0m: php name_file.php --aarch64_php8\n";
    // echo " \e[34mINFO\e[0m: Get licensi for activasi tools contact admin ( {$Yellow}0895375136311{$White} )\n";
}