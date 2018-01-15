<?php

namespace WyriHaximus\DevMaster;

// @codeCoverageIgnoreStart
if (!function_exists('WyriHaximus\DevMaster\isDevMaster')) {
    require __DIR__ . '/functions.php';
}
// @codeCoverageIgnoreEnd

if (isDevMaster('wyrihaximus/dev-master')) {
    die('Don\'t use "wyrihaximus/dev-master" as dev-master!!!');
}
