# Ktools
## 介绍
一款基于PHP开发的在线工具箱
## 现有功能
- MD5加密
- 在线FTP（基于net2ftp）
- 免费图床
## 即将添加的功能
- QQ头像解析
- 敬请期待。。。
## 配置项
配置内容在config.php
~~~php
$config_ktools_password = "123123"; //状态监控默认访问密码
$config_customurl = false;    //是否开启自定义域名，true/false
$config_ktools_custom_url =  "";    //自定义域名，上方配置填 true 之后填入此项
~~~