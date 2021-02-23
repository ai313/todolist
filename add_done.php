<!DOCTYPE html>
<html>
<head>
<meta charest="UTF-8">
<title>Create Page</title>
</head>
<body>

<?php

try
{

$title=$_POST['title'];
$content=$_POST['content'];

$title=htmlspecialchars($title,ENT_QUOTES,'UTF-8');
$content=htmlspecialchars($content,ENT_QUOTES,'UTF-8');

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

$dbh=null;

print $title
print'を追加しました。'<br />';

}
catch (Exception $e)
}
print'ただいま障害により大変ご迷惑をお掛けしております。';
exit();
}

?>

<a href="index.html">戻る</a>

</body>
</html>