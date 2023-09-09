<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tasnm || Home Version One</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('template')?>/img/favicon.ico">
		<!-- google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?=base_url('template')?>/css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="<?=base_url('template')?>/css/animate.css">
		<!-- pe-icon-7-stroke -->
		<link rel="stylesheet" href="<?=base_url('template')?>/css/pe-icon-7-stroke.min.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="<?=base_url('template')?>/css/jquery-ui.min.css">
        <!-- Image Zoom CSS
		============================================ -->
        <link rel="stylesheet" href="<?=base_url('template')?>/css/img-zoom/jquery.simpleLens.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="<?=base_url('template')?>/css/meanmenu.min.css">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="<?=base_url('template')?>/lib/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="<?=base_url('template')?>/lib/css/preview.css" type="text/css" media="screen" />
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="<?=base_url('template')?>/css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="<?=base_url('template')?>/css/font-awesome.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="<?=base_url('template')?>/style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="<?=base_url('template')?>/css/responsive.css">
		<!-- modernizr css -->
        <script src="<?=base_url('template')?>/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?=base_url('template')?>/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header section start -->
		<header>
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-4">
							<div class="left-header clearfix">
								<ul>
									<li><p><i class="fa fa-phone" aria-hidden="true"></i>(+880) 1910 000251</p></li>
									<li class="hd-none"><p><i class="fa fa-clock-o" aria-hidden="true"></i>Mon-fri : 9:00-19:00</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-sm-8">
							<div class="right-header">
								<ul>
									<li><a href="account"><i class="fa fa-user"></i>My account</a></li>
									<li><a href="wishlist"><i class="fa fa-heart"></i>My wishlist</a></li>
									<li><a href="checkout"><i class="fa fa-usd"></i>Creck out</a></li>
									<li><a href="login"><i class="fa fa-lock"></i>Login</a></li>
                                    <li><a href="<?=base_url('logout')?>" value="alert" onclick="alert('Logout Successfully')"> <i class="fa fa-unlock"></i>Logout</a></li>
                                    
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom header-bottom-one" id="sticky-menu">
				<div class="container relative">
					<div class="row">
						<div class="col-sm-2 col-md-2 col-xs-4">
							<div class="logo">
								<a href="home"><img src="<?=base_url('template')?>/img/logo.png" alt="" /></a>
							</div>
						</div>
						<div class="col-sm-10 col-md-10 col-xs-8 static">
							<div class="all-manu-area">
							    <div class="mainmenu clearfix hidden-sm hidden-xs">
                                    <nav>
                                        <ul>
                                            <li><a href="shop">Shop</a></li>   
                                            <li><a href="blog">Blog</a></li>
                                            <li><a href="about">About</a></li>
                                            <li><a href="contact">Contact</a></li>
                                           
                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu start -->
                                <div class="mobile-menu-area hidden-lg hidden-md">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="<?=base_url('template')?>/shop.html">Shop</a>
                                                    <ul>
                                                        <li><a href="<?=base_url('template')?>/#">all products</a>
                                                            <ul>
                                                                <li>
                                                                    <span>men’s wear</span>
                                                                    <a href="<?=base_url('template')?>/#">shirts & top</a>
                                                                    <a href="<?=base_url('template')?>/#">shoes</a>
                                                                    <a href="<?=base_url('template')?>/#">dresses</a>
                                                                    <a href="<?=base_url('template')?>/#">shwmwear</a>
                                                                    <a href="<?=base_url('template')?>/#">jeans</a>
                                                                    <a href="<?=base_url('template')?>/#">sweaters</a>
                                                                    <a href="<?=base_url('template')?>/#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>women’s wear</span>
                                                                    <a href="<?=base_url('template')?>/#">shirts & tops</a>
                                                                    <a href="<?=base_url('template')?>/#">shoes</a>
                                                                    <a href="<?=base_url('template')?>/#">dresses</a>
                                                                    <a href="<?=base_url('template')?>/#">shwmwear</a>
                                                                    <a href="<?=base_url('template')?>/#">jeans</a>
                                                                    <a href="<?=base_url('template')?>/#">sweaters</a>
                                                                    <a href="<?=base_url('template')?>/#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>accessories</span>
                                                                    <a href="<?=base_url('template')?>/#">sunglasses</a>
                                                                    <a href="<?=base_url('template')?>/#">leather</a>
                                                                    <a href="<?=base_url('template')?>/#">belts</a>
                                                                    <a href="<?=base_url('template')?>/#">rings</a>
                                                                    <a href="<?=base_url('template')?>/#">sweaters</a>
                                                                    <a href="<?=base_url('template')?>/#">persess</a>
                                                                    <a href="<?=base_url('template')?>/#">bags</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="<?=base_url('template')?>/#">New products</a>
                                                            <ul>
                                                                <li>
                                                                    <span>men’s wear</span>
                                                                    <a href="<?=base_url('template')?>/#">shirts & top</a>
                                                                    <a href="<?=base_url('template')?>/#">shoes</a>
                                                                    <a href="<?=base_url('template')?>/#">jeans</a>
                                                                    <a href="<?=base_url('template')?>/#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>women’s wear</span>
                                                                    <a href="<?=base_url('template')?>/#">shirts & tops</a>
                                                                    <a href="<?=base_url('template')?>/#">shoes</a>
                                                                    <a href="<?=base_url('template')?>/#">dresses</a>
                                                                    <a href="<?=base_url('template')?>/#">shwmwear</a>
                                                                    <a href="<?=base_url('template')?>/#">jeans</a>
                                                                    <a href="<?=base_url('template')?>/#">sweaters</a>
                                                                    <a href="<?=base_url('template')?>/#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>accessories</span>
                                                                    <a href="<?=base_url('template')?>/#">sunglasses</a>
                                                                    <a href="<?=base_url('template')?>/#">leather</a>
                                                                    <a href="<?=base_url('template')?>/#">belts</a>
                                                                    <a href="<?=base_url('template')?>/#">sweaters</a>
                                                                    <a href="<?=base_url('template')?>/#">persess</a>
                                                                    <a href="<?=base_url('template')?>/#">bags</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="<?=base_url('template')?>/#">best sell</a>
                                                            <ul>
                                                                <li>
                                                                    <span>men’s wear</span>
                                                                    <a href="<?=base_url('template')?>/#">shirts & top</a>
                                                                    <a href="<?=base_url('template')?>/#">shoes</a>
                                                                    <a href="<?=base_url('template')?>/#">dresses</a>
                                                                    <a href="<?=base_url('template')?>/#">shwmwear</a>
                                                                    <a href="<?=base_url('template')?>/#">jeans</a>
                                                                    <a href="<?=base_url('template')?>/#">sweaters</a>
                                                                    <a href="<?=base_url('template')?>/#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>accessories</span>
                                                                    <a href="<?=base_url('template')?>/#">sunglasses</a>
                                                                    <a href="<?=base_url('template')?>/#">leather</a>
                                                                    <a href="<?=base_url('template')?>/#">belts</a>
                                                                    <a href="<?=base_url('template')?>/#">rings</a>
                                                                    <a href="<?=base_url('template')?>/#">sweaters</a>
                                                                    <a href="<?=base_url('template')?>/#">persess</a>
                                                                    <a href="<?=base_url('template')?>/#">bags</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="<?=base_url('template')?>/#">features products</a>
                                                            <ul>
                                                                <li>
                                                                    <span>men’s wear</span>
                                                                    <a href="<?=base_url('template')?>/#">shirts & top</a>
                                                                    <a href="<?=base_url('template')?>/#">shoes</a>
                                                                    <a href="<?=base_url('template')?>/#">sweaters</a>
                                                                    <a href="<?=base_url('template')?>/#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>women’s wear</span>
                                                                    <a href="<?=base_url('template')?>/#">shirts & tops</a>
                                                                    <a href="<?=base_url('template')?>/#">shoes</a>
                                                                    <a href="<?=base_url('template')?>/#">dresses</a>
                                                                    <a href="<?=base_url('template')?>/#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>accessories</span>
                                                                    <a href="<?=base_url('template')?>/#">sunglasses</a>
                                                                    <a href="<?=base_url('template')?>/#">leather</a>
                                                                    <a href="<?=base_url('template')?>/#">belts</a>
                                                                    <a href="<?=base_url('template')?>/#">rings</a>
                                                                    <a href="<?=base_url('template')?>/#">sweaters</a>
                                                                    <a href="<?=base_url('template')?>/#">persess</a>
                                                                    <a href="<?=base_url('template')?>/#">bags</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="<?=base_url('template')?>/#">popular products</a>
                                                            <ul>
                                                                <li>
                                                                    <span>men’s wear</span>
                                                                    <a href="<?=base_url('template')?>/#">shirts & top</a>
                                                                    <a href="<?=base_url('template')?>/#">shoes</a>
                                                                    <a href="<?=base_url('template')?>/#">dresses</a>
                                                                    <a href="<?=base_url('template')?>/#">jeans</a>
                                                                    <a href="<?=base_url('template')?>/#">sweaters</a>
                                                                    <a href="<?=base_url('template')?>/#">jacket</a>
                                                                </li>
                                                                <li>
                                                                    <span>women’s wear</span>
                                                                    <a href="<?=base_url('template')?>/#">shirts & tops</a>
                                                                    <a href="<?=base_url('template')?>/#">shoes</a>
                                                                    <a href="<?=base_url('template')?>/#">dresses</a>
                                                                </li>
                                                                <li>
                                                                    <span>accessories</span>
                                                                    <a href="<?=base_url('template')?>/#">sunglasses</a>
                                                                    <a href="<?=base_url('template')?>/#">leather</a>
                                                                    <a href="<?=base_url('template')?>/#">belts</a>
                                                                    <a href="<?=base_url('template')?>/#">rings</a>
                                                                    <a href="<?=base_url('template')?>/#">sweaters</a>
                                                                    <a href="<?=base_url('template')?>/#">persess</a>
                                                                    <a href="<?=base_url('template')?>/#">bags</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?=base_url('template')?>/shop.html">Lookbook</a></li>
                                                <li><a href="<?=base_url('template')?>/blog.html">Blog</a></li>
                                                <li><a href="<?=base_url('template')?>/#">Pages</a>
                                                    <ul>
                                                        <li><a href="<?=base_url('template')?>/about-us.html">About</a></li>
                                                        <li><a href="<?=base_url('template')?>/blog.html">Blog</a></li>
                                                        <li><a href="<?=base_url('template')?>/blog-details.html">Blog Details</a></li>
                                                        <li><a href="checkout">Checkout</a></li>
                                                        <li><a href="<?=base_url('template')?>/contact.html">Contact</a></li>
                                                        <li><a href="<?=base_url('template')?>/login.html">Login</a></li>
                                                        <li><a href="<?=base_url('template')?>/my-account.html">My Account</a></li>
                                                        <li><a href="<?=base_url('template')?>/shop.html">shop</a></li>
                                                        <li><a href="<?=base_url('template')?>/shop-list.html">Shop List</a></li>
                                                        <li><a href="<?=base_url('template')?>/shopping-cart.html">Shopping-Cart</a></li>
                                                        <li><a href="<?=base_url('template')?>/single-product.html">Single Product</a></li>
                                                        <li><a href="<?=base_url('template')?>/wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?=base_url('template')?>/about-us.html">About</a></li>
                                                <li><a href="<?=base_url('template')?>/contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- mobile menu end -->
                                <div class="right-header re-right-header">
                                    <ul>
                                        <li class="re-icon tnm"><i class="fa fa-search" aria-hidden="true"></i>
                                            <form method="get" id="searchform" action="#">
                                                <input type="text" value="" name="s" id="ws" placeholder="Search product..." />
                                                <button type="submit"><i class="pe-7s-search"></i></button>
                                            </form>
                                        </li>
                                        <li><a href="<?=base_url('template')?>/cart.html"><i class="fa fa-shopping-cart"></i><span class="color1">2</span></a>
                                            <ul class="drop-cart">
                                                <li>
                                                    <a href="<?=base_url('template')?>/cart.html"><img src="<?=base_url('template')?>/img/cart/1.png" alt="" /></a>
                                                    <div class="add-cart-text">
                                                        <p><a href="<?=base_url('template')?>/#">White Shirt</a></p>
                                                        <p>$50.00</p>
                                                        <span>Color : Blue</span>
                                                        <span>Size   : SL</span>
                                                    </div>
                                                    <div class="pro-close">
                                                        <i class="pe-7s-close"></i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url('template')?>/cart.html"><img src="<?=base_url('template')?>/img/cart/2.png" alt="" /></a>
                                                    <div class="add-cart-text">
                                                        <p><a href="<?=base_url('template')?>/#">White Shirt</a></p>
                                                        <p>$50.00 x 2</p>
                                                        <span>Color : Blue</span>
                                                        <span>Size   : SL</span>
                                                    </div>
                                                    <div class="pro-close">
                                                        <i class="pe-7s-close"></i>
                                                    </div>
                                                </li>
                                                <li class="total-amount clearfix">
                                                    <span class="floatleft">total</span>
                                                    <span class="floatright"><strong>= $150.00</strong></span>
                                                </li>
                                                <li>
                                                    <div class="goto text-center">
                                                        <a href="<?=base_url('template')?>/cart.html"><strong>go to cart &nbsp;<i class="pe-7s-angle-right"></i></strong></a>
                                                    </div>
                                                </li>
                                                <li class="checkout-btn text-center">
                                                    <a href="checkout">Check out</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
        <!-- header section end -->
        