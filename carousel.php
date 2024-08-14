<?php
//建立廣告輪播carousel資料查詢
$SQLstring = "SELECT * FROM carousel WHERE caro_online=1 ORDER BY caro_sort";
$carousel = $link->query($SQLstring);
$i = 0; //控制active啟動
?>
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php $i = 0;
        while ($data = $carousel->fetch()) { ?>
            <div class="carousel-item <?php echo activeShow($i, 0); ?>">
                <a href="goods.php?p_id=<?php echo $data['p_id'];?>"><img src="./images/<?php echo $data['caro_pic']; ?>" class="d-block w-100" alt="<?php echo $data['caro_title']; ?>"></a>
                <!-- <img src="./images/<?php //echo $data['caro_pic']; ?>" class="d-block w-100" alt="<?php //echo $data['caro_title']; ?>"> -->
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