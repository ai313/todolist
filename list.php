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

$dsn='mysql:bdname=shop;host=localhost;charest=utf8';
$user='root';
$password=";
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name FROM mst_staff WHERE 1';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print'一覧'<br /><br />';

while(true)
{
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
if($rec==false)
{
break;
}
print $rec['name'];
print'<br />';
}

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