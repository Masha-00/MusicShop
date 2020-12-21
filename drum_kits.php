<?php
 include 'header.php';
 include 'connect.php';
 ?>
 <h3>Ударные установки</h3>
 <section>
<?php
    foreach($result1 as $drum):?>
    <div class="product-item">
    <img src="<?php echo $drum["image"]; ?>">
    <div class="product-list">
    <h3><?php echo $drum["name"]; ?></h3>
    <p><?php echo $drum["description"]; ?></p>
        <span class="price"><?php echo $drum["price"]; ?></span>
        <a href="" class="button">В корзину</a>
    </div>
    </div>
<?php endforeach; ?>
</section>
<?php include 'footer.php'; ?>