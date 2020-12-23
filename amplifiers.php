<?php
 include 'header.php';
 include 'connect.php';
 ?>
 <h3>Усилители</h3>
 <section>
<?php
    foreach($result5 as $ampli):?>
    <!--while($guitars=mysqli_fetch_assoc($result)) ?>-->
    <div class="product-item">
    <img src="<?php echo $ampli["image"]; ?>">
    <div class="product-list">
    <h3><?php echo $ampli["name"]; ?></h3>
    <p><?php echo $ampli["description"]; ?></p>
        <span class="price"><?php echo $ampli["price"]; ?> грн</span>
        <a href="" class="button">В корзину</a>
    </div>
    </div>
<?php endforeach; ?>
</section>
<div style="margin-top: 40%;"></div>
<?php include 'footer.php'; ?>