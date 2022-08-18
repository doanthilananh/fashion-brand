<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TTH STORE</title>
    <link href="{{ asset('../public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('../public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('../public/frontend/css/prettyPhoto.csss')}}" rel="stylesheet">
    <link href="{{ asset('../public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{ asset('../public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{ asset('../public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{ asset('../public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="{{ asset('../public/frontend/images/computer.png')}}" type="image/png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> 0382524296</a></li>
								<li><a href="mailto:Nhom4@mail.com"><i class="fa fa-envelope"></i> Nhom4@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{url('Trangchu')}}"><img src="{{asset('../public/frontend/images/logo.png')}}" alt="" /></a>
						</div>
	
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Tài khoản</a></li>
								<li><a href=""><i class="fa fa-star"></i> Yêu thích</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Đăng nhập</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{url('Trangchu')}}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Sản phẩm mới</a></li>
										<li><a href="product-details.html">Sản phẩm cũ</a></li> 
										<!-- <li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li>  -->
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#" >Tin Công Nghệ<!--<i class="fa fa-angle-down"></i>--></a>
                                    <!-- <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html" class="active">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul> -->
                                </li> 
								<!-- <li><a href="404.html">404</a></li> -->
								<li><a href="contact-us.html">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active" >
								<div class="col-sm-6">
									<h1><span>TTH</span> STORE</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6" style=" height: 470px;">
									<img src="{{asset('../public/frontend/images/girl1.jpg')}}" class="girl img-responsive" alt="" style="width: 100%;" />
										
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>TTH</span> STORE</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6" style=" height: 470px;">
									<img src="{{asset('../public/frontend/images/girl2.jpg')}}" class="girl img-responsive" alt="" style="width: 100%;"/>
								
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>TTH</span> STORE</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6" style=" height: 470px;">
									<img src="{{asset('../public/frontend/images/girl3.jpg')}}" class="girl img-responsive" alt="" style="width: 100%;  height: 100%;"/>
								
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section style="margin-top: 15px;">

		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>DANH MỤC</h2>
						<div class="panel-group category-products" id="accordian" style="border-radius: 7px; "><!--category-productsr-->
							@foreach($cate_product as $key => $cate_pro)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a  href="{{url('/danh-muc-san-pham/'.$cate_pro->category_id)}}">
											{{$cate_pro->category_name}}
										</a>
									</h4>
								</div>
								
							</div>
							@endforeach
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>THƯƠNG HIỆU</h2>
							<div class="brands-name" style="border-radius: 7px;">
								<ul class="nav nav-pills nav-stacked">
								@foreach($brand_product as $key => $brand_pro)
									<li><a href="{{url('/thuong-hieu-san-pham/'.$brand_pro->brand_id)}}"> <span class="pull-right">(50)</span>{{$brand_pro->brand_name}}</a></li>
									
								@endforeach
								</ul>
							</div>
						</div>
						<div class="price-range"><!--price-range-->
							
							<div class="panel panel-default" style="margin-top:30px;border: 1px solid black;">
                  <div class="panel-heading"> <h2 style="margin: 0;">Tìm theo mức giá </h2></div>
                  <div class="panel-body">
                    <ul class="list-group" style="border:0px;">
                      <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                        <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
                      </li>
                      <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
                      </li>
                      <li class="list-group-item" style="border:0px; text-align:center">
                        <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                      </li>
                    </ul>
                  </div>
                </div>
						</div><!--/price-range-->
						<div class="shipping text-center"><!--shipping-->
							<img src="images/shop/quangcao.png" alt="" />
						</div><!--/shipping-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					@yield("feature-items")

					
				</div>
			</div>
		</div>
		<div class="bgimg1"></div>
		<div class="container">
			<div class="row" style="margin-top: 80px;">
				<div class="col-sm-3">
					<img src="{{asset('../public/frontend/images/sale.jpg')}}" style="width: 100%;">
					<br>
					<br>
					<br>
					<img src="{{asset('../public/frontend/images/sale2.jpg')}}" style="width: 100%;">
				</div>
				<div class="col-sm-9 padding-right" >
										
					@yield("do-du-lieu")
				</div>
			</div>
		</div>
	</section>
	<div class="bgimg2"></div>
	<footer id="footer">
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>HỆ THỐNG CỬA HÀNG</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href=""> Địa chỉ 1: 19, ngõ 39, Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội.</a></li>
								<li><a href=""> Địa chỉ 2: CT10B, Đại Thanh, Thanh Trì, Hà Nội.</a></li>
								
								<li><a href=""> Địa chỉ 4: 162 - 164 Thái Hà, Phường Trung Liệt, Quận Đống Đa, Hà Nội</a></li>
							
							</ul>
						</div>
					</div>
				
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Chính sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Chính sách bảo hành</a></li>
								<li><a href="">Chính sách thanh toán</a></li>
								<li><a href="">Chính sách giao hàng</a></li>
								<li><a href="">Chính sách bảo mật</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>HỆ THỐNG TỔNG ĐÀI MIỄN PHÍ:</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Gọi mua hàng	0365073198</a></li>
								<li><a href="">Hỗ trợ khách hàng 0382524296</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Nhận thêm nhiều ưu đãi hơn tại E-Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Nhập email của bạn" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		

		
	</footer>
	

  
    <script src="{{ asset('../public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('../public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('../public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('../public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('../public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('../public/frontend/js/main.js')}}"></script>
</body>
</html>