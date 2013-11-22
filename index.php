<?php

header('Content-Type: text/plain; charset=utf-8');
// определяем папку в которой находится скрипт относительно корня сайта
define('ROOT_DIR', dirname($_SERVER['SCRIPT_NAME']));
echo 'ROOT_DIR is ' . ROOT_DIR . "\r\n";
list($rel_path, ) = explode('?', $_SERVER['REQUEST_URI']);
// убираем повторы слешей
$rel_path = preg_replace('#/{2,}#', '/', $rel_path);
if (ROOT_DIR != '/') {
    $rel_path = substr($rel_path, strlen(ROOT_DIR));
}
echo '$rel_path is ' . $rel_path;