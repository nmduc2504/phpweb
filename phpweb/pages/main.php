<div class="main">
            <?php
                include("sidebar/sidebar.php")
            ?>
            <div class="maincontent">
                <?php
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }else{
                    $tam = '';                
                }
                if($tam=='danhmuc'){
                    include("main/danhmuc.php");
                }elseif($tam=='giohang'){
                    include("main/giohang.php");
                }
                elseif($tam=='lienhe'){
                    include("main/lienhe.php");
                }
                elseif($tam=='tintuc'){
                    include("main/tintuc.php");
                }
                else{
                    include("main/index.php");
                }
                ?>
            </div>
        </div>