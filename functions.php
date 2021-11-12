<?php
function db_conn() { 


    $host = 'localhost';          //ホスト名　'127.0.0.1'; 

    $db = 'lesson1';              //データベース名 

    $db_user = 'root';            //MySQL接続ユーザー名 

    $db_pass = '';                //MySQL接続パスワード 

    $charset = 'utf8mb4';         //文字コード 

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";   //DSN 


    try { 
        $dbh = new PDO($dsn, $db_user, $db_pass);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 

    } catch (PDOException $e){ 

        echo $e->getMessage(); 

    } 

    return $dbh; 

} 
?> 
