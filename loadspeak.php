<?php
 include 'header.php';
 include 'connect.php';
 ?>
 <h3>Колонки</h3>
 <section>
<?php
    foreach($result4 as $loadspeak):?>
    <!--while($guitars=mysqli_fetch_assoc($result)) ?>-->
    <div class="product-item">
    <img src="<?php echo $loadspeak["image"]; ?>">
    <div class="product-list">
    <h3><?php echo $loadspeak["name"]; ?></h3>
    <p><?php echo $loadspeak["description"]; ?></p>
        <span class="price"><?php echo $loadspeak["price"]; ?></span>
        <a href="" class="button">В корзину</a>
    </div>
    </div>
<?php endforeach; ?>
</section>
<?php include 'footer.php'; ?>