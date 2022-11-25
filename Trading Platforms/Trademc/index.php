<?php

require './config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo($name); ?> – Покупки доната</title>
    <meta name="copyright" lang="eng">
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico"/>
	<script src="/js/trademcapi.js"></script>
	<link href="/css/main.css" rel="stylesheet">
	<script> document.oncontextmenu = cmenu; function cmenu() { return false; } </script>
	<script src="https://kit.fontawesome.com/b78c34bd2b.js" crossorigin="anonymous"></script>
	<link href="/css/animate.min.css" rel="stylesheet">
	<script>TrademcAPI.GetBuyForm({"Shop":"<?php echo($shop_id); ?>","Title":"","Nickname":"Введите ваш никнейм","Item":"Выберите товар","Coupon":"Введите купон,","Button":"<svg width='21' height='19' viewBox='0 0 21 19' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M8.16667 18.8C8.77418 18.8 9.26667 18.3075 9.26667 17.7C9.26667 17.0925 8.77418 16.6 8.16667 16.6C7.55915 16.6 7.06667 17.0925 7.06667 17.7C7.06667 18.3075 7.55915 18.8 8.16667 18.8Z' fill='white'></path><path d='M16.2333 18.8C16.8408 18.8 17.3333 18.3075 17.3333 17.7C17.3333 17.0925 16.8408 16.6 16.2333 16.6C15.6258 16.6 15.1333 17.0925 15.1333 17.7C15.1333 18.3075 15.6258 18.8 16.2333 18.8Z' fill='white'></path><path d='M1.29167 1.75L5.41667 4.5L7.70834 14.5833H16.875L19.1667 6.79167H10.4583' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path><path d='M10.4583 10.9167H17.7917' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path></svg> Оплатить","Success_URL":"<?php echo($urlweb); ?>","Pending_URL":"<?php echo($urlweb); ?>","Fail_URL":"<?php echo($urlweb); ?>","PastPlaceID":"trademc-buyform"});</script>
</head>
<body>
    <main class="h-100">
        <section id="home-slider" class="h-100 p-0 section section-xl section-image overlay-dark text-white jarallax" id="welcome-section" style="background: none 0% 0% / cover no-repeat; z-index: 0; background: url('/images/bg/bg.png') no-repeat; background-size: cover;">
            <div class="container z-2" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
                <div class="row align-items-center">
                    <div class="text-center col-lg-6 text-lg-left wow fadeInLeftBig" style="visibility: visible; animation-name: fadeInLeftBig;">
                        <a href="<?php echo($urlweb); ?>" class="shop-title"><?php echo($name); ?></a>
						<p class="shop-description text-muted"><br>Все средства направлены<br>На развитие проекта</p>
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-lg-1"><div id="trademc-buyform"></div></div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block d-lg-none wow fadeInRightBig" style="visibility: visible; animation-name: fadeInRightBig;">
                        <div class="d-flex justify-content-center">
						  <div class="container">
							<div class="main-slider">
							    <img src="images/slider/slide1/house.png" class="img-responsive slider-house" alt="slider image">
								<img src="images/slider/slide1/circle1.png" class="slider-circle1" alt="slider image">
								<img src="images/slider/slide1/circle2.png" class="slider-circle2" alt="slider image">
								<img src="images/slider/slide1/cloud1.png" class="slider-cloud1" alt="slider image">
								<img src="images/slider/slide1/cloud2.png" class="slider-cloud2" alt="slider image">
								<img src="images/slider/slide1/cloud3.png" class="slider-cloud3" alt="slider image">
								<img src="images/cycle.png" class="slider-cycle" alt=""></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;">
                <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url('/images/bg/bg.png'); margin-top: 0px; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"></div>
            </div>
			<div id="section" style="left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"></div>
        </section>
    </main>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Quicksand:400,500" rel="stylesheet">
