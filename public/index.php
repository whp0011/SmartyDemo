<?php
/**
 * SmartyDemo工程
 *
 * index.php文件
 *
 * User: Administrator
 * DateTime: 2015-02-03 19:03
 */
require_once('setup.php');
$smarty = new SmartyFactory();

$smarty->assign('name','whp');

$smarty->display('index.tpl');
