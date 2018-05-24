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
<!--          HEAD           -->
<div id="course-home-head" >
	<ul class="mui-table-view">
		<li class="mui-table-view-cell mui-media subscribe-head-pad">
			<img class="mui-media-object mui-pull-left" 
			id="subscribe-head-img" src="<?php echo ($l["thumbnail"]); ?>">
			<div class="mui-media-body">
				<?php echo ($l["title"]); ?>
				<p class='course-title-intro'><?php echo ($l["s_intro"]); ?></p><br/>
				
			</div>
		</li>
	</ul>
</div>
<!--            MAIN           -->
<div>
	<div class="subscribe-main-div1"><p class="subscribe-main-div1-p">每天仅需<b style="color: red;display: inline-block;"><?php echo ($l["daypay"]); ?></b>元，KOL精品课程马上到手</p></div>
	<div class="subscribe-main-div2">
		<p class="subscribe-main-div2-p">支付金额：<b><?php echo ($l["price"]); ?></b>元</p>
	</div>
	<div class="subscribe-main-div3">
		<p class="subscribe-main-div3-p">您将订阅《<?php echo ($l["title"]); ?>》<?php echo ($l["s_time"]); ?>到<?php echo ($l["e_time"]); ?>的内容。订阅成功后不支持退款</p>
	</div>
	<div class="subscribe-main-div4">
		<a href="https://baidu.com/?cid=<?php echo ($l["cid"]); ?>">
		<button type="button" class="mui-btn subscribe-main-div4-b">
					微信支付
				</button></a>
	</div>
</div>


</body>
<script src="http://localhost/zlApp/Style/mui/js/mui.min.js"></script>
	<script>
		mui.init({
			swipeBack:true //启用右滑关闭功能
		});
	

	</script>
</html>