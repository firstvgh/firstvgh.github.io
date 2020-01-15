<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

require_once 'f2fpay/config/config.php';
require_once 'f2fpay/service/AlipayTradeService.php';
ini_set('date.timezone','Asia/Shanghai');

//八图片平台配置信息：
$config_8tupian['key_id'] = "035554cb74c70883411699052e31f100";   //key
$config_8tupian['api_url'] = "http://firstvgh.top/api/notify.php";   //通知地址，不用修改


//查询订单地址
$queryurl = "http://你的网站域名/f2fpay/query.php";


function sign($data, $key)
{
    ksort($data);
    $sign = md5(urldecode(http_build_query($data)).'&key='.$key);
    return $sign;
}

	
//商户订单号

$out_trade_no = $_POST['out_trade_no'];

//支付宝交易号

$trade_no = $_POST['trade_no'];

//交易状态
$trade_status = $_POST['trade_status'];

//订单金额
$price = $_POST['total_amount'];

if($_POST['trade_status'] == 'TRADE_FINISHED') 
{
}
else if ($_POST['trade_status'] == 'TRADE_SUCCESS') 
{
			
	$url = sprintf("%s?out_trade_no=%s", $queryurl, $out_trade_no);
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$resp = curl_exec($ch);			  
	curl_close($ch);
	
	if ($resp == "ok")
	{
		$orderid = $out_trade_no;
		$fee = $price * 100;
		$postdata = array(
			'orderid'      => $orderid,
			'fee'      => $fee 
		);
	
		$sign =  sign($postdata, $config_8tupian['key_id']);
		
		$url = sprintf("%s?orderid=%s&fee=%d&sign=%s", $config_8tupian['api_url'], $orderid, $fee , $sign);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
	  if($response == "success") 
		{
	     echo "success";
	  }
		else
		{
			echo "fail";
		}
		  
		curl_close($ch);
		
		die(0);
	}
	else
	{
		echo "fail";
		die(0);
	}
}
//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
    
echo "success";		//请不要修改或删除

?>

