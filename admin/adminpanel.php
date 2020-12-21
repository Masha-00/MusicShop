<!doctype html>
<html lang="ru">
<head>
  <title>Админ-панель</title>
</head>
<body>
  <style>
    th {
    font-weight: normal;
    color: #039;
    padding: 10px 15px;
  }
  td {
    color: #669;
    border-top: 1px solid #e8edff;
    padding: 10px 15px;
  }
  tr:hover td {background: #e8edff;}
  </style>
  <?php
   
 include '../connect.php';
    

    //Если переменная Name передана
    if (isset($_POST["name"])) {
      //Если это запрос на обновление, то обновляем
      if (isset($_GET['red_id'])) {
          $sql = mysqli_query($db, "UPDATE product SET name = '{$_POST['name']}',
          category= '{$_POST['category']}',
          price = '{$_POST['price']}',
          description= '{$_POST['description']}',
          image= '{$_POST['image']}',
          new= '{$_POST['new']}'
          WHERE id={$_GET['red_id']}");
      } else {
          //Иначе вставляем данные, подставляя их в запрос
          $sql = mysqli_query($db, "INSERT INTO product (name,category,price,description,image,new) 
          VALUES ('{$_POST['name']}', '{$_POST['category']}','{$_POST['price']}', '{$_POST['description']}', 
          '{$_POST['image']}', '{$_POST['new']}')");
      }

      //Если вставка прошла успешно
      if ($sql) {
        echo '<p>Успешно!</p>';
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($db) . '</p>';
      }
    }

    if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
      //удаляем строку из таблицы
      $sql = mysqli_query($db, "DELETE FROM product WHERE id = {$_GET['del_id']}");
      if ($sql) {
        echo "<p>Товар удален.</p>";
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($db) . '</p>';
      }
    }

    //Если передана переменная red_id, то надо обновлять данные. Для начала достанем их из БД
    if (isset($_GET['red_id'])) {
      $sql = mysqli_query($db, "SELECT id,name,category,price,description,image,new FROM product 
      WHERE id={$_GET['red_id']}");
      $product = mysqli_fetch_array($sql);
    }
  ?>
  <form action="" method="post">
  <p><a href="?add=new">Добавить новый товар</a></p>
    <table>
      <tr>
        <td>Наименование:</td>
        <td><input type="text" name="name" value="<?= isset($_GET['red_id']) ? $product['name'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Категория:</td>
        <td><input type="text" name="category" value="<?= isset($_GET['red_id']) ? $product['category'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Цена:</td>
        <td><input type="text" name="price" size="3" value="<?= isset($_GET['red_id']) ? $product['price'] : ''; ?>"> грн.</td>
      </tr>
      <tr>
        <td>Описание:</td>
        <td><textarea type="text" name="description" value="<?= isset($_GET['red_id']) ? $product['description'] : ''; ?>"></textarea></td>
      </tr>
      <tr>
        <td>Фото:</td>
        <td><input type="text" name="image" value="<?= isset($_GET['red_id']) ? $product['image'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>New:</td>
        <td><input type="text" name="new" value="<?= isset($_GET['red_id']) ? $product['new'] : ''; ?>"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="OK"></td>
      </tr>
    </table>
  </form>
  <table>
    <tr>
      <td>Идентификатор</td>
      <td>Наименование</td>
      <td>Категория</td>
      <td>Цена</td>
      <td>Описание</td>
      <td>Фото</td>
      <td>New</td>
      <td>Удаление</td>
      <td>Редактирование</td>
    </tr>
    <?php
      $sql = mysqli_query($db, 'SELECT id, name, category, price, description, image, new FROM product');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td>{$result['id']}</td>" .
             "<td>{$result['name']}</td>" .
             "<td>{$result['category']}</td>".
             "<td>{$result['price']} грн</td>" .
             "<td>{$result['description']}</td>" .
             "<td>{$result['image']}</td>" .
             "<td>{$result['new']}</td>" .
             "<td><a href='?del_id={$result['id']}'>Удалить</a></td>" .
             "<td><a href='?red_id={$result['id']}'>Изменить</a></td>" .
             '</tr>';
      }
    ?>
  </table>
</body>
</html>