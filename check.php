<!DOCTYPE html>
<html>
<head>
<meta charest="UTF-8">
<title>Create Page</title>
</head>
<body>

<?php

$title=$_POST['title'];
$content=$_POST['content'];


$title=htmlspecialchars($title,ENT_QUOTES,'UTF-8');
$content=htmlspecialchars($content,ENT_QUOTES,'UTF-8');

if($title=='')
{
print'タイトルが入力されていません。<br />';
}
else
{
print'タイトル：';
print $title
print'<br />';
}

if($content=='')
{
print'内容が入力されていません。<br />';
}
else
{
print'内容：';
print $content
print'<br />';
}

if($title==''||$content==''||)
{
print'<form>';
print'<input type="button" onclick="history.back()" value="戻る">';
print'</form>';
}
else
{

print'<form method="post"action="aaa.html">';
print'<input type="hidden" name="name" value="'.title'">';
print'<input type="hidden" name="name" value="'.content'">';
print'<br />';
print'<input type="button" onclick="history.back()" value="戻る">';
print'<input type="submit" value="OK">';
print'</form>';
}

?>

</body>
</html>