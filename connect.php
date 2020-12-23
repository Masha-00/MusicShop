<?php
    $servername="localhost";
    $username="root";
    $password="root";
    $db_name="MusicShop";
    $db=mysqli_connect($servername, $username, $password, $db_name);
    if (!$db) {
        echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
        exit;
      }
    //новые товары
    $query="set names utf8";
    $db->query($query);
    $query="SELECT * FROM `product` WHERE `new`=1";
    $results=$db->query($query);
    //гитары
    $result=mysqli_query($db, "SELECT `id`,`name`,`category`,`price`,`description`,`image`,`new` FROM `product` WHERE `category`='Гитары'");
    $result1=mysqli_query($db, "SELECT `id`,`name`,`category`,`price`,`description`,`image`,`new` FROM `product` WHERE `category`='Ударные установки'");
    $result2=mysqli_query($db, "SELECT `id`,`name`,`category`,`price`,`description`,`image`,`new` FROM `product` WHERE `category`='Синтезаторы'");
    $result3=mysqli_query($db, "SELECT `id`,`name`,`category`,`price`,`description`,`image`,`new` FROM `product` WHERE `category`='Микрофоны'");
    $result4=mysqli_query($db, "SELECT `id`,`name`,`category`,`price`,`description`,`image`,`new` FROM `product` WHERE `category`='Колонки'");
    $result5=mysqli_query($db, "SELECT `id`,`name`,`category`,`price`,`description`,`image`,`new` FROM `product` WHERE `category`='Усилители'");
    $result6=mysqli_query($db, "SELECT `id`,`name`,`category`,`price`,`description`,`image`,`new` FROM `product` WHERE `category`='Наушники'");
    /*function Product()
    {
        $productList=array();
        $result=('SELECT `id`,`name`,`category`,`price`,`description`,`image`,`new` FROM `product`');
        $i=0;
        while($row=$result->fetch())
        {
            $productList[$i]['id']=$row['id'];
            $productList[$i]['name']=$row['name'];
            $productList[$i]['image']=$row['image'];
            $productList[$i]['category']=$row['category'];
            $productList[$i]['price']=$row['price'];
            $productList[$i]['description']=$row['description'];
            $productList[$i]['new']=$row['new'];
            $i++;
        }
        return $productList;
    }*/
?>