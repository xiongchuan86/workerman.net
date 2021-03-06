<?php
namespace WorkerMan\Modules;

function workerman_todpole()
{
    $html_title = 'workerman-todpole | PHP蝌蚪聊天室 HTML5+WebSocket+PHP 服务器实时推送技术';
    $html_nav = 'applications';
    $github_repo = 'workerman-todpole';
    $html_keywords = '小蝌蚪聊天室, PHP websocket';
    $download_todpole_count_key = 'download_todpole_count';
    $todpole_download_count =  \WorkerMan\Lib\Store::get($download_todpole_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/workerman-todpole.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
