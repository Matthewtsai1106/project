        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" id="navbar">
            <div class="container-fluid">
                <a href="#" class="nav-brand"><img src="./images/Love_Your_Self_紅色字體_-removebg-preview.png" class="img-fluid small-logo" alt="Love Your Self"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">首頁</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./all.php">品項總目錄</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">項鍊</a>

                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">戒指</a>

                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">耳環</a>

                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">包包</a>

                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">鞋類</a>

                        </li>
                        <li class="nav-item d">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">手鍊</a>

                        </li>
                        <?php 
                        //讀取後台購物車內產品數量
                        $SQLstring="SELECT * FROM cart WHERE orderid is NULL AND ip='".$_SERVER['REMOTE_ADDR']."'";
                        $cart_rs=$link->query($SQLstring);
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">購物車<span class="badge text-bg-info"><?php echo ($cart_rs) ? $cart_rs->rowCount() : '';?></span></a>
                        </li>
                        <li class="login">
                            <h5><a href="#"><i class="far fa-edit"></i></a>　<a href="#"><i class="far fa-user"></i></a></h5>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>