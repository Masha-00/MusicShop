<?php
$servername="localhost";
$username="root";
$password="root";
$db_name="MusicShop";
$db=mysqli_connect($servername, $username, $password, $db_name);

$id=$_POST['id'];
$name = $_POST['name'];
$text = $_POST['text'];
$category=$_POST['category'];
$price=$_POST['price'];
$foto=$_POST['foto'];
$new=$_POST['new'];
$add = "INSERT INTO product (`id`, `name`, `category`, `price`, `description`, `image`, `new`) VALUES ('$id', '$name', '$category', '$price',  $text', '$foto', '$new')";
$res = mysqli_query($db, $add);
//mysqli_close($db);
if ($res)
echo 'Товар успешно добавлен';
?>