<?php
// GETデータ取得
$id = $_GET["id"];

// データベース接続
include "functions.php";
$pdo = db_con();

// データ取得
$stmt = $pdo->prepare("DELETE FROM survey_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// データ一覧表示
if ($status == false) {
  sqlError($stmt);
} else {
  redirect("select.php");
}
