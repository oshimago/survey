<?php
// GETデータ取得
$id = $_GET["id"];

// データベース接続
include "functions.php";
$pdo = db_con();

// データ取得
$stmt = $pdo->prepare("SELECT * FROM survey_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// データ一覧表示
if ($status == false) {
  sqlError($stmt);
} else {
  $result = $stmt->fetch();

}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
    <fieldset>
      <legend>フリーアンケート</legend>
      <label>名前：<input type="text" name="name" value="<?=$result["name"]?>"></label><br>
      <label>メールアドレス：<input type="text" name="email" value="<?=$result["email"]?>"></label><br>
      <label>年齢：<input type="text" name="age" value="<?=$result["age"]?>"></label><br>
      <label><textarea name="content" rows="4" cols="40"><?=$result["content"]?></textarea></label><br>
      <input type="hidden" name="id" value="<?=$id?>">
      <input type="submit" value="更新">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
