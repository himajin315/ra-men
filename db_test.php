<?php
   require_once('config.php');
   require_once('function.php');
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">.
<title>PHP TEST</title>
</head>
<body>

<?php

$mysqli = connectDb();
   
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