<style>
    :root {
        --purple: #000000;
        --red: #779600;
    }
    * {
        padding: 0;
        margin: 0;
        border: none;
    }
   
    h1 {
        color: var(--red);
        font-family: 'Quicksand', sans-serif;
        font-weight: 500;
        font-size: 30px;
        margin-bottom: 20px;
    }
    h3 {
        font-family: 'Quicksand', sans-serif;
        font-size: 21px;
        font-weight: 500;
        color: var(--red);
        margin-bottom: 20px;
    }
    p, ul {
        margin-bottom: 20px;
        line-height: 1.75em;
    }
    li {
        list-style: none;
        margin-bottom: 10px;
    }
    li:last-child {
        margin-bottom: 0;
    }
    input[type="checkbox"] {
        margin-top: 10px;
        margin-right: 15px;
        float: left;
    }
    label {
        display: inline-block;
        max-width: 90%;
    }
    code {
        color: var(--red);
        font-family: monospace;
        font-size: 16px;
        background: #f7f7f7;
        padding: 3px 5px;
        border-radius: 3px;
        border: 1px solid #ebebeb;
    }
    /* Cookie Dialog */
    #gdpr-cookie-message {
        position: fixed;
        right: 30px;
        bottom: 30px;
        max-width: 375px;
        background-color: var(--purple);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 6px 6px rgba(0,0,0,0.25);
        margin-left: 30px;
        font-family: system-ui;
    }
    #gdpr-cookie-message h4 {
        color: var(--red);
        font-family: 'Quicksand', sans-serif;
        font-size: 18px;
        font-weight: 500;
        margin-bottom: 10px;
    }
    #gdpr-cookie-message h5 {
        color: var(--red);
        font-family: 'Quicksand', sans-serif;
        font-size: 15px;
        font-weight: 500;
        margin-bottom: 10px;
    }
    #gdpr-cookie-message p, #gdpr-cookie-message ul {
        color: white;
        font-size: 15px;
        line-height: 1.5em;
    }
    #gdpr-cookie-message p:last-child {
        margin-bottom: 0;
        text-align: right;
    }
    #gdpr-cookie-message li {
        width: 49%;
        display: inline-block;
    }
    #gdpr-cookie-message a {
        color: var(--red);
        text-decoration: none;
        font-size: 15px;
        padding-bottom: 2px;
        border-bottom: 1px dotted rgba(255,255,255,0.75);
        transition: all 0.3s ease-in;
    }
    #gdpr-cookie-message a:hover {
        color: white;
        border-bottom-color: var(--red);
        transition: all 0.3s ease-in;
    }
    #gdpr-cookie-message button {
        border: none;
        background: var(--red);
        color: white;
        font-family: 'Quicksand', sans-serif;
        font-size: 15px;
        padding: 7px;
        border-radius: 3px;
        margin-left: 15px;
        cursor: pointer;
        transition: all 0.3s ease-in;
    }
    #gdpr-cookie-message button:hover {
        background: white;
        color: var(--red);
        transition: all 0.3s ease-in;
    }
    button#gdpr-cookie-advanced {
        background: white;
        color: var(--red);
    }
    #gdpr-cookie-message button:disabled {
        opacity: 0.3;
    }
    #gdpr-cookie-message input[type="checkbox"] {
        float: none;
        margin-top: 0;
        margin-right: 5px;
    }
</style>
<style>
#section {
  padding-bottom: 75px;
  background-image: url(../images/player.png);
  background-repeat: repeat-x;
  background-position: bottom;
  background-size: contain;
}
#home-slider .main-slider {
  position: relative;
  height: 450px;
}

#home-slider .slide-text{
  position: absolute;
  top: 50px;
  left: 0;
  width: 450px;
}

.animate-in .slide-text {
  -webkit-animation: fadeInLeftBig 700ms cubic-bezier(0.190,1.000,0.220,1.000) 200ms both;
  animation: fadeInLeftBig 700ms cubic-bezier(0.190,1.000,0.220,1.000) 200ms both;
}

#home-slider .slider-house {
  position: absolute;
  right: 0;
  bottom: 0;
}

.animate-in .slider-house {
  -webkit-animation: fadeInDown 700ms ease-in-out 200ms both;
  animation: fadeInDown 700ms ease-in-out 200ms both;
}

#home-slider .slider-circle1 {
  position: absolute;
  right: 430px;
  bottom: 210px;
}

.animate-in .slider-circle1 {
  -webkit-animation: bounceIn 500ms ease-in-out 900ms both;
  animation: bounceIn 500ms ease-in-out 900ms both;
}

#home-slider .slider-circle2 {
  position: absolute;
  right: 420px;
  bottom: 245px;
}

.animate-in .slider-circle2 {
  -webkit-animation: bounceIn 500ms ease-in-out 1100ms both;
  animation: bounceIn 500ms ease-in-out 1100ms both;
}

