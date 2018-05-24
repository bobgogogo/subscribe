<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo ($l["title"]); ?></title>
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
		<li class="mui-table-view-cell mui-media">
			<img class="mui-media-object mui-pull-left" src="<?php echo ($l["thumbnail"]); ?>">
			<div class="mui-media-body">
				<?php echo ($l["title"]); ?>
				<p class='course-title-intro'><?php echo ($l["s_intro"]); ?></p><br/>
				
			</div>
		</li>
	</ul>
</div>
<!--          MAIN          -->
<div>
	<ul class="mui-table-view">
		<li class="mui-table-view-cell"><p class="course-title">课程介绍</p><p class="course-content"><?php echo ($l["l_intro"]); ?></p></li>
        <li class="mui-table-view-cell"><p class="course-title">作者介绍</p><p class="course-content"><?php echo ($l["author_intro"]); ?></p></li>
        <li class="mui-table-view-cell"><p class="course-title">适宜人群</p><p class="course-content"><?php echo ($l["suit"]); ?></p></li>
        <li class="mui-table-view-cell"><p class="course-title">订阅须知</p><p class="course-content"><?php echo ($l["notice"]); ?></p></li>
        <li class="mui-table-view-cell"><p class="course-title">最新内容</p><p class="course-content"><?php echo ($l["news"]); ?></p></li>
        <li class="mui-table-view-cell"><p class="course-title">推荐语</p><p class="course-content"><?php echo ($l["reco"]); ?></p></li>
        <li class="mui-table-view-cell"><p class="course-title">评分</p><p class="course-content"><?php echo ($l["comment"]); ?></p></li>
	</ul>
</div>
<!--         FOOT              -->
<div style="margin-top: 60px">
	<nav class="mui-bar mui-bar-tab">
		<div class="course-a">
			<!-- <span class="mui-icon mui-icon-home"></span> -->
			<a href="https://baidu.com">
			<button type="button" class="mui-btn mui-btn-outlined">
					试读
				</button></a>
				
		</div>
		<div class="course-a">
			<!-- <span class="mui-icon mui-icon-email"></span> -->
			<a href="../subscribe/index?cid=<?php echo ($l["id"]); ?>">
			<button type="button" class="mui-btn mui-btn-outlined">
					订阅：<?php echo ($l["price"]); ?>元／<?php echo ($l["unit"]); ?>
				</button></a>
		</div>
	</nav>
</div>
</body>
<script src="http://localhost/zlApp/Style/mui/js/mui.min.js"></script>
	<script>
		mui.init({
			swipeBack:true //启用右滑关闭功能
		});

	
	</script>
</html>