<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
</head>
<body>
Hello World!
</body>
<script type="text/javascript">
console.log('123')
	wx.config({
		debug: false,
      appId: 'wx9922497712255467',
      timestamp: 1421142450,
      nonceStr: '9hKgyCLgGZOgQmEI',
      signature: 'bf7a5555f9ad0e7e491535f232349a40510a6f8f',
      jsApiList: [
        'checkJsApi',
        'chooseImage',
        'getNetworkType',
        'previewImage']
	});
	wx.ready(function(){
		wx.checkJsApi({
		    jsApiList: ['chooseImage','getNetworkType',
        'previewImage'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
		    success: function(res) {
		    	alert(JSON.stringify(res));
		        // 以键值对的形式返回，可用的api值true，不可用为false
		        // 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}
		    }
		});
	})
	
	
</script>
</html>