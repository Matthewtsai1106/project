<!-- 這是將資料庫，連線程式載入 -->
<?php require_once('Connections/conn_db.php'); ?>
<!-- 如過session沒有啟動，則啟動session功能，這是跨網頁變數存取 -->
<?php (!isset($_SESSION)) ? session_start() : ""; ?>
<!-- 載入共用PHP函數庫 -->
<?php require_once('php_lib.php'); ?>
<!doctype html>
<html lang="zh-Tw">

<head>
  <!-- 引入網頁標頭file -->
  <?php require_once("headfile.php"); ?>
  <link rel="stylesheet" href="all.css">
  <link rel="stylesheet" href="./fancybox-2.1.7/source/jquery.fancybox.css">
</head>

<body>
  <section id="header">
    <!-- 引入導覽列 -->
    <?php require_once("navbar.php"); ?>
  </section>

  <section id="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- 引入優惠訊息模組 -->
          <?php require_once("discount.php"); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <!-- 引入sidebar產品分類導覽 -->
          <?php require_once("sidebar.php"); ?>
        </div>
        <div class="col-md-10">
          <!-- 建立類別分項 -->
          <?php require_once("breadcrumb.php"); ?>
          <!-- 引入product產品模組 -->
          <?php require_once("goods_content.php"); ?>
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
  <script type="text/javascript" src="./fancybox-2.1.7/source/jquery.fancybox.js"></script>
  <script>
    $(function() {
      //定義在滑鼠滑過圖片檔名田入主圖src中
      $(".card .row.mt-2 .col-md-4 a").mouseover(function() {
        let imgsrc = $(this).children("img").attr("src");
        $("#showGoods").attr({
          "src": imgsrc
        });
      });
      //將子圖片放到lightbox展示
      $(".fancybox").fancybox();
    });
  </script>
</body>

</html>