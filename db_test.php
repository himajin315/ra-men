<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">.
<title>PHP TEST</title>
</head>
<body>

<?php
print('<p>始まり</p>');

$mysqli = mysqli_init(); 

print('<p>初期化</p>');

$mysqli->ssl_set('key/himajin315-key.pem','key/himajin315-cert.pem',
'key/cleardb-ca.pem',NULL,NULL); 
print('<p>キー取得完了</p>');

$mysqli->real_connect('ap-cdbr-azure-east-b.cloudapp.net', 'befd75233a2af5', '7a9e3c9f' ,'ramen');
print('<p>データベース接続完了</p>');

echo 'Success... ' . $mysqli->host_info . "\n";

mysql_set_charset('utf8');

if ($result = $mysqli->query("SELECT name FROM test LIMIT 10;")) {
    printf("Select returned %d rows.\n", $result->num_rows);
    while ($row = $result->fetch_row()) {
         printf("%s\n", $row[0]);
    }

    /* 結果セットを開放します */
    $result->close();
}



$mysqli->close();
print('<p>データベース接続解除</p>');

?>
</body>
</html>
