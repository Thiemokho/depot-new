<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_gardening_landscaping_first_color = get_theme_mod('vw_gardening_landscaping_first_color');

	$custom_css = '';

	if($vw_gardening_landscaping_first_color != false){
		$custom_css .='#topbar, .top-btn a, #header .nav ul.sub-menu li a:hover, .more-btn a, .content-bttn a, .error-btn a, span.carousel-control-prev-icon i, span.carousel-control-next-icon i, .scrollup i, #serv-section h3:after, #serv-section h3:before, .serv-box:hover a, input[type="submit"], #footer .tagcloud a:hover, #sidebar .custom-social-icons i, #footer .custom-social-icons i, #footer-2, .post-main-box:hover .content-bttn a, .pagination .current, .pagination a:hover, #sidebar .tagcloud a:hover, #comments input[type="submit"], nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$custom_css .='background-color: '.esc_html($vw_gardening_landscaping_first_color).';';
		$custom_css .='}';
	}
	if($vw_gardening_landscaping_first_color != false){
		$custom_css .='a, #header .nav ul li a:hover, .more-btn:hover a, .top-btn:hover a, #footer li a:hover, #footer .custom-social-icons i:hover, .post-main-box:hover h3, #sidebar ul li a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title{';
			$custom_css .='color: '.esc_html($vw_gardening_landscaping_first_color).';';
		$custom_css .='}';
	}
	if($vw_gardening_landscaping_first_color != false){
		$custom_css .='.top-btn, .more-btn, .content-bttn, .error-btn, .serv-box:hover, .serv-box:hover .expertise-btn, .post-main-box:hover, .post-main-box:hover .content-bttn{';
			$custom_css .='border-color: '.esc_html($vw_gardening_landscaping_first_color).';';
		$custom_css .='}';
	}
	if($vw_gardening_landscaping_first_color != false){
		$custom_css .='#footer h3:after, .main-header{';
			$custom_css .='border-bottom-color: '.esc_html($vw_gardening_landscaping_first_color).';';
		$custom_css .='}';
	}

	/*---------------------------Second highlight color-------------------*/

	$vw_gardening_landscaping_second_color = get_theme_mod('vw_gardening_landscaping_second_color');

	if($vw_gardening_landscaping_second_color != false){
		$custom_css .='#slider, #sidebar .custom-social-icons i:hover, .pagination span, .pagination a, .woocommerce span.onsale, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #header .nav ul li:hover > ul{';
			$custom_css .='background-color: '.esc_html($vw_gardening_landscaping_second_color).';';
		$custom_css .='}';
	}
	if($vw_gardening_landscaping_second_color != false){
		$custom_css .='h1,h2,h3,h4,h5,h6, .custom-social-icons i:hover, .expertise-btn a, .post-main-box h3, #sidebar caption, #sidebar h3, .post-navigation a, h2.woocommerce-loop-product__title,.woocommerce div.product .product_title, .woocommerce .quantity .qty, .woocommerce-message::before,.woocommerce-info::before, span.carousel-control-prev-icon i:hover, span.carousel-control-next-icon i:hover{';
			$custom_css .='color: '.esc_html($vw_gardening_landscaping_second_color).';';
		$custom_css .='}';
	}
	if($vw_gardening_landscaping_second_color != false){
		$custom_css .='.woocommerce .quantity .qty, .error-btn:hover{';
			$custom_css .='border-color: '.esc_html($vw_gardening_landscaping_second_color).';';
		$custom_css .='}';
	}
	if($vw_gardening_landscaping_second_color != false){
		$custom_css .='.woocommerce-message,.woocommerce-info{';
			$custom_css .='border-top-color: '.esc_html($vw_gardening_landscaping_second_color).';';
		$custom_css .='}';
	}
	if($vw_gardening_landscaping_second_color != false){
		$custom_css .='nav.woocommerce-MyAccount-navigation ul li{
		box-shadow: 2px 2px 0 0 '.esc_html($vw_gardening_landscaping_second_color).';
		}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_gardening_landscaping_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_gardening_landscaping_slider_opacity_color','0.5');
	if($theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_gardening_landscaping_slider_content_option','Left');
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2{';
			$custom_css .='text-align:left; left:10%; right:45%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h2{';
			$custom_css .='text-align:right; left:45%; right:10%;';
		$custom_css .='}';
	}