<?php
// POSTデータ取得
$name    = $_POST["name"];
$email   = $_POST["email"];
$age     = $_POST["age"];
$content = $_POST["content"];
$id      = $_POST["id"];

// データベース接続
include "functions.php";
$pdo = db_con();

// データ更新SQL作成
$sql = "UPDATE survey_table SET name=:name,email=:email,age=:age,content=:content WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
    // データ登録エラー
    sqlError($stmt);
} else {
    // index.phpへリダイレクト
    redirect("select.php");
}
?>
