<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">.
<title>PHP TEST</title>
</head>
<body>

<?php
phpinfo();
print('<p>始まり</p>');

$db = mysqlii_init(); 
print('<p>初期化</p>');

$db->ssl_set('key/himajin315-key.pem','key/himajin315-cert.pem',
'key/cleardb-ca.pem',NULL,NULL); 
print('<p>キー取得完了</p>');

$db->real_connect('ap-cdbr-azure-east-b.cloudapp.net', 'himajin315', '7a9e3c9f', 'sample');
print('<p>データベース接続完了</p>');



mysql_set_charset('utf8');

$db = mysql_query('SELECT id,name FROM test');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    print('<p>');
    print('id='.$row['id']);
    print(',name='.$row['name']);
    print('</p>');
}

$db->close();
print('<p>データベース接続解除</p>');

?>
</body>
</html>
