<?php
 include 'header.php';
 include 'connect.php';
 ?>
 <h3>Гитары</h3>
 <section>
<?php
    foreach($result as $guitars):?>
    <!--while($guitars=mysqli_fetch_assoc($result)) ?>-->
    <div class="product-item">
    <img src="<?php echo $guitars["image"]; ?>">
    <div class="product-list">
    <h3><?php echo $guitars["name"]; ?></h3>
    <p><?php echo $guitars["description"]; ?></p>
        <span class="price"><?php echo $guitars["price"]; ?> грн</span>
        <a href="" class="button">В корзину</a>
    </div>
    </div>
<?php endforeach; ?>
</section>
<div style="margin-top: 40%;"></div>
<?php include 'footer.php'; ?>