<?php
include_once('config.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ktools在线工具-KAYGB</title>
    <!--SEO相关-->
    <meta name="keywords" content="Ktools,在线工具箱,PHP在线工具箱,在线MD5加密,在线FTP,免费图床">
    <meta name="description" content="一款基于PHP纯手打的在线工具箱，支持在线MD5加密，在线FTP链接，免费图床等多种功能，持续开发中！">
    
    <link rel="icon" type="image/ico" href="//cdn.v2ex.com/gravatar/4cc893d113dd74ceca73f9863f2c5446/">
    <link rel="stylesheet" href="//<?php echo constant("TOOLS_URL");?>/style.css?v=[<?php echo date('Ymd.his');?>]"/>
    <!--bootstrp4 css-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.bootcss.com/font-awesome/5.11.2/css/all.css" rel="stylesheet">
        <!--image css-->
    <link href="//<?php echo constant("TOOLS_URL");?>/static/css/jumbotron-narrow.css" rel="stylesheet">
        <!-- 新 Bootstrap4 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <!--end-bootstrap4 css-->
    
</head>
<body>
    <div class="header-bar">
		<div class="container">
		    <!--<span class="kaygb" style="color:#f05050"><i class="fas fa-cogs"></i>&nbsp;在线工具 </span> -->
		    <a href="//<?php echo constant("TOOLS_URL");?>" style="color:#f05050" class="kaygb"><i class="fas fa-cogs"></i>&nbsp;Ktools在线工具 </a>
            <a href="//kaygb.top" target="_blank" class="kaygb"><i class="fas fa-home"></i>&nbsp;HOME </a>
            <a href="//<?php echo constant("TOOLS_URL");?>/status.php" target="" class="kaygb"><i class="fas fa-bullseye"></i>&nbsp;状态 </a>
			
		</div>
	</div>