#home-slider .slider-cloud1 {
  position: absolute;
  right: 290px;
  bottom: 250px;
}

.animate-in .slider-cloud1 {
  -webkit-animation: bounceIn 500ms ease-in-out 1300ms both;
  animation: bounceIn 500ms ease-in-out 1300ms both;
}

#home-slider .slider-cloud2 {
  position: absolute;
  right: 375px;
  bottom: 330px;
}

.animate-in .slider-cloud2 {
  -webkit-animation: bounceIn 500ms ease-in-out 1500ms both;
  animation: bounceIn 500ms ease-in-out 1500ms both;
}

#home-slider .slider-cloud3 {
  position: absolute;
  right: 75px;
  bottom: 300px;
}

.animate-in .slider-cloud3 {
  -webkit-animation: bounceIn 500ms ease-in-out 1700ms both;
  animation: bounceIn 500ms ease-in-out 1700ms both;
}

#home-slider .slider-sun {
  position: absolute;
  right: 190px;
  bottom: 300px;
}

.animate-in .slider-sun {
  -webkit-animation: bounceIn 800ms ease-in-out 1900ms both;
  animation: bounceIn 800ms ease-in-out 1900ms both;
}

#home-slider .slider-cycle {
  position: absolute;
  right: 500px;
  bottom: 0;
}

.animate-in .slider-cycle {
  -webkit-animation: slideInLeft 4000ms cubic-bezier(0.190,1.000,0.220,1.000) 200ms both;
  animation: slideInLeft 4000ms cubic-bezier(0.190,1.000,0.220,1.000) 200ms both;
}

#home-slider h1{
  margin-top: 70px;
  margin-bottom: 25px;
}

#home-slider .btn-common {
  margin-top: 20px;
}

#home-slider .preloader {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  background: #fafafa;
  text-align: center;
}

#home-slider .preloader > i {
  font-size: 48px;
  height: 48px;
  line-height: 48px;
  color: #dbb075;
  position: absolute;
  left: 50%;
  margin-left: -24px;
  top: 50%;
  margin-top: -24px;
}
</style>
<?php

$agent = $_SERVER['HTTP_USER_AGENT'];

if(preg_match('/Win/',$agent)) $os = 'Windows';
elseif(preg_match('/Mac/',$agent)) $os = 'Mac';
else $os = 'UnKnown';

if($os == 'Windows'){
echo '<script type="text/javascript" src="/js/jquery.ihavecookies.js"></script>';	
}
if($os == 'Mac'){
echo '<script type="text/javascript" src="/js/jquery.ihavecookies.js"></script>';	
}

?>
<script type="text/javascript">
    $(document).ready(function() {
        $('body').ihavecookies({
            title: '&#x1F36A; Разрешить Cookie?',
            message: '<b>На нашем сайте используются<br>файлы cookies для большего удобства.</b>',
            delay: 200,
            expires: 1,
            onAccept: function(){
                var myPreferences = $.fn.ihavecookies.cookie();
                console.log('Yay! The following preferences were saved...');
                console.log(myPreferences);
            },
            uncheckBoxes: true,
            acceptBtnLabel: '<b>Соглашаюсь</b>',
            cookieTypesTitle: 'Выберите, файлы куки которые хотите принимать:',
            fixedCookieTypeLabel: 'Основное',
            fixedCookieTypeDesc: 'These are essential for the website to work correctly.'
        });
    });
</script>
<script>
jQuery(function($) {'use strict';

	//Initiat WOW JS
	new WOW().init();

	// portfolio filter
	$(window).load(function(){

		$('.main-slider').addClass('animate-in');
		$('.preloader').remove();
		//End Preloader

		if( $('.masonery_area').length ) {
			$('.masonery_area').masonry();//Masonry
		}

		var $portfolio_selectors = $('.portfolio-filter >li>a');
		
		if($portfolio_selectors.length) {
			
			var $portfolio = $('.portfolio-items');
			$portfolio.isotope({
				itemSelector : '.portfolio-item',
				layoutMode : 'fitRows'
			});
			
			$portfolio_selectors.on('click', function(){
				$portfolio_selectors.removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$portfolio.isotope({ filter: selector });
				return false;
			});
		}

	});


	$('.timer').each(count);
	function count(options){
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
	}
});
</script>
</html>