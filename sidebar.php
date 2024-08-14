<div class="sidebar">
    <form name="search" id="search" action="all.php" method="get">
        <div class="input-group">
            <input type="text" name="search_name" class="form-control" placeholder="站內搜尋" value="<?php echo (isset($_GET['search_name'])) ? $_GET['search_name'] : ''; ?>" required>
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="fas fa-search fa-lg"></i>
                </button>
            </span>
        </div>
        <?php
        //列出產品類別第一層
        $SQLstring = "SELECT * FROM pyclass WHERE level=1 ORDER BY sort";
        $pyclass01 = $link->query($SQLstring);
        $i = 1; //控制編號順序，用來排版
        ?>
        <div class="shopping-details">
            <h4>購物明細</h4>
            <?php
            //讀取後台購物車內產品數量
            $SQLstring = "SELECT * FROM cart WHERE orderid is NULL AND ip='" . $_SERVER['REMOTE_ADDR'] . "'";
            $cart_rs = $link->query($SQLstring);
            ?>
            <span>商品：<?php echo ($cart_rs) ? $cart_rs->rowCount() : '';?>件</span><br>
            <span>未結帳金額:2150元</span>
        </div>
        <div class="accordion" id="accordionExample">
            <?php while ($pyclass01_Rows = $pyclass01->fetch()) {
                $i = $pyclass01_Rows['classid']; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne<?php echo $i; ?>">
                        <button class="accordion-button collasped" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $i; ?>">
                            <i class="fas <?php echo $pyclass01_Rows['fonticon']; ?> fa-lg fa-fw"></i><?php echo $pyclass01_Rows['cname']; ?>
                        </button>
                    </h2>
                    <?php
                    if (isset($_GET['p_id'])) {   //如果使用產品類別查詢，需取得類別編號上一層類別
                        $SQLstring = sprintf('SELECT uplink FROM pyclass,product WHERE pyclass.classid=product.classid AND p_id=%d ', $_GET['p_id']);
                        $classid_rs = $link->query($SQLstring);
                        $data = $classid_rs->fetch();
                        $ladder = $data['uplink'];
                    } elseif (isset($_GET['level']) && $_GET['level'] == 1) {  //使用第一層類別查詢
                        $ladder = $_GET['classid'];
                    } elseif (isset($_GET['classid'])) {    //如果使用類別查詢需取得上一層類別
                        $SQLstring = "SELECT uplink FROM pyclass WHERE level=2 AND classid=" . $_GET['classid'];
                        $classid_rs = $link->query($SQLstring);
                        $data = $classid_rs->fetch();
                        $ladder = $data['uplink'];
                    } else {
                        $ladder = 1;
                    }
                    //列出產品類別對應的第二層資料 
                    $SQLstring = sprintf('SELECT * FROM pyclass WHERE level=2 AND uplink=%d ORDER BY sort', $pyclass01_Rows['classid']);
                    $pyclass02 = $link->query($SQLstring);
                    ?>
                    <div id="collapseOne<?php echo $i; ?>" class="accordion-collapse collapse <?php echo ($i == $ladder) ? 'show' : ''; ?>" aria-labelledby="headingOne<?php echo $i; ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table">
                                <tbody>
                                    <?php while ($pyclass02_Rows = $pyclass02->fetch()) { ?>
                                        <tr>
                                            <td><a href="all.php?classid=<?php echo $pyclass02_Rows['classid'] ?>"><em class="fas <?php echo $pyclass02_Rows['fonticon']; ?> fa-fw"></em><?php echo $pyclass02_Rows['cname']; ?></a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php $i++;
            } ?>
        </div>
    </form>
</div>