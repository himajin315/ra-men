<?php
   require_once('config.php');
   require_once('function.php');

   $mysqli = connectDb();
   if ($result = $mysqli->query("select name,image_url,page_url from main where site = 1 order by count DESC LIMIT 3;")) {
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


	<div id="head-box"><img src="images/lv2/tit03.png" width="777" height="92" />
    <!-- /#head-box --></div>
    
    
    
    
	<div id="sub_container">
    <div id="sub_pic-box">
    <div id="pic_02"><p>
    	<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><a href="<?php echo $ramenData[1][2]; ?>"><img src="<?php echo $ramenData[1][1]; ?>" width="220" /></a></td>
  </tr>
   <tr>
    <td align="right" class="txt-box"><?php echo $ramenData[1][0]; ?></td>
  </tr>
</table>

    </p><!-- /.pic_02 --></div>
    <div id="pic_01">
      <table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="330" align="center" valign="middle"><a href="<?php echo $ramenData[0][2]; ?>"><img src="<?php echo $ramenData[0][1]; ?>" width="220" /></a></td>
  </tr>
  <tr class="txt-box">
    <td align="right" class="txt-box"><?php echo $ramenData[0][0]; ?></td>
  </tr>
</table>
      <!-- /.pic_01 --></div>
    <div id="pic_03"><table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><a href="<?php echo $ramenData[2][2]; ?>"><img src="<?php echo $ramenData[2][1]; ?>" width="178" height="133" /></a></td>
  </tr>
  <tr class="txt-box">
     <td align="right" class="txt-box"><?php echo $ramenData[2][0]; ?></td>
  </tr>
</table><!-- /.pic_03 --></div>
    <!-- /#pic-box --></div>
    

   <!-- /#container --></div>
	
    
    <div id="footer-box">
    <ul>
    	<li id="back02"><a href="index.php"><img src="images/lv2/btn04.jpg" width="449" height="70" /></a></li>
    </ul>
    <!-- /#footer-box --></div>
<!-- /#wrap --></div>






</body>

</html>
