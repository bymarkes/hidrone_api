@extends('layouts.master')
@section('title', 'About')
@section('body')
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<style>
	body {
	font-family: 'PT Sans', Arial, Verdana;
	font-size: 13px;
	color: #666;
	-webkit-font-smoothing: antialiased;
	margin: 0;
	}
	/*RESET*/
	* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	}
	body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, p, blockquote, th, td {
	margin: 0;
	padding: 0;
	font-size: 13px;
	direction: ltr;
	}
	/*END-RESET*/
	.sectionClass {
	padding: 0px 0px 20px 0px;
	position: relative;
	display: block;
	}
	.fullWidth {
	width: 100% !important;
	display: table;
	padding: 0;
	min-height: 1px;
	height:auto;
	}
	.sectiontitle {
	background-position: center;
	margin: 30px 30px 0px 30px;
	margin-bottom: 10px;
	text-align: center;
	min-height: 20px;
	}
	.sectiontitle h2 {
	font-size: 30px;
	color: white;
	padding-right: 10px;
	padding-left: 10px;
	}
	.projectFactsWrap{
	display: flex;
	margin-top: 30px;
	flex-direction: row;
	flex-wrap: wrap;
	}
	#projectFacts .fullWidth{
	padding: 0;
	bottom: 0;
	}
	.projectFactsWrap .item{
	width: 25%;
	height: 100%;
	padding: 50px 0px;
	text-align: center;
	}
	.projectFactsWrap .item p.number{
	font-size: 40px;
	padding: 0;
	font-weight: bold;
	}
	.projectFactsWrap .item p{
	color: rgba(255, 255, 255, 0.8);
	font-size: 18px;
	margin: 0;
	padding: 10px;
	font-family: 'PT Sans', Arial, Verdana;
	}
	.projectFactsWrap .item span{
	width: 60px;
	background: rgba(255, 255, 255, 0.8);
	display: block;
	margin: 0 auto;
	}
	.projectFactsWrap .item i{
	vertical-align: middle;
	font-size: 50px;
	color: rgba(255, 255, 255, 0.8);
	}
	.projectFactsWrap .item:hover i, .projectFactsWrap .item:hover p{
	color: white;
	}
	.projectFactsWrap .item:hover span{
	background: white;
	}
	@media (max-width: 786px){
	.projectFactsWrap .item {
	flex: 0 0 50%;
	}
	}
	/* share */
	.social-btns .btn,
	.social-btns .btn:before,
	.social-btns .btn .fa {
	-webkit-transition: all 0.35s;
	transition: all 0.35s;
	-webkit-transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
	transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
	}
	.social-btns .btn:before {
	top: 90%;
	left: -110%;
	}
	.social-btns .btn .fa {
	-webkit-transform: scale(0.8);
	transform: scale(0.8);
	}
	.social-btns .btn.facebook:before {
	background-color: #3b5998;
	}
	.social-btns .btn.facebook .fa {
	color: #3b5998;
	}
	.social-btns .btn.twitter:before {
	background-color: #3cf;
	}
	.social-btns .btn.twitter .fa {
	color: #3cf;
	}
	.social-btns .btn.google:before {
	background-color: #dc4a38;
	}
	.social-btns .btn.google .fa {
	color: #dc4a38;
	}
	.social-btns .btn.dribbble:before {
	background-color: #f26798;
	}
	.social-btns .btn.dribbble .fa {
	color: #f26798;
	}
	.social-btns .btn.skype:before {
	background-color: #00aff0;
	}
	.social-btns .btn.skype .fa {
	color: #00aff0;
	}
	.social-btns .btn:focus:before,
	.social-btns .btn:hover:before {
	top: -10%;
	left: -10%;
	}
	.social-btns .btn:focus .fa,
	.social-btns .btn:hover .fa {
	color: #fff;
	-webkit-transform: scale(1);
	transform: scale(1);
	}
	.social-btns {
	margin-bottom:100px;
	font-size: 0;
	text-align: center;
	position: relative;
	}
	.social-btns .btn {
	padding-top: 10px;
	display: inline-block;
	background-color: #fff;
	width: 60px;
	height: 60px;
	line-height: 90px;
	margin: 0 10px;
	text-align: center;
	position: relative;
	overflow: hidden;
	border-radius: 28%;
	box-shadow: 0 5px 15px -5px rgba(0,0,0,0.1);
	opacity: 0.99;
	}
	.social-btns .btn:before {
	content: '';
	width: 120%;
	height: 120%;
	position: absolute;
	-webkit-transform: rotate(45deg);
	transform: rotate(45deg);
	}
	.social-btns .btn .fa {
	font-size: 38px;
	vertical-align: middle;
	}
	.about-me-img {
	width: 120px;
	height: 120px;
	left: 10px;
	position: relative;
	border-radius: 100px;
	}
	.about-me-img img {
	}
	.authorWindow{
	width: 600px;
	background: #75439a;
	padding: 22px 20px 22px 20px;
	border-radius: 5px;
	overflow: hidden;
	}
	.authorWindowWrapper{
	display: none;
	left: 110px;
	top: 0;
	padding-left: 25px;
	}
	.trans{
	opacity: 1;
	-webkit-transform: translateX(0px);
	transform: translateX(0px);
	-webkit-transition: all 500ms ease;
	-moz-transition: all 500ms ease;
	transition: all 500ms ease;
	}
	@media screen and (max-width: 768px) {
	.authorWindow{
	width: 210px;
	}
	.authorWindowWrapper{
	bottom: -170px;
	margin-bottom: 20px;
	}
	footer p{
	font-size: 14px;
	}
	}
	body section h1.faq {
	text-transform: uppercase;
	text-align: center;
	font-weight: normal;
	letter-spacing: 10px;
	font-size: 25px;
	color: white;
	line-height: 1.5;
	margin-top: 80px;
	padding-bottom: 60px;
	}
