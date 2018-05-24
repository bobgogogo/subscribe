<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{t.title}</title>
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
	<div>
		<img src="<?php echo ($t["banner"]); ?>" style="width: 100%;height: 200px">
	</div>
<!--          MAIN           -->
	<div>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i;?><ul class="mui-table-view" style="width: 96%;margin-left: 2%">
				<li class="mui-table-view-cell mui-media" style="margin-top: 10px">
					<a href="https://baidu.com/?lid=<?php echo ($l["id"]); ?>">
						<img class="mui-media-object mui-pull-left" src="<?php echo ($l["l_thumbnail"]); ?>">
						<div class="mui-media-body">
							<p style="color: black;height: 100px;">
							<?php echo ($l["l_title"]); ?>
							</p>
							<p class='mui-ellipsis'><?php echo ($l["create_time"]); ?></p>
						</div>
					</a>
				</li>
			</ul><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</body>
<script src="http://localhost/zlApp/Style/mui/js/mui.min.js"></script>
	<script>
		mui.init({
			swipeBack:true //启用右滑关闭功能
		});


	</script>
</html>