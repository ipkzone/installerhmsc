<?php
error_reporting(0);
//color
$Yellow = "\e[33m";
$Green = "\e[92m";
$White = "\e[0m";
$blue = "\e[33m";


//choose tools
echo "\n{$Green}
    ██╗  ██╗███╗   ███╗███████╗ ██████╗
    ██║  ██║████╗ ████║██╔════╝██╔════╝
    ███████║██╔████╔██║███████╗██║     
    ██╔══██║██║╚██╔╝██║╚════██║██║     
    ██║  ██║██║ ╚═╝ ██║███████║╚██████╗
    ╚═╝  ╚═╝╚═╝     ╚═╝╚══════╝ ╚═════╝
    {$White}Installer Libs HMSC Termux linux
    Author: Iddant ID
\n";
echo "
    ╔═[{$Yellow}Menu{$White}]════════════════════════════
    ║  {$Yellow}◉{$White} 01. {$Yellow}aarch64 php8.2 NTS{$White}
    ║  {$Yellow}◉{$White} 02. {$Yellow}arm php8.2 NTS{$White}
    ║  {$Yellow}◉{$White} 03. {$Yellow}x86_64 php8.2 NTS{$White} ( Emulator )
    ╚═══════════════════════════════════
       \n";

echo " {$Green}➤{$White} Choose: ";
$pil = trim(fgets(STDIN));
if ($pil == "1") {
    $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/aarch64/php8.2/nts/hmsc.so --output hmsc.so');
    $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/hmsc.so');
    $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
    $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/php');

    echo " {$Green}➤{$White} Installed aarch64 php8.2 NTS\n";
} else if ($pil == "2") {

    $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/arm/php8.2/nts/hmsc.so --output hmsc.so');
    $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/hmsc.so');
    $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
    $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/php');

    echo " {$Green}➤{$White} Installed arm php8.2 NTS\n";
} else if ($pil == "3") {
    $hmsc = shell_exec('curl https://raw.githubusercontent.com/EddieKidiw/HMSC/main/Linux/Termux/x86_64/php8.2/nts/hmsc.so --output hmsc.so');
    $cp_hmsc = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php/hmsc.so');
    $getIni = shell_exec('curl https://raw.githubusercontent.com/ipkzone/axisnet/main/php.ini --output php.ini');
    $cpini = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib/');

    echo " {$Green}➤{$White} Installed x86_64 php8.2 NTS\n";
} else if ($pil == "7") {
    echo " {$Green}➤{$White} Checking version PHP\n";
    $a = shell_exec('php -v');
    echo " {$Green}➤{$White} $a\n";
} else if ($pil == "8") {

    echo " {$Green}➤{$White} Checking karnel termux\n";
    $a = shell_exec('uname -a');
    $b = shell_exec('dpkg --print-architecture');
    echo " {$Green}➤{$White} $a\n";
    echo " {$Green}➤{$White} Your karnel: $b\n";
}
