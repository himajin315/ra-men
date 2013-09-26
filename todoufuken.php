<?php
   require_once('config.php');
   require_once('function.php');

   $mysqli = connectDb();
   if ($result = $mysqli->query("select name,image_url,page_url from main where site = 0 order by count DESC LIMIT 3;")) {
    $i=0;
    while ($row = $result->fetch_row()) {
      $ramenData[$i] = $row; 
      /*
	ramenData[n][0]：店舗名
	ramenData[n][1]：画像URL
	ramenData[n][2]：リンクURL
      */
      $i++;
   }
     /* 結果セットを開放します */
     $result->close();
   }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ラーメン食べ隊</title>
<link rel="stylesheet" href="css/common.css" type="text/css" media="screen" />
</head>

<body id="lv2">

<div id="wrap">


	<div id="head-box"><img src="images/lv2/tit01.png" width="768" height="92" />
   <!-- /#head-box --></div>
    
    
    
    
  <div id="sub_container">
    <div id="sub_pic-box">
    <div id="pic_02"><p>
    	<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><img src="images/top/名称未設定-5.jpg" width="176" height="138" /></td>
  </tr>
   <tr>
    <td align="right" class="txt-box">●●飯店　心斎橋店</td>
  </tr>
</table>

    </p><!-- /.pic_02 --></div>
    <div id="pic_01">
      <table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="330" align="center" valign="middle"><img src="images/top/名称未設定-6.jpg" width="202" height="159" /></td>
  </tr>
  <tr class="txt-box">
    <td align="right" class="txt-box">●●飯店　心斎橋店●●飯店　心斎橋店●●飯店　心斎橋店</td>
  </tr>
</table>
      <!-- /.pic_01 --></div>
    <div id="pic_03"><table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><img src="images/top/名称未設定-5.jpg" width="178" height="133" /></td>
  </tr>
  <tr class="txt-box">
    <td align="right" class="txt-box">●●飯店　心斎橋店</td>
  </tr>
</table><!-- /.pic_03 --></div>
    <!-- /#pic-box --></div>
    
    
<div id="puru">

<form action="" method="get">
        <select name="prefecture">
	<option value="北海道">北海道</option>
	<option value="青森県">青森県</option>
	<option value="秋田県">秋田県</option>
	<option value="岩手県">岩手県</option>
	<option value="山形県">山形県</option>
	<option value="宮城県">宮城県</option>
	<option value="福島県">福島県</option>
	<option value="茨城県">茨城県</option>
	<option value="栃木県">栃木県</option>
	<option value="群馬県">群馬県</option>
	<option value="埼玉県">埼玉県</option>
	<option value="神奈川県">神奈川県</option>
	<option value="千葉県">千葉県</option>
	<option value="東京都" selected="selected">東京都</option>
	<option value="山梨県">山梨県</option>
	<option value="長野県">長野県</option>
	<option value="新潟県">新潟県</option>
	<option value="富山県">富山県</option>
	<option value="石川県">石川県</option>
	<option value="福井県">福井県</option>
	<option value="岐阜県">岐阜県</option>
	<option value="静岡県">静岡県</option>
	<option value="愛知県">愛知県</option>
	<option value="三重県">三重県</option>
	<option value="滋賀県">滋賀県</option>
	<option value="京都府">京都府</option>
	<option value="大阪府">大阪府</option>
	<option value="兵庫県">兵庫県</option>
	<option value="奈良県">奈良県</option>
	<option value="和歌山県">和歌山県</option>
	<option value="鳥取県">鳥取県</option>
	<option value="島根県">島根県</option>
	<option value="岡山県">岡山県</option>
	<option value="広島県">広島県</option>
	<option value="山口県">山口県</option>
	<option value="徳島県">徳島県</option>
	<option value="香川県">香川県</option>
	<option value="愛媛県">愛媛県</option>
	<option value="高知県">高知県</option>
	<option value="福岡県">福岡県</option>
	<option value="佐賀県">佐賀県</option>
	<option value="長崎県">長崎県</option>
	<option value="熊本県">熊本県</option>
	<option value="大分県">大分県</option>
	<option value="宮崎県">宮崎県</option>
	<option value="鹿児島県">鹿児島県</option>
	<option value="沖縄県">沖縄県</option>
</select>を見る

        </form>
</div>
    
   <div id="map-box">
   <iframe width="800" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.jp/?ie=UTF8&amp;t=m&amp;brcurrent=3,0x34e56c65a10af5a9:0x71817729188ed216,1&amp;ll=26.242982,127.737393&amp;spn=0.009623,0.017145&amp;z=16&amp;output=embed"></iframe>
   <!-- /#map-box --></div>

  <!-- /#container --></div>
	
    
    <div id="footer-box">
    <ul>
    	<li id="back"><a href="index.php"><img src="images/lv2/btn04.jpg" width="449" height="70" /></a></li>
    </ul>
    <!-- /#footer-box --></div>
<!-- /#wrap --></div>






</body>

</html>
