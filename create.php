<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
<h1>
    Post New ToDo Page
</h1>
<form method="post",action="check.html">
    <div style="margin: 10px">
        <label for="title">タイトル：</label>
        <input id="title" type="text">

<?php

  if (empty($_POST["title"])) {
        echo "タイトルは入力必須です。";
    }

  if (empty($_POST["content"])) {
        echo "内容は入力必須です。";
    }

if (mb_strlen($_POST["title"]) > 10) {
        echo "10文字以内で入力してください。";
    }

?>

    </div>
    <div style="margin: 10px">
        <label for="content">内容：</label>
        <textarea id="content" name="contents" rows="8" cols="40"></textarea>
    </div>
    <input type="submit" name="post" value="投稿する">
</form>
<form action="check.php">
    <button type="submit" name="back">戻る</button>
</form>
</body>
</html>