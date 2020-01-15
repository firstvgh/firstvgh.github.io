<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/> 
    <title>支付</title>
	<style type="text/css">
a:link,a:visited{
 text-decoration:none;
}
#xyfooter{
	position: fixed;
	bottom: 20px;
}
</style>
</head>
<body>
    <br/>
<?php

	//获取参数
	$fee = trim( $_REQUEST['fee'] );
	$order_id = trim( $_REQUEST['orderid'] );
	$picurl = trim( $_REQUEST['picurl'] );
	
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	
	if (stripos($user_agent, "MicroMessenger") == TRUE )
	{
		die("请用支付宝扫码");
	}
	else
	{
?>
	<form name=alipayment action="<?php echo 'f2fpay/qrpay.php?order_id='.$order_id."&fee=".$fee."&picurl=".$picurl ?>" method=post target="_blank">
<?php
	}
?>
    支付<span style="color:#f00"><?php echo $fee/100; ?></span>元。
	<br><br>
	支付成功后，回到原页面刷新
	<br><br><br>
	<div align="center">
		<button style="width:100px; height:35px; border-radius: 5px;background-color:#3CA2F0; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="submit" >立即支付</button>
	</div>
	</form>
</body>
</html>