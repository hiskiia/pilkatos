
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title> Login | Pilkatos.Tech </title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Custom Theme files -->
	<style type="text/css">
		html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video {
			margin: 0;
			padding: 0;
			border: 0;
			font-size: 100%;
			font: inherit;
			vertical-align: baseline;
		}

		article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {
			display: block;
		}

		ol,ul {
			list-style: none;
			margin: 0px;
			padding: 0px;
		}

		blockquote,q {
			quotes: none;
		}

		blockquote:before,blockquote:after,q:before,q:after {
			content: '';
			content: none;
		}

		table {
			border-collapse: collapse;
			border-spacing: 0;
		}

		a {
			text-decoration: none;
		}

		.txt-rt {
			text-align: right;
		}
		.txt-lt {
			text-align: left;
		}
		.txt-center {
			text-align: center;
		}
		.float-rt {
			float: right;
		}
		.float-lt {
			float: left;
		}
		.clear {
			clear: both;
		}
		.pos-relative {
			position: relative;
		}
		.pos-absolute {
			position: absolute;
		}
		.vertical-base {
			vertical-align: baseline;
		}
		.vertical-top {
			vertical-align: top;
		}
		nav.vertical ul li {
			display: block;
		}
		nav.horizontal ul li {
			display: inline-block;
		}
		img {
			max-width: 100%;
		}

		body {
			font-family: 'Hind', sans-serif;
		} 

		h1 {
			font-size: 45px;
			color: #fff;
			font-weight: 300;
			text-transform: uppercase;
			letter-spacing: 4px;
			text-align: center;
			padding: 1em 0 0.4em 0;
		}

		@keyframes slideleft {
			from {
				background-position: 0%;
			}

			to {
				background-position: 90000%;
			}
		}

		@-webkit-keyframes slideleft {
			from {
				background-position: 0%;
			}

			to {
				background-position: 90000%;
			}
		}

		.w3layouts-main {
			background-image: url('{{ ($bg_login != NULL ? asset($bg_login) : asset('images/bg-login.jpg')) }}');
			background-repeat: repeat-x;
			animation: slideleft 20000s infinite linear;
			-webkit-animation: slideleft 20000s infinite linear;
			background-size: cover;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			background-attachment: fixed;
			position: relative;
			min-height: 100vh;
		}

		.bg-layer {
			background: rgba(0, 0, 0, 0.7);
			min-height: 100vh;
		}
		/*-- //slide --*/

		/*--header start here--*/
		.w3ls-header {
			padding: 0em 0 0;
		}

		.icon1 {
			margin: 0 0 1em;
			padding: .8em 1em;
			background: rgba(255, 255, 255, 0.94);
		}

		.icon1 span.fa {
			color: #222;
			width: 22px;
		}

		.main-icon {
			text-align: center;
		}

		.main-icon span.fa {
			font-size: 50px;
			color: #fff;
			margin-bottom: 1em;
		}

		.wthree li {
			display: inline-block;
		}

		a {
			color: #585858;
			margin: 0em;
		}

		.bottom {
			margin: 1em 0 0;
		}

		.header-main {
			max-width: 310px;
			margin: 0 auto;
			position: relative;
			z-index: 999;
			padding: 3em 2em;
			background: rgba(255, 255, 255, 0.04);
			-webkit-box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
			box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
		}

		.sign-up {
			margin: 2em 0;
		}

		.header-left {
			background: #fff;
			padding: 0px;
		}

		.sign-up h2 {
			font-size: 22px;
			color: #fff;
			text-align: center;
			background: #fbbc05;
			width: 40px;
			height: 40px;
			line-height: 1.9em;
			border-radius: 50%;
			margin: 0 auto;
		}

		::-webkit-input-placeholder {
			color: #333!important;
		}

		.header-left-bottom input[type="text"] {
			outline: none;
			font-size: 15px;
			color: #222;
			border: none;
			width: 90%;
			display: inline-block;
			background: transparent;
			letter-spacing: 1px;
		}

		.header-left-bottom input[type="password"] {
			outline: none;
			font-size: 15px;
			color: #222;
			border: none;
			width: 90%;
			display: inline-block;
			background: transparent;
			letter-spacing: 1px;
		}

		.header-left-bottom button.btn {
			background: #007cc0;
			color: #fff;
			font-size: 15px;
			text-transform: uppercase;
			padding: .8em 2em;
			letter-spacing: 1px;
			transition: 0.5s all;
			-webkit-transition: 0.5s all;
			-moz-transition: 0.5s all;
			-o-transition: 0.5s all;
			display: inline-block;
			cursor: pointer;
			outline: none;
			border: none;
			width: 100%;
		}

		/*-- agileits --*/
		.header-left-bottom p {
			font-size: 17px;
			color: #000;
			display: inline-block;
			width: 50%;
			margin: 20px 0 0;
			letter-spacing: 1px;
			float: left;
		}

		.header-left-bottom p.right {
			text-align: right;
		}

		.header-left-bottom p a {
			font-size: 11px;
			color: #e2e2e2;
			text-transform: uppercase;
		}

		.social {
			margin: 2em 0 0;
		}

		.heading h5 {
			color: #c5c5c5;
			color: #000000;
			margin-top: 8px;
			font-size: 20px;
		}

		.social span.fa {
			color: #fff;
			font-size: 12px;
			line-height: 35px;
			margin: 0 5px;
			transition: 0.5s all;
		}

		.social ul li {
			display: inline-block;
			margin: 0 5px;
			font-size: 15px;
			color: #fff;
			letter-spacing: 1px;
			text-transform: capitalize;
		}

		.social a.facebook {
			background: #3b5998;
		}

		.social a.twitter {
			background: #1da1f2;
		}

		.social a.linkedin {
			background: #00a0dc;
		}

		.social a.google {
			background: #dd4b39;
		}

		.social ul li a {
			background: rgba(255, 255, 255, 0.22);
			width: 35px;
			height: 35px;
			line-height: 35px;
			display: block;
			text-align: center;
			border-radius: 50%;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			-ms-border-radius: 50%;
			-o-border-radius: 50%;
		}

		.login-check {
			position: relative;
		}

		.checkbox i {
			position: absolute;
			top: 0px;
			left: 0%;
			text-align: center;
			display: block;
			width: 19px;
			height: 17px;
			outline: none;
			background: #fff;
			border-radius: 0px;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			-o-border-radius: 0px;
			cursor: pointer;
		}

		.checkbox input:checked + i:after {
			opacity: 1;
		}

		.checkbox input + i:after {
			position: absolute;
			opacity: 0;
			transition: opacity 0.1s;
			-o-transition: opacity 0.1s;
			-ms-transition: opacity 0.1s;
			-moz-transition: opacity 0.1s;
			-webkit-transition: opacity 0.1s;
		}

		.checkbox input + i:after {
			content: url(../images/tick.png);
			top: -1px;
			left: 2px;
			width: 15px;
			height: 15px;
		}

		.checkbox {
			position: relative;
			display: block;
			padding-left: 30px;
			text-transform: capitalize;
			letter-spacing: 1px;
			font-size: 14px;
			color: #fff;
		}

		input[type="checkbox" i] {
			display: none;
		}
		/*-- w3layouts --*/
		/*-- header end here --*/
		h2 {
			font-size: 26em;
			color: #fff;
			line-height: 1.3em;
			letter-spacing: 10px;
		}

		h3 {
			font-size: 2em;
			color: #fff;
		}

		h3 a {
			font-size: 17px;
			padding-left: 12px;
			color: #04c9f9;
			text-decoration: underline;
		}
		/*-- copyright --*/
		.copyright {
			padding: 2em 0;
			text-align: center;
		}

		.copyright p {
			font-size: 15px;
			letter-spacing: 1px;
			color: #ccc;
			line-height: 1.8em;
		}

		.copyright p a {
			color: #fff;
			-webkit-transition: 0.5s all;
			-moz-transition: 0.5s all;
			-o-transition: 0.5s all;
			-ms-transition: 0.5s all;
			transition: 0.5s all;
		}
		/*-- //copyright --*/
		/*-- //main --*/

		/*-- responsive-design --*/ 

		@media(max-width:667px) {

			h1 {
				font-size: 40px;
				letter-spacing: 3px;
			}
		}

		@media(max-width:415px) {

			h1 {
				font-size: 35px;
				letter-spacing: 3px;
			}

			.social {
				margin: 1em 0 0;
			}

			.copyright {
				padding: 2em 1em;
			}
		}

		@media(max-width:384px) {
			.main-icon span.fa {
				margin-bottom: .6em;
			}

			.header-main {
				max-width: 310px;
				margin: 0 1em;
			}

			.header-left-bottom input[type="text"],.header-left-bottom input[type="password"] {
				width: 88%;
			}

			.social ul li {
				margin: 0 2px;
			}

			h1 {
				font-size: 30px;
			}
		} 
		/*-- //responsive-design --*/
	</style>
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js" integrity="sha256-7OUNnq6tbF4510dkZHCRccvQfRlV3lPpBTJEljINxao=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" integrity="sha256-2bAj1LMT7CXUYUwuEnqqooPb1W0Sw0uKMsqNH0HwMa4=" crossorigin="anonymous" />
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>

	<!-- main -->
	@yield('content')
	<!-- //main -->
	<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
	@if ($errors->has('username'))
	<script type="text/javascript">
		$(document).ready(function() {
			Swal.fire(
				'Pesan',
				'Kode/NIS Yang Anda Masukkan Tidak Terdaftar!',
				'info'
				)
		});
	</script>
	@elseif ($errors->has('password'))
	<script type="text/javascript">
		$(document).ready(function() {
			Swal.fire(
				'Pesan',
				'Password Yang Anda Masukkan Salah!',
				'info'
				)
		});
	</script>
	@elseif ($errors->has('status'))
	<script type="text/javascript">
		$(document).ready(function() {
			Swal.fire(
				'Pesan',
				'Anda Sudah Memilih!',
				'info'
				)
		});
	</script>
	@endif
	@if(Session::has('logout-message'))
	<script type="text/javascript">
		$("document").ready(function(){
			Swal.fire(
				'Pesan',
				'{{ Session::get('logout-message') }}',
				'info'
				);
		});
	</script>
	@endif

</body>
</html>