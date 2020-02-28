# Ktools
## 介绍
一款基于PHP开发的在线工具箱
演示地址：[Ktools在线工具箱](https://tools.kaygb.top)
### 现有功能
- MD5加密
- 在线FTP（基于net2ftp）
- 免费图床
- QQ头像解析
- 图片链接转换
- 微信公众号二维码获取
### 即将添加的功能
- 随机强密码
- hash
- 敬请期待。。。
## 安装
### 配置访问者统计
> 实验性功能，如有bug请关闭访问者数据统计开关

请先创建数据库，然后在config.php中修改数据库信息
接着访问http://您的域名/mysql.php 进行数据库的初始化

### 配置项
配置内容在config.php
~~~php
$config_ktools_password = "123123"; //状态监控访问密码
$config_customurl = false;    //是否开启自定义域名，true/false，样式错误请开启
$config_ktools_custom_url =  "";    //自定义域名，上方配置填 true 之后填入此项
$ktools_visitor = false;    // 访问者数据统计开关，（实验性功能，如有问题请关闭）
~~~

[![](https://data.jsdelivr.com/v1/package/gh/kaygb/ktools/badge)](https://www.jsdelivr.com/package/gh/kaygb/ktools)