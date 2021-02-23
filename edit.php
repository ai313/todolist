<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>
<body>

<?php

try
{

$title=$_POST['title'];
$content=$_POST['content'];

$dsn='mysql:bdname=shop;host=localhost;charest=utf8';
$user='root';
$password=";
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO mst_staff(name,password) VALUES (?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$title;
$data[]=$content;
$stmt->execute($data);

$rec= $stmt->fetch(PDO::FETCH_ASSOC);
$title=$rec['title'];
$content=$rec['content'];

$dbh=null;

}
catch (Exception $e)
}
print'ただいま障害により大変ご迷惑をお掛けしております。';
exit();
}


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

<h1>
    Edit Todo Page
</h1>
<form method="post">
    <div style="margin: 10px">
        <label for="title">タイトル：</label>
        <input id="title" type="text">
    </div>
    <div style="margin: 10px">
        <label for="content">内容：</label>
        <textarea id="content" name="contents" rows="8" cols="40"></textarea>
    </div>
    <input type="submit" name="post" value="編集する">
</form>
<form action="index.php">
    <button type="submit" name="back">戻る</button>
</form>
</body>
</html>