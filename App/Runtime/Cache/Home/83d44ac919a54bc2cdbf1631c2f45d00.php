<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>订阅支付</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!--标准mui.css-->
	<link rel="stylesheet" href="http://localhost/zlApp/Style/mui/css/mui.min.css">
	<!--App自定义的css-->
	<link rel="stylesheet" type="text/css" href="http://localhost/zlApp/Style/mui/css/app.css"/>
</head>
<body>
<!--           HEAD         -->
<!--           MAIN         -->
<div class="subscribe-success-main-div-1">
	<p class="subscribe-success-main-label">《课程名称》专栏订阅成功</p>
</div>
<div class="subscribe-success-main-div-2">
<a href="https://baidu.com/">
	<button type="button" class="mui-btn subscribe-success-main-button">
					开始阅读
				</button>
</a>
</div>
<!--           FOOT         -->
<div class="subscribe-success-foot-div-1">
	遇到问题克联系客服邮箱<br/>
	service@weilaimeixue.com
</div>
</body>
<script src="http://localhost/zlApp/Style/mui/js/mui.min.js"></script>
	<script>
		mui.init({
			swipeBack:true //启用右滑关闭功能
		});
		//获得slider插件对象
		var gallery = mui('#slider');
		gallery.slider({
		  interval:5000//自动轮播周期，若为0则不自动播放，默认为0；
		});

	</script>
</html>