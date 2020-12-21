<?php
 include 'header.php';
 include 'connect.php';
 ?>
 <h3>Синтезаторы</h3>
 <section>
<?php
    foreach($result2 as $sintez):?>
    <!--while($guitars=mysqli_fetch_assoc($result)) ?>-->
    <div class="product-item">
    <img src="<?php echo $sintez["image"]; ?>">
    <div class="product-list">
    <h3><?php echo $sintez["name"]; ?></h3>
    <p><?php echo $sintez["description"]; ?></p>
        <span class="price"><?php echo $sintez["price"]; ?></span>
        <a href="" class="button">В корзину</a>
    </div>
    </div>
<?php endforeach; ?>
</section>
<?php include 'footer.php'; ?>