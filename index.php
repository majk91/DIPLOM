<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>home_page</title>
	<link rel="stylesheet" type="style/css" href="css/reset.css">
	<link rel="stylesheet" type="style/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.12.0.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('.bxslider').bxSlider({
		    	pager: false,
		    	speed: 2000,
		    	auto: true,
		    	autoHover: true
		    });
		});
	</script>
	<script type="text/javascript" src="js/js.js"></script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div id="logo">
				<a href="#"></a>
			</div> <!--logo-->
			<div class="wrap_meny">
				<div class="wrap_info">
					<div class="wrap_info_box">
						<div class="phone float_l">
							<nobr class="header-phones-1 bold">(044) 503-80-80,</nobr>
							<nobr class="header-phones-2">(044) 503-80-80,</nobr>
							<nobr class="header-phones-3">(044) 503-80-80</nobr>
						</div> <!--phone-->
						<div class="account float_r">
							<span>Hello,</span>
							<span>
								<a href="#">My Accaunt | Login | Register</a>
							</span>
						</div><!--accaunt-->
						<div class="clear"></div> <!--clear-->
					</div>
				</div> <!--wrap_info-->
				<div class="wrap_search">
					<div class="meny_box">
						<ul class="meny_top">
							<li class="meny_top_li bold">
								<a href="#">home</a>
							</li>
							<li class="meny_top_li bold">
								<a href="#">men</a>
							</li>
							<li class="meny_top_li bold">
								<a href="#">women</a>
							</li>
							<li class="meny_top_li bold">
								<a href="#">fashion</a>
							</li>
							<li class="meny_top_li bold">
								<a href="#">gift</a>
							</li>
							<li class="meny_top_li bold">
								<a href="#">blog</a>
							</li>
							<li class="meny_top_li bold">
								<a href="#">contact</a>
							</li>
							<li class="clear"></li>
						</ul>
					</div><!--meny-->
					<div class="search_box float_r">
						<div class="search">
							<a href="#"></a>
						</div>
						<div class="card" onclick="basketClick()">
							<a href="#"></a>
						
						</div>
						<div class="cash">
							<span>(0)</span>
						</div>
					</div><!--search-->
				</div> <!--meny_search-->
			</div><!--wrap_meny-->
		</div> <!--container-->
	</div> <!--header-->
	<div id="header_pseudo"></div>
	<div class="main container">
		<div class="guide_wrap">
			<span> Home / Women </span>
		</div> <!--guide_wrap-->
		<div class="body_layout">
			<div class="category">
				<p class="bold"> category</p>
				<ul>
					<li class="m">
						<a href="#">Category X</a>
					</li>
					<li class="m">
						<a href="#">Category X</a>
					</li>
					<li class="m">
						<a href="#">Category X</a>
					</li>
					<li class="m">
						<a href="#">Category X</a>
					</li>
					<li class="m">
						<a href="#">Category X</a>
					</li>
				</ul>
			</div>
			<div class="baner">
				<div class="slider">
					<ul class="bxslider">
						<li><img src="img/slider/slide1.png" alt=""></li>
						<li><img src="img/slider/slide2.png" alt=""></li>
						<li><img src="img/slider/slide3.png" alt=""></li>
						<li><img src="img/slider/slide4.png" alt=""></li>
					</ul>
				</div><!--"slider"-->
				<div class="slid_baner float_l">
					<div class="slid_newproduct">
						<p class="slid_baner_i">NEW PRODUCTS</p>
					</div>
					<div class="slid_newproduct">
						<p class="slid_baner_i">NEW PRODUCTS</p>
					</div>
					<div class="slid_newproduct">
						<p class="slid_baner_i">NEW PRODUCTS</p>
					</div>
				</div><!--slid_baner-->
			</div><!---baner-->
		</div><!-- body_layout  -->
		<div class="scroll_wrap">
			<div class="best float_l">
				<p class="bold upper">best seller</p>
				<div class="content">
					<div class="category_left float_l">
						<a href="#"></a>
						<img src="img/best.png" alt="" width="100%">
					</div>
					<div class="category_right float_l">
						<div class="content_name">Fantasy dress</div>
						<div class="star">
							<img src="img/stars.png" alt="">
						</div>
						<div class="prise"> $ 250.00</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="content">
					<div class="category_left float_l">
						<a href="#"></a>
						<img src="img/best.png" alt="" width="100%">
					</div>
					<div class="category_right float_l">
						<div class="content_name">Fantasy dress</div>
						<div class="star">
							<img src="img/stars.png" alt="">
						</div>
						<div class="prise"> $ 250.00</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="content">
					<div class="category_left float_l">
						<img src="img/best.png" alt="" width="100%">
							<a href="#"></a>
					</div>
					<div class="category_right float_l">
						<div class="content_name">Fantasy dress</div>
						<div class="star">
							<img src="img/stars.png" alt="">
						</div>
						<div class="prise"> $ 250.00</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div><!--best-->
			<div class="scroll float_l">
				<div class="option"></div>
				<div class="gallery">
					<div class="gallery_box">
						<a href="#">
							<span class="categories">
								<img src="img/primer.png" width="90px" height="120px" alt="VINO beleo">
							</span>
							<span class="category_title">VINO beleo</span>
						</a>
					</div>
					<div class="gallery_box">
						<a href="#">
							<span class="categories">
								<img src="img/primer.png" width="90px" height="120px" alt="VINO  beleo">
							</span>
							<span class="category_title">VINO beleo</span>
						</a>
					</div>
					<div class="gallery_box">
						<a href="#">
							<span class="categories">
								<img src="img/primer.png" width="90px" height="120px" alt="VINO  beleo">
							</span>
							<span class="category_title">VINO beleo</span>
						</a>
					</div>
					<div class="gallery_box">
						<a href="#">
							<span class="categories">
								<img src="img/primer.png" width="90px" height="120px" alt="VINO  beleo">
							</span>
							<span class="category_title">VINO beleo</span>
						</a>
					</div>
					<div class="gallery_box">
						<a href="#">
							<span class="categories">
								<img src="img/primer.png" width="90px" height="120px" alt="VINO  beleo">
							</span>
							<span class="category_title">VINO beleo</span>
						</a>
					</div>
					<div class="gallery_box">
						<a href="#">
							<span class="categories">
								<img src="img/primer.png" width="90px" height="120px" alt="VINO  beleo">
							</span>
							<span class="category_title">VINO beleo</span>
						</a>
					</div>
					<div class="gallery_box">
						<a href="#">
							<span class="categories">
								<img src="img/primer.png" width="90px" height="120px" alt="VINO  beleo">
							</span>
							<span class="category_title">VINO beleo</span>
						</a>
					</div>
					<div class="gallery_box">
						<a href="#">
							<span class="categories">
								<img src="img/primer.png" width="90px" height="120px" alt="VINO beleo">
							</span>
							<span class="category_title">VINO beleo Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa quisquam distinctio ut sunt totam. In accusantium reiciendis consequatur, non ipsa tempore animi eveniet aliquam a dicta, harum qui voluptatem quos.</span>						
						</a>
					</div>
				</div><!--gallery-->
			</div><!--scroll-->
			<div class="clear"></div>
		</div><!-- scroll_wrap  -->
		<div class="extra">
			<div class="new_goods">
			</div>
			<div class="viewed_goods">
				<div class="viewed_head">
					<h2>Prosmotrennie towary</h2>
					<a href="#">Pokazat wse</a>
				</div>
				<div class="new">
					
				</div>
				<div class="container">
					<div class="viewed_box">
						<div class="viewed_i">
							<div class="viewed_i_up">
								<div class="img_i">
									<a href="#" class="img_i_link">
										<img src="img/good_0001.png" height="130px" alt="" class="img_i_icon">
									</a>
								</div>
							</div>
							<div class="viewed_i_down">
								<div class="down_i title">
									<a href="#">Nazvanie towara </a>
								</div>
								<div class="down_i star_gallery">
									<div class="star_gallery_i"></div>
									<div class="star_comment_i">
										<p>
											<span>(0)</span>
										</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="down_i prise">$200.00</div>
							</div>
						</div>
					</div>
					<div class="viewed_box">
						<div class="viewed_i">
							<div class="viewed_i_up">
								<div class="img_i">
									<a href="#" class="img_i_link">
										<img src="img/good_0001.png" height="130px" alt="" class="img_i_icon">
									</a>
								</div>
							</div>
							<div class="viewed_i_down">
								<div class="down_i title">
									<a href="#">Nazvanie towara </a>
								</div>
								<div class="down_i star_gallery">
									<div class="star_gallery_i"></div>
									<div class="star_comment_i">
										<p>
											<span>(0)</span>
										</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="down_i prise">$200.00</div>
							</div>
						</div>
					</div>
					<div class="viewed_box">
						<div class="viewed_i">
							<div class="viewed_i_up">
								<div class="img_i">
									<a href="#" class="img_i_link">
										<img src="img/good_0001.png" height="130px" alt="" class="img_i_icon">
									</a>
								</div>
							</div>
							<div class="viewed_i_down">
								<div class="down_i title">
									<a href="#">Nazvanie towara </a>
								</div>
								<div class="down_i star_gallery">
									<div class="star_gallery_i"></div>
									<div class="star_comment_i">
										<p>
											<span>(0)</span>
										</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="down_i prise">$200.00</div>
							</div>
						</div>
					</div>
					<div class="viewed_box">
						<div class="viewed_i">
							<div class="viewed_i_up">
								<div class="img_i">
									<a href="#" class="img_i_link">
										<img src="img/good_0001.png" height="130px" alt="" class="img_i_icon">
									</a>
								</div>
							</div>
							<div class="viewed_i_down">
								<div class="down_i title">
									<a href="#">Nazvanie towara </a>
								</div>
								<div class="down_i star_gallery">
									<div class="star_gallery_i"></div>
									<div class="star_comment_i">
										<p>
											<span>(0)</span>
										</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="down_i prise">$200.00</div>
							</div>
						</div>
					</div>
					<div class="viewed_box">
						<div class="viewed_i">
							<div class="viewed_i_up">
								<div class="img_i">
									<a href="#" class="img_i_link">
										<img src="img/good_0001.png" height="130px" alt="" class="img_i_icon">
									</a>
								</div>
							</div>
							<div class="viewed_i_down">
								<div class="down_i title">
									<a href="#">Nazvanie towara </a>
								</div>
								<div class="down_i star_gallery">
									<div class="star_gallery_i"></div>
									<div class="star_comment_i">
										<p>
											<span>(0)</span>
										</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="down_i prise">$200.00</div>
							</div>
						</div>
					</div>
					<div class="viewed_box">
						<div class="viewed_i">
							<div class="viewed_i_up">
								<div class="img_i">
									<a href="#" class="img_i_link">
										<img src="img/good_0001.png" height="130px" alt="" class="img_i_icon">
									</a>
								</div>
							</div>
							<div class="viewed_i_down">
								<div class="down_i title">
									<a href="#">Nazvanie towara </a>
								</div>
								<div class="down_i star_gallery">
									<div class="star_gallery_i"></div>
									<div class="star_comment_i">
										<p>
											<span>(0)</span>
										</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="down_i prise">$200.00</div>
							</div>
						</div>
					</div>
				</div><!--container-->
			</div><!--viewed_goods-->
		</div><!--extra-->
	</div><!--main-->
	<div class="foter">
		<div class="container">
			<div class="foot">
				<div class="footer_col float_l">
					<div class="foter_col_name">
						<p class="bold">information</p>
					</div>
					<div class="footer_col_ul_1">
						<ul class="footer_meny">
							<li class="footer_meny_i">
								<a href="#">About us</a>
							</li>
							<li class="footer_meny_i">
								<a href="#">Delivery Information</a>
							</li>
							<li class="footer_meny_i">
								<a href="#">Privacy Policy</a>
							</li>
							<li class="footer_meny_i">
								<a href="#">Terms & Condition</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer_col float_l">
					<div class="foter_col_name">
						<p class="bold">our support</p>
					</div>
					<div class="footer_col_ul_2">
						<ul class="footer_meny">
							<li class="footer_meny_i">
								<a href="#">Delivery Information</a>
							</li>
							<li class="footer_meny_i">
								<a href="#">Privacy Policy</a>
							</li>
							<li class="footer_meny_i">
								<a href="#">Terms & Condition</a>
							</li>
							<li class="footer_meny_i">
								<a href="#">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer_col float_l">
					<div class="foter_col_name">
						<p class="bold">our service</p>
					</div>
					<div class="footer_col_ul_3">
						<ul class="footer_meny">
							<li class="footer_meny_i">
								<a href="#">My Account</a>
							</li>
							<li class="footer_meny_i">
								<a href="#">OrderHistory</a>
							</li>
							<li class="footer_meny_i">
								<a href="#">Return</a>
							</li>
							<li class="footer_meny_i">
								<a href="#">Site Map</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer_col float_l">
					<div class="foter_col_name">
						<p class="bold">payment</p>
					</div>
					<div class="footer_col_ul_4">
						<div class="cool_my">
							<p>(044)-937-99-92,</p>
							<p>(044)-937-99-92,</p>
							<p>(044)-937-99-92</p>
						</div>
						<div class="pay">
							<ul>
								<li class="pay_metod_1">
								</li>
								<li class="pay_metod_2">
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div><!--foot-->
		</div><!--conyainer-->
	</div><!--foter-->
	<div class="footer_old">
		<div class="container">
			<div class="network_img float_r">
				<p id="wu_in_network">Wu in NETWORK:</p>
				<ul class="network_img_i float_r">
					<li class="item1">
						<a href="https://vk.com/"></a>
					</li>
					<li class="item2">
						<a href="https://twitter.com/"></a>
					</li>
					<li class="item3">
						<a href="https://plus.google.com/u/0/"></a>
					</li>
					<li class="item4">
						<a href="ok.ru/"></a>
					</li>
					<li class="item5">
						<a href="https://www.facebook.com/"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>