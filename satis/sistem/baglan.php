<?php
$domain     =   "http://localhost/projeler/satis/";

session_start();
ob_start();

try{
 $db = new PDO("mysql:host=localhost; dbname=satis; charset=utf8;","root","");
} catch(PDOException $error){
    echo "<center><b>Veri Tabanına Bağlanamadı </b></center>";  $error->getMessage();
}

    

















?>