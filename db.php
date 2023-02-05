<?php

$pdo = new PDO('mysql:host=localhost;dbname=webmemo_1;charset=utf8','root','1234',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]); 

?>