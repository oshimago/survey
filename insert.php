<?php
// POSTデータ取得
$name   = $_POST["name"];
$email  = $_POST["email"];
$age    = $_POST["age"];
$content = $_POST["content"];

// データベース接続
include "functions.php";
$pdo = db_con();

// データ登録SQL作成
$sql = "INSERT INTO survey_table(name,email,age,content,datetime)VALUES(:name,:email,:age,:content,sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
    // データ登録エラー
    sqlError($stmt);
} else {
    // index.phpへリダイレクト
    redirect("index.php");
}