</style>
<body>
	<div class="sectiontitle">
		<section>
			<h1 class="faq"> ABOUT US</h1>
		</section>
		<div id="projectFacts" class="sectionClass">
			<div class="fullWidth eight columns">
				<div class="projectFactsWrap ">
					<div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
						<i class="fa fa-plane"></i>
						<p id="number1" class="number">29</p>
						<span></span>
						<p>Flights</p>
					</div>
					<div class="item wow fadeInUpBig animated animated" data-number="3" style="visibility: visible;">
						<i class="fa fa-smile-o"></i>
						<p id="number2" class="number">3</p>
						<span></span>
						<p>Happy Users Registered</p>
					</div>
					<div class="item wow fadeInUpBig animated animated" data-number="816" style="visibility: visible;">
						<i class="fa fa-clock-o"></i>
						<p id="number3" class="number">816</p>
						<span></span>
						<p>Hours Worked</p>
					</div>
					<div class="item wow fadeInUpBig animated animated" data-number="6" style="visibility: visible;">
						<i class="fa fa-rocket"></i>
						<p id="number4" class="number">6</p>
						<span></span>
						<p>Total Drones</p>
					</div>
				</div>
			</div>
		</div>
		<h3 style=" margin-left: 50px; margin-right: 50px; color:white; font-size: 20px; margin-top: 20px; margin-bottom: 30px;"> We are three students from St Anna school located in Barcelona. We've been developing this project since the begining of the year and hopefully we'll finish this in a few months.</h3>
		</br>
		<h3 style=" text-align: center; margin-bottom: 50px; font-size: 20px; color: white;">If you want to help us sharing our project we'll appreciate it.</h3>
	</div>
	<!-- social -->
	<div class="social-btns">
		<a class="btn facebook" href="#" >
		<i class="fa fa-facebook" src="images/facebook-blue.png"></i>
		</a>
		<a class="btn twitter" href="#">
		<i class="fa fa-twitter"></i>
		</a>
		<a class="btn google" href="#">
		<i class="fa fa-google"></i>
		</a>
	</div>
	<script>
		$.fn.jQuerySimpleCounter = function( options ) {
			    var settings = $.extend({
			        start:  0,
			        end:    100,
			        easing: 'swing',
			        duration: 400,
			        complete: ''
			    }, options );
		
			    var thisElement = $(this);
		
			    $({count: settings.start}).animate({count: settings.end}, {
					duration: settings.duration,
					easing: settings.easing,
					step: function() {
						var mathCount = Math.ceil(this.count);
						thisElement.text(mathCount);
					},
					complete: settings.complete
				});
			};
		
		
		$('#number1').jQuerySimpleCounter({end: 29,duration: 3000});
		$('#number2').jQuerySimpleCounter({end: 3,duration: 3000});
		$('#number3').jQuerySimpleCounter({end: 816,duration: 2000});
		$('#number4').jQuerySimpleCounter({end: 6,duration: 2500});
		
		
		
		  	/* AUTHOR LINK */
		     $('.about-me-img').hover(function(){
		            $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
		        }, function(){
		            $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
		        });
		
	</script>
</body>
<script>
	document.getElementById("about-page").classList.add('active');
</script>
@endsection