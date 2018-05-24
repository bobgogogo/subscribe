<?php
namespace Home\Controller;
use Home\Controller\HController;
use Org\wx\WxPayUnifiedOrder;
use Org\wx\WxPayConfig;
use Org\wx\WxPayApi;
//use Think\Cache\Driver\Redis;

class PayController extends HController
{
	public function index(){
	
		$this -> display();
	}
	/*
	*return example:
	*array(9) {
		  ["appid"]=>
		  string(18) "wx9922497712255467"
		  ["mch_id"]=>
		  string(10) "1293072301"
		  ["nonce_str"]=>
		  string(16) "dnVdkJhnbxcRLb57"
		  ["prepay_id"]=>
		  string(36) "wx20170328123608760e82ddca0646900752"
		  ["result_code"]=>
		  string(7) "SUCCESS"
		  ["return_code"]=>
		  string(7) "SUCCESS"
		  ["return_msg"]=>
		  string(2) "OK"
		  ["sign"]=>
		  string(32) "1D3260EAF7ABF2F53BCB82FA800F2833"
		  ["trade_type"]=>
		  string(5) "JSAPI"
		}
	*/

	public function prePay(){
		$uid = session('uid');
		
		$input = new WxPayUnifiedOrder();
		$input->SetBody("test");
		$input->SetAttach("test");
		$input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
		$input->SetTotal_fee("1");
		$input->SetTime_start(date("YmdHis"));
		$input->SetTime_expire(date("YmdHis", time() + 600));
		$input->SetGoods_tag("test");
		$input->SetNotify_url("http://zl.weilaimeixue.com/subscribe/success");
		$input->SetTrade_type("JSAPI");
		$input->SetOpenid("oRfAns_c3v_WCGKVx2cCHFGH4M-Y");//D("User")->getOpenid($uid));
		
		$order = WxPayApi::unifiedOrder($input);
		return $order;
	}



}


?>