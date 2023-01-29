<?php
error_reporting(0);
//color
$Yellow = "\e[33m";
$Green = "\e[92m";
$White = "\e[0m";
$blue = "\e[33m";


//choose tools
echo " 
         {$Green}➤{$White} Author: Iddant ID
         {$Green}➤{$White} Installer Libs HMSC Windows

         {$Green}➤{$White} 1. {$Yellow}Windows x86 NTS{$White}
         {$Green}➤{$White} 2. {$Yellow}Windows x86 ZTS{$White}
         {$Green}➤{$White} 3. {$Yellow}Windows x86_64 NTS{$White}
         {$Green}➤{$White} 4. {$Yellow}Windows x86_64 ZTS{$White}
         {$Green}➤{$White} 5. {$Yellow}Check SystemInfo PC{$White}
         {$Green}➤{$White} 6. {$Yellow}Check PHP Version{$White}

\n";

echo " {$Green}➤{$White} Choose: ";
$pil = trim(fgets(STDIN));
if ($pil == "1") {

    echo "
    {$Green}➤{$White} Windows x86 NTS lib hmsc
    {$Green}➤{$White} 1. Windows x86 php7.3 nts
    {$Green}➤{$White} 2. Windows x86 php7.4 nts
    {$Green}➤{$White} 3. Windows x86 php8.0 nts
    {$Green}➤{$White} 4. Windows x86 php8.1 nts
\n";
    echo " {$Green}➤{$White} Choose: ";
    $pil = trim(fgets(STDIN));
    if ($pil == "1") {
        $hmsc = shell_exec('copy Windows\x86\php7.3\nts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86 php7.3 nts\n";
    } else if ($pil == "2") {
        $hmsc = shell_exec('copy Windows\x86\php7.4\nts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86 php7.4 nts\n";
    } else if ($pil == "3") {
        $hmsc = shell_exec('copy Windows\x86\php8.0\nts\php_hmsc.dll D:C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86 php8.0 nts\n";
    } else if ($pil == "4") {
        $hmsc = shell_exec('copy Windows\x86\php8.1\nts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86 php8.1 nts\n";
    }
} else if ($pil == "2") {

    echo "
    {$Green}➤{$White} Windows x86 ZTS lib hmsc
    {$Green}➤{$White} 1. Windows x86 php7.3 zts
    {$Green}➤{$White} 2. Windows x86 php7.4 zts
    {$Green}➤{$White} 3. Windows x86 php8.0 zts
    {$Green}➤{$White} 4. Windows x86 php8.1 zts
\n";
    echo " {$Green}➤{$White} Choose: ";
    $pil = trim(fgets(STDIN));
    if ($pil == "1") {
        $hmsc = shell_exec('copy Windows\x86\php7.3\zts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86 php7.3 zts\n";
    } else if ($pil == "2") {
        $hmsc = shell_exec('copy Windows\x86\php7.4\zts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86 php7.4 zts\n";
    } else if ($pil == "3") {
        $hmsc = shell_exec('copy Windows\x86\php8.0\zts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86 php8.0 zts\n";
    } else if ($pil == "4") {
        $hmsc = shell_exec('copy Windows\x86\php8.1\zts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86 php8.1 zts\n";
    }
} else if ($pil == "3") {

    echo "
    {$Green}➤{$White} Windows x86_64 NTS lib hmsc
    {$Green}➤{$White} 1. Windows x86_64 php7.3 nts
    {$Green}➤{$White} 2. Windows x86_64 php7.4 nts
    {$Green}➤{$White} 3. Windows x86_64 php8.0 nts
    {$Green}➤{$White} 4. Windows x86_64 php8.1 nts
\n";
    echo " {$Green}➤{$White} Choose: ";
    $pil = trim(fgets(STDIN));
    if ($pil == "1") {
        $hmsc = shell_exec('copy Windows\x86_64\php7.3\nts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86_64 php7.3 nts\n";
    } else if ($pil == "2") {
        $hmsc = shell_exec('copy Windows\x86_64\php7.4\nts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86_64 php7.4 nts\n";
    } else if ($pil == "3") {
        $hmsc = shell_exec('copy Windows\x86_64\php8.0\nts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86_64 php8.0 nts\n";
    } else if ($pil == "4") {
        $hmsc = shell_exec('copy Windows\x86_64\php8.1\nts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86_64 php8.1 nts\n";
    }
} else if ($pil == "4") {

    echo "
    {$Green}➤{$White} Windows x86_64 ZTS lib hmsc
    {$Green}➤{$White} 1. Windows x86_64 php7.3 zts
    {$Green}➤{$White} 2. Windows x86_64 php7.4 zts
    {$Green}➤{$White} 3. Windows x86_64 php8.0 zts
    {$Green}➤{$White} 4. Windows x86_64 php8.1 zts
\n";
    echo " {$Green}➤{$White} Choose: ";
    $pil = trim(fgets(STDIN));
    if ($pil == "1") {
        $hmsc = shell_exec('copy Windows\x86_64\php7.3\zts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86_64 php7.3 zts\n";
    } else if ($pil == "2") {
        $hmsc = shell_exec('copy Windows\x86_64\php7.4\zts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86_64 php7.4 zts\n";
    } else if ($pil == "3") {
        $hmsc = shell_exec('copy Windows\x86_64\php8.0\zts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86_64 php8.0 zts\n";
    } else if ($pil == "4") {
        $hmsc = shell_exec('copy Windows\x86_64\php8.1\zts\php_hmsc.dll C:\xampp\php\ext');
        $copy = shell_exec('copy phpini\php.ini C:\xampp\php');
        echo " {$Green}➤{$White} Installed lib php hmsc Windows x86_64 php8.1 zts\n";
    }
} else if ($pil == "5") {
    $sysinfo = shell_exec('systeminfo');
    echo "{$Green}" . $sysinfo . "{$White}\n";
} else if ($pil == "6") {
    $phpv = shell_exec('php -v');
    echo "{$Green}" . $phpv . "{$White}\n";
}
