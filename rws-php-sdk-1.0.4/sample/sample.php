require_once dirname(__FILE__).'/../autoload.php';

require_once dirname(__FILE__).'/config.php';
require_once dirname(__FILE__).'/helper.php';

$response = null;

// Clientインスタンスを生成 Make client instance
$rwsclient = new RakutenRws_Client();
// アプリIDをセット Set Application ID
$rwsclient->setApplicationId(RAKUTEN_APP_ID);
// アフィリエイトIDをセット (任意) Set Affiliate ID (Optional)
$rwsclient->setAffiliateId(RAKUTEN_APP_AFFILITE_ID);

// 楽天市場商品検索API2 で商品を検索します
// Search by IchibaItemSearch (http://webservice.rakuten.co.jp/api/ichibaitemsearch/)
$response = $rwsclient->execute('IchibaItemSearch', array(
    'genreId' => 110487,
    'hits'    => 1
));

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Rakuten Web Service SDK - Sample</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <header>
      <h1><a href="index.php">Rakuten Web Service SDK - Sample</a></h1>
    </header>
    <?php foreach ($response as $item): ?>
    <li class="item">
      <ul>
        <?php if (!empty($item['mediumImageUrls'][0]['imageUrl'])):
	  //画像の大きさを512x512に変更
	  $imgUrl = $item['mediumImageUrls'][0]['imageUrl'];
	  $outPutImgUrl = str_replace('128x128', '512x512', $imgUrl);
	 ?>
	
	<li class="image"><img src="<?php echo h($outPutImgUrl) ?>" height="256px" width="256px"></li>
      	<?php endif; ?>
      </ul>
    </li>
    <?php endforeach; ?>
  </body>
</html>
