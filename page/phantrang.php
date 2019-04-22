<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./fontawesome-free-5.7.2-web/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/Search.css"> 
    <script src="./js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Phan trang</title>
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="logo-text">
                <a href="">
                    <h3>DREAM STORE</h3>
                </a>
            </div>
            <div class="header-link">
                <div class="search-form">
                    <form action="">
                        <input type="text" placeholder="Nhập nội dung cần tìm" class="input-search">
                        <span class="search-icon">
                            <button type="submit"><i class="fa fa-fw fa-search fa-2x"></i></button>
                        </span>
                    </form>
                </div>
                <div class="product-cart">
                    <a href="Giohang.html"><i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <hr noshade size="1" />
    </header>
    <!-- end header -->

    <div class="container">
        <!-- nav -->
        <div class="nav-main">
            <ul>
                <li>
                    <a href="">adidas</a>
                </li>
                <li>
                    <a href="">nike</a>
                </li>
                <li>
                    <a href="">new balance</a>
                </li>
            </ul>
        </div>
        <!-- end nav -->

        <!-- sale-off -->
        <div class="best-seller">
            <div class="content-element">
                <p class="title">ADDIDAS </p>
                <small>Hiển thị từ n -> n trong n sản phẩm</small><br />
                <span class="dash"></span>
            </div>
            <div class="row">
            <?php 
			
				//so san pham muon hien ra
				$sd=8;
	
				//Tinh tong san pham:
				//$url = 'http://192.168.43.136:81/Applaravel/public/chungloai'; 
				//$data = file_get_contents($url);
				//$wizards = json_decode($data , true);
				
				
				//tinh tong san pham nhan dc tu json 
				//$tsp = count($wizards);
				//echo $tsp;
				$tsp =32;
				
				
				//Tinh tong so trang:
				$tst=ceil($tsp/$sd);
				
				//Tinh page hien tai:
				if(isset($_GET['page'])) $page=$_GET['page'];
				else $page=1;
				
				//Tinh vi tri:
				$vitri=($page-1)*$sd;
				
			
			?>
            <?php for($i=$vitri ; $i<$vitri+$sd ; $i++){ ?>
                <div class="column-item">
                    <a href="" class="column-image"><img src="images/phantrang/<?php echo $i ?>.jpg" alt=""></a>
                    <ul>
                        <li>
                            <a href="" class="product-name">ULTRABOOST 29</a>
                            <a href="" class="add-product"><span style="font-size: 30px;">+</span>
                                <span class="hover-add">THÊM VÀO GIỎ</span>
                            </a>
                        </li>
                        <li>
                            <span class="product-terms">
                                <a href="">ADIDAS</a>
                                <span class="comma">,</span>
                                <a href="">GIÀY</a>
                                <span class="comma">,</span>
                                <a href="">ULTRA BOOST</a>
                            </span>
                        </li>
                        <li><span class="product-cost">1.000.000 đ</span></li>
                    </ul>
                </div>
               <?php } ?>
            </div>
        </div>
        <!-- end sale-off -->
         <div class="breakpage">
        <div class="breakpage_container">
            <a href="?page=<?php if( $page==1 ) echo $page; else echo $page-1?>">PREVIOUS</a>
           	<?php 
			for($i=1;$i<=$tst;$i++){
				if($page==$i) echo "<a href='' class='choosed' >$i</a> ";
				else {?>
				   <a href="?page=<?php echo $i;?>"><?php echo $i;?></a>
			<?php }} ?>
            <a href="?page=<?php if( $page==$tst ) echo $page; else echo $page+1 ?>">&nbsp;NEXT &nbsp;</a>
            
	</div>
        </div>
        
    </div>
	
    <!-- footer -->
    <footer style="bottom: 0;">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <p class="footer-head">LIÊN HỆ</p>
                    <ul class="link-footer">
                        <li>DREAM STORE 1: 198/5 Hồ Văn Huê, Phường 9, Quận Phú Nhuận</li><br />
                        <li>DREAM STORE 2 : 1074 Quang Trung, Phường 8, Quận Gò Vấp</li><br />
                        <li>HOTLINE : 0938 263 989 (Mua lẻ) 0938 74 0087 (Mua sỉ)</li>
                    </ul>
                </div>
                <div class="col-3">
                    <p class="footer-head">Kết nối với Shop</p>
                    <ul class="social-sq">
                        <li><a title="Facebook" href="https://www.facebook.com/Smatesmatestore/" rel="nofollow"
                                target="_blank">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li><a title="Youtube" href="https://www.youtube.com/channel/UCY5D59KPPnSVeF5eKpvo4nw"
                                rel="nofollow" target="_blank">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <hr noshade />
            <div class="copyright">
                <br />
                <p>© 2015 <span>Dream Store</span></p><br />
                <p>Giấy phép MXH số 314/GP-BTTTT.</p>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>

</html>