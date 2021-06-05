<?php

require_once 'Crypt/RSA.php';
$str = $_GET['s'];

//echo strtoupper(md5($str));
$rsa = new Crypt_RSA();
   
echo CRYPT_RSA_ENCRYPTION_OAEP;
   
?>