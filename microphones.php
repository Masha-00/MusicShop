<?php
 include 'header.php';
 include 'connect.php';
 ?>
 <h3>Микрофоны</h3>
 <section>
<?php
    foreach($result3 as $micro):?>
    <!--while($guitars=mysqli_fetch_assoc($result)) ?>-->
    <div class="product-item">
    <img src="<?php echo $micro["image"]; ?>">
    <div class="product-list">
    <h3><?php echo $micro["name"]; ?></h3>
    <p><?php echo $micro["description"]; ?></p>
        <span class="price"><?php echo $micro["price"]; ?></span>
        <a href="" class="button">В корзину</a>
    </div>
    </div>
<?php endforeach; ?>
</srction>
<?php include 'footer.php'; ?>