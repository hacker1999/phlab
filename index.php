<?php

header('Content-Type: text/plain; charset=utf-8');
// определяем папку в которой находится скрипт относительно корня сайта
$root_dir = dirname($_SERVER['SCRIPT_NAME']);
if ($root_dir != '/') {
    $root_dir .= '/';
}
define('ROOT_DIR', $root_dir);
echo 'ROOT_DIR is ' . ROOT_DIR . "\r\n";
list($path, ) = explode('?', $_SERVER['REQUEST_URI']);
// убираем повторы слешей
$path = preg_replace('#/{2,}#', '/', $path);
$rel_path = substr($path, strlen(ROOT_DIR));
echo '$rel_path is ' . $rel_path;