<?php
//共通に使う関数を記述

function h($a){
    return htmlspecialchars($a, ENT_QUOTES);
}

function db_con(){
    try {
        $pdo = new PDO('mysql:dbname=survey_db;charset=utf8;host=localhost','root','');
        return $pdo;
    } catch (PDOException $e) {
        exit('データベースへの接続に失敗しました:'.$e->getMessage());
    }
}

function redirect($page){
    header("Location: ".$page);
    exit;
}

function sqlError($stmt){
    $error = $stmt->errorInfo();
    exit("データの登録に失敗しました:".$error[2]);
}
