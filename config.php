<?php
// 配置
$config_ktools_password = "123123"; //状态监控访问密码
$config_customurl = false;    //是否开启自定义域名，true/false
$config_ktools_custom_url =  "";    //自定义域名，上方配置填 true 之后填入此项

define('IN_SYS', TRUE);
if (!defined('IN_SYS')) {
    　　exit('禁止访问');
    } 
//获取当前域名
if ($config_customurl == true) {
    define("TOOLS_URL",$config_ktools_custom_url);
}else{
    define("TOOLS_URL",$_SERVER['SERVER_NAME']);
}
// 状态监控
define("STATUS_PASSWORD",$config_ktools_password);