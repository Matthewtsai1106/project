<?php
//建立廣告輪播carousel資料查詢
$SQLstring = "SELECT * FROM carousel WHERE caro_online=2 ORDER BY caro_sort";
$carousel = $link->query($SQLstring);
$i = 0; //控制active啟動
?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php for ($i = 0; $i < $carousel->rowCount(); $i++) { ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo activeShow($i, 0); ?>" aria-current="true" aria-label="Slide <?php echo $i; ?>"></button>
        <?php } ?>
    </div>
    <div class="carousel-inner">
        <?php
        $i = 0;
        while ($data = $carousel->fetch()) {
        ?>
            <div class="carousel-item <?php echo activeShow($i, 0); ?>">
                <img src="./images/<?php echo $data['caro_pic']; ?>" class="d-block w-100" alt="<?php echo $data['caro_title']; ?>">
            </div>
        <?php $i++;
        } ?>
    </div>
<!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./images/63856630565497000012.jpg" class="d-block w-100" alt="特惠消息">
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/63856630565497000022.jpg" class="d-block w-100" alt="特惠消息">
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/63856630565497000032.jpg" class="d-block w-100" alt="特惠消息">
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div>
                            </div> -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>