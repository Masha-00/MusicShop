<?php
 include 'header.php';
 include 'connect.php';
?>

<body>
<div class="sl_ctr">
  <div class="sldr">  
    <img src="img/Mikrofon.jpg" alt="">
    <img src="img/gitara.jpg" alt="">
    <img src="img/zvuk.jpg" alt="">
    <img src="img/usilok.jpg" alt="">
  </div>
</div>
<!--Карта товара-->
<h3>Хиты продаж</h3>
<section>
<?php
while($row=$results->fetch_assoc())
{
  echo '
  <div class="product-item">
  <img src="'.$row["image"].'">
  <div class="product-list">
    <h3>'.$row["name"].'</h3>
    <p>'.$row["description"].'</p>
      <span class="price">'.$row["price"].'</span>  
      <a href="" class="button">В корзину</a>
  </div>
</div>
  ';
}
?>
</section>
<!--<script src="JS/main.js"></script>-->
<div style="margin-top: 80%;"></div>
<?php
include 'footer.php';
?>
</body>
</html>