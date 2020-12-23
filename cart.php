<?php
 include 'header.php';
 include 'connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
  <link rel="stylesheet" href="css/cart.css">
    </head>
<body>
<h3>Корзина</h3>
<table class="shopping-cart">
    <tr>
        <th>ID товара</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Итого</th>
        <th></th>
    </tr>
    <tr>
        <td>1</td>
        <td>Гитара 1</td>
        <td>14000 грн</td>
        <td>1 шт.</td>
        <td>14000 грн</td>
        <td><button>Удалить</button></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Гитара 2</td>
        <td>18000 грн</td>
        <td>2 шт.</td>
        <td>36000 грн</td>
        <td><button>Удалить</button></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Микрофон 1</td>
        <td>4000 грн</td>
        <td>1 шт.</td>
        <td>4000 грн</td>
        <td><button>Удалить</button></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Всего: 54000 грн</td>
    </tr>
</table>
<div class="button_zakaz">
<button class="btn">Оформить заказ</button><br>
<button class="btn" id="btn-del">Очистить корзину</button>
</div>
<div style="margin-top: 5%;">
<?php
include 'footer.php';
?>
</div>
</body>
</html>