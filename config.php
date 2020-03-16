<?php
    define("ROOT_PATH", dirname(__FILE__));
    define("SITE_URL", "http://jsproject.loc");
    define("DB_USER", "root");
    define("DB_PASS", "root");
    define("DB_NAME", "jsproject");
    //define("SALT", "etrdeyd373xs");
    //session_start();

    $dsn = "mysql:host=localhost;port=3306;dbname=".DB_NAME.";charset=utf8";
    $pdo = new PDO($dsn, 'root', 'root');