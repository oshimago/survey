<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>フリーアンケート</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">回答一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
 <h2>アンケート入力</h2>
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
     <label>名前：<input type="text" name="name"></label><br>
     <label>メールアドレス：<input type="text" name="email"></label><br>
     <label>年齢：<input type="text" name="age"></label><br>
     <label><textarea name="content" rows="4" cols="40"></textarea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
