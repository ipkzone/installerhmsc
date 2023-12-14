<?php
error_reporting(0);
//color
$Yellow = "\e[33m";
$Green = "\e[92m";
$White = "\e[0m";
$blue = "\e[33m";


//choose tools
echo "

    {$Yellow}◉{$White} Update Version 2.0 | Iddant ID | WhatsApp: 0895375136311
    {$Yellow}◉{$White} Installer Libs HMSC Windows

    ╔═[{$Yellow}Menu{$White}]════════════════════════════
    ║  {$Yellow}◉{$White} 01. {$Yellow}Windows HMSC PHP 7.3{$White}
    ║  {$Yellow}◉{$White} 02. {$Yellow}Windows HMSC PHP 7.4{$White}
    ║  {$Yellow}◉{$White} 03. {$Yellow}Windows HMSC PHP 8.0{$White}
    ║  {$Yellow}◉{$White} 04. {$Yellow}Check SystemInfo PC{$White}
    ║  {$Yellow}◉{$White} 05. {$Yellow}Check PHP Version{$White}
    ╚═══════════════════════════════════
       \n";

echo " {$Green}➤{$White} Choose: ";
$pil = trim(fgets(STDIN));
if ($pil == "1") {

    echo "
    ╔═[{$Yellow}Menu{$White}]════════════════════════════
    ║  {$Yellow}◉{$White} 01. {$Yellow}PHP 7.3 NTS{$White}
    ║  {$Yellow}◉{$White} 02. {$Yellow}PHP 7.3 ZTS{$White}
    ╚═══════════════════════════════════
       \n";
    echo " {$Green}➤{$White} Choose: ";
    $pil = trim(fgets(STDIN));
    if ($pil == "1") {
        $hmsc = shell_exec('copy Windows\php7.3\nts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows php7.3 nts\n";
    } else if ($pil == "2") {
        $hmsc = shell_exec('copy Windows\php7.3\zts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows php7.3 nts\n";
    }
} else if ($pil == "2") {

    echo "
    ╔═[{$Yellow}Menu{$White}]════════════════════════════
    ║  {$Yellow}◉{$White} 01. {$Yellow}PHP 7.4 NTS{$White}
    ║  {$Yellow}◉{$White} 02. {$Yellow}PHP 7.4 ZTS{$White}
    ╚═══════════════════════════════════
       \n";
    echo " {$Green}➤{$White} Choose: ";
    $pil = trim(fgets(STDIN));
    if ($pil == "1") {
        $hmsc = shell_exec('copy Windows\php7.4\nts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows php7.4 zts\n";
    } else if ($pil == "2") {
        $hmsc = shell_exec('copy Windows\php7.4\zts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows php7.4 zts\n";
    }
} else if ($pil == "3") {
    echo "
    ╔═[{$Yellow}Menu{$White}]════════════════════════════
    ║  {$Yellow}◉{$White} 01. {$Yellow}PHP 8.0 NTS{$White}
    ║  {$Yellow}◉{$White} 02. {$Yellow}PHP 8.0 ZTS{$White}
    ╚═══════════════════════════════════
       \n";
    echo " {$Green}➤{$White} Choose: ";
    $pil = trim(fgets(STDIN));
    if ($pil == "1") {
        $hmsc = shell_exec('copy Windows\php8.0\nts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows php8.0 zts\n";
    } else if ($pil == "2") {
        $hmsc = shell_exec('copy Windows\php8.0\zts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows php8.0 zts\n";
    }
} else if ($pil == "4") {
    $sysinfo = shell_exec('systeminfo');
    echo "{$Green}" . $sysinfo . "{$White}\n";
} else if ($pil == "5") {
    $phpv = shell_exec('php -v');
    echo "{$Green}" . $phpv . "{$White}\n";
}
