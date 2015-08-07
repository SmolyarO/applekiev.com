<?php

session_start();

$smarty = New Smarty();
$smarty->template_dir = 'application/views/';
$smarty->compile_dir = 'cache/smarty';
$smarty->clearAllCache();

$smarty->assign('name', 'Test name');

$smarty->display('index.tpl');


?>