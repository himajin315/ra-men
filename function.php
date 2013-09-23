<?php
function connectDb(){
      $mysqli = mysqli_init(); 
      $mysqli->ssl_set(KEY,CERT,CA,NULL,NULL); 
      $mysqli->real_connect(DNS, DB_USER, DB_PASSWORD ,DATABASE);
      return $mysqli;
}
