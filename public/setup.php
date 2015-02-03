<?php
/**
 * SmartyDemo工程
 *
 * setup.php文件
 *
 * User: Administrator
 * DateTime: 2015-02-03 19:34
 */
define('HOST_DIR', __DIR__ . '/../');
define('SMARTY_LIBS', HOST_DIR . '/vendor/smarty/libs/Smarty.class.php');

require_once(SMARTY_LIBS);

class SmartyFactory extends Smarty
{

    function __construct()
    {
        parent::__construct();
        $this->template_dir = HOST_DIR . 'app/templates/';
        $this->compile_dir = HOST_DIR . 'app/templates_c/';
        $this->config_dir = HOST_DIR . 'app/configs/';
        $this->cache_dir = HOST_DIR . 'app/cache/';

        $this->caching = false;
        $this->assign('app_name', 'SmartyDemo');
    }

}