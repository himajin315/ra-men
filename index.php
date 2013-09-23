<?php
   require_once('config.php');
   require_once('function.php');


   $mysqli = connectDb();

   $length = 0;

   if ($result = $mysqli->query("select COUNT(*) from main;")) {
    while ($row = $result->fetch_row()) {
         $length = $row[0];
    }
     /* 結果セットを開放します */
     $result->close();
   }
   $imgRand01 = rand(1, $length);
   $imgRand02 = rand(1, $length);

   if ($result = $mysqli->query("select image_url from main where id=$imgRand01;")) {
    while ($row = $result->fetch_row()) {
         $imgUrl01 = $row[0]; //画像１のURLを取り出す
    }
     $result->close();
   }

   if ($result = $mysqli->query("select image_url from main where id=$imgRand02;")) {
    while ($row = $result->fetch_row()) {
         $imgUrl02 = $row[0]; //画像２のURLを取り出す
    }
     $result->close();
   }

   echo $imgUrl01;
   echo "\n";
   echo $imgUrl02;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ラーメン食べ隊</title>
<link rel="stylesheet" href="css/common.css" type="text/css" media="screen" />
</head>

<body id="top">

<div id="wrap">
 
  <div id="container">
    <div id="pic-box">
    <div id="pic_01"><table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><img src="<?php echo $imgUrl01 ?>" /></td>
  </tr>
</table>

      <!-- /.pic_01 --></div>
    <div id="pic_02"><table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><img src="<?php echo $imgUrl02 ?>" /></td>
  </tr>
</table><!-- /.pic_02 --></div>
    <!-- /#pic-box --></div>
    
    <p class="txt01"><img src="images/top/txt01.png" alt="" /></p>
    <!-- /#container --></div>
	
    
    <div id="footer-box">
    <ul>
    	<li class="btn01"><a href="todoufuken.php"><img src="images/top/btn01.jpg" width="447" height="67" /></a></li>
    	<li class="btn02"><a href="tikaku.php"><img src="images/top/btn02.jpg" width="447" height="67" /></a></li>
    	<li class="btn03"><a href="otoriyose.php"><img src="images/top/btn03.gif" width="447" height="67" /></a></li>
    </ul>
    <!-- /#footer-box --></div>
<!-- /#wrap --></div>






</body>

</html>
