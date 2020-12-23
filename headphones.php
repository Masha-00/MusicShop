<?php
 include 'header.php';
 include 'connect.php';
 ?>
 <h3>Наушники</h3>
 <section>
<?php
    foreach($result6 as $headphones):?>
    <!--while($guitars=mysqli_fetch_assoc($result)) ?>-->
    <div class="product-item">
    <img src="<?php echo $headphones["image"]; ?>">
    <div class="product-list">
    <h3><?php echo $headphones["name"]; ?></h3>
    <p><?php echo $headphones["description"]; ?></p>
        <span class="price"><?php echo $headphones["price"]; ?> грн</span>
        <a href="" class="button">В корзину</a>
    </div>
    </div>
<?php endforeach; ?>
</section>
<div style="margin-top: 40%;"></div>
<?php include 'footer.php'; ?>