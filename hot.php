<div class="hot">
    <h3>熱門商品</h3>
</div>
<?php
//建立熱銷商品查詢
$SQLstring = "SELECT * FROM hot,product,product_img WHERE hot.p_id=product_img.p_id AND hot.p_id=product.p_id ORDER BY h_sort";
$hot = $link->query($SQLstring);
$i = 0; //控制active啟動
?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php for ($i = 0; $i < $hot->rowCount(); $i++) { ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo activeShow($i, 0); ?>" aria-current="true" aria-label="Slide <?php echo $i; ?>"></button>
        <?php } ?>
    </div>
    <div class="carousel-inner">
        <?php
        $i = 0;
        while ($data = $hot->fetch()) { ?>
            <div class="carousel-item <?php echo activeShow($i, 0); ?>">
                <a href="goods.php?p_id=<?php echo $data['p_id'];?>"><img src="./images/<?php echo $data['img_file']; ?>" class="d-block w-100" alt="HOT<?php echo $data['h_sort']; ?>"></a>
                <!-- <img src="./images/<?php //echo $data['img_file']; ?>" class="d-block w-100" alt="HOT<?php //echo $data['h_sort']; ?>"> -->
            </div>
        <?php $i++;
        } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>