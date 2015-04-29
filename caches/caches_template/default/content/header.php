<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>百融网----首页</title>
<script src="<?php echo JS_PATH;?>/jq.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>/breset.css"/>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>/public.css"/>

</head>
<body>

<!-- start 外框 -->
<div class="wp">
	<!-- start 公共头部 -->
	<div class="top clearfix">
		<span class="tel">400-6235-280</span>
		<a href="###">登录</a>|<a href="###">注册</a><a href="###">中文</a>|<a href="###">ENGLISH</a>
	</div>
	<div class="head clearfix">
		<h1 class="logo"><a href="###"></a></h1>
		<div class="nav">
                    <a href="/" class="<?php if(ROUTE_C=='index') { ?>home on<?php } ?>">首页</a><a href="###">解决方案</a><a href="###">产品服务</a><a href="###">应用案例</a><a href="###">关于我们</a><a class="<?php if(ROUTE_C=='news') { ?>home on<?php } ?>" href="?m=content&c=news">资讯新闻</a>
		</div>
	</div>
	<!-- end 公共头部 -->