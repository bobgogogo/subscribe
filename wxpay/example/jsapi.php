<?php 
ini_set('date.timezone','Asia/Shanghai');
//error_reporting(E_ERROR);
require_once "../lib/WxPay.Api.php";
require_once "WxPay.JsApiPay.php";
require_once 'log.php';

//初始化日志
$logHandler= new CLogFileHandler("../logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

//打印输出数组信息
function printf_info($data)
{
    foreach($data as $key=>$value){
        echo "<font color='#00ff55;'>$key</font> : $value <br/>";
    }
}
//①、获取用户openid
$tools = new JsApiPay();
$openId = $tools->GetOpenid();

//②、统一下单
$input = new WxPayUnifiedOrder();
$input->SetBody("订阅费");
$input->SetAttach("未来美学");
$input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
$input->SetTotal_fee("1");
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag("");
$input->SetNotify_url("http://zl.weilaimeixue.com/subscribe/success");
$input->SetTrade_type("JSAPI");
$input->SetOpenid($openId);
$order = WxPayApi::unifiedOrder($input);

$data = $tools->GetJsApiParameters($order);
?>
<!DOCTYPE html>
<html>
<head>
	<title>支付</title>
	<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
</head>
<body>

</body>
<script>
		mui.init({
			swipeBack:true //启用右滑关闭功能
		});
		
		
		wx.config({
		    debug: true,
		    appId: '{$wx.appId}',
		    timestamp: {$wx.timestamp},
		    nonceStr: '{$wx.nonceStr}',
		    signature: '{$wx.signature}',
		    jsApiList: [
		      // 所有要调用的 API 都要加到这个列表中
		      'chooseWXPay'
		    ]
		  });
		  wx.ready(function () {
		    // 在这里调用 API
		   
		  });

		  function pay(p)
		  {
		  	wx.chooseWXPay({
			    timestamp: {$wx.timestamp}, // 支付签名时间戳，注意微信jssdk中的所有使用timestamp字段均为小写。但最新版的支付后台生成签名使用的timeStamp字段名需大写其中的S字符
			    nonceStr: '{$wx.nonceStr}', // 支付签名随机串，不长于 32 位
			    package: '', // 统一支付接口返回的prepay_id参数值，提交格式如：prepay_id=***）
			    signType: 'MD5', // 签名方式，默认为'SHA1'，使用新版支付需传入'MD5'
			    paySign: '', // 支付签名
			    success: function (res) {
			        // 支付成功后的回调函数
			    }
			});
		  }
	</script>
</html>

