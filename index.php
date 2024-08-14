<!-- 這是將資料庫，連線程式載入 -->
<?php require_once('Connections/conn_db.php'); ?>
<!-- 如過session沒有啟動，則啟動session功能，這是跨網頁變數存取 -->
<?php (!isset($_SESSION)) ? session_start() : ""; ?>
<!-- 載入共用PHP函數庫 -->
<?php require_once("php_lib.php"); ?>
<!doctype html>
<html lang="zh-Tw">

<head>
    <!-- 引入網頁標頭file -->
    <?php require_once("headfile.php"); ?>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <section id="header">
        <img src="./images/Love_Your_Self_紅色字體_-removebg-preview.png" class="large-logo" width="100%" height="auto">
        <!-- 引入導覽列 -->
        <?php require_once("navbar.php"); ?>
    </section>
    <section id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- 引入廣告輪播模組 -->
                    <?php require_once("carousel.php"); ?>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <!-- 引入sidebar產品分類導覽 -->
                        <?php require_once("sidebar.php"); ?>
                    </div>
                    <div class="col-md-10">
                        <!-- 引入熱銷商品模組 -->
                        <?php require_once("hot.php"); ?>
                        <!-- 引入優惠訊息模組 -->
                        <?php require_once("discount.php"); ?>

                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eWmbPiXNru0?autoplay=1&loop=1&playlist=eWmbPiXNru0&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <section id="footer">
        <!-- 聯絡資訊及服務說明 -->
        <?php require_once("footer.php"); ?>
    </section>
    <!-- js -->
    <?php require_once("jsfile.php"); ?>

</body>

</html>