<?php
include 'header.php';
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Fixed fullscreen backgrounds - fullPage.js</title>
	


	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/examples.css" />
	<style>

	/* Style for our header texts
	* --------------------------------------- */
	h2{
		font-size: 5em;
		font-family: arial,helvetica;
		color: #fff;
		margin:0;
		padding:0;
	}

	/* Centered texts in each section
	* --------------------------------------- */
	.section{
		text-align:center;
	}


	/* Backgrounds will cover all the section
	* --------------------------------------- */
	#section0,
	#section1,
	#section2,
	#section3{
		background-size: cover;
		background-attachment: fixed;
	}

	/* Defining each sectino background and styles
	* --------------------------------------- */
	#section0{
		background-image: url(imgs/bg1.jpg);

		padding: 30% 0 0 0;
	}

	#section2{
		background-image: url(imgs/bg1.jpg);

		padding: 30% 0 0 0;
	}
	



 	/*Adding background for the slides
	* --------------------------------------- */
	#slide1{
		background-image: url(imgs/bg3.jpg);
		background-size: cover;
		background-attachment: fixed;
		padding: 6% 0 0 0;
	}
	#slide2{
		background-image: url(imgs/bg2.jpg);
		background-size: cover;
		background-attachment: fixed;
		padding: 6% 0 0 0;
	}
	#slide3{
		background-image: url(imgs/bg4.jpg);
		background-size: cover;
		background-attachment: fixed;
		padding: 6% 0 0 0;
	}
	#slide4{
		background-image: url(imgs/bg5.jpg);
		background-size: cover;
		background-attachment: fixed;
		padding: 6% 0 0 0;
	}
	#slide5{
		background-image: url(imgs/bg6.jpg);
		background-size: cover;
		background-attachment: fixed;
		padding: 6% 0 0 0;
	}

	/* Bottom menu

	* --------------------------------------- */
	#infoMenu li a {
		color: #fff;
	}
	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="vendors/scrolloverflow.js"></script>

	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="js/examples.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: false,

				//to avoid problems with css3 transforms and fixed elements in Chrome, as detailed here: https://github.com/alvarotrigo/fullPage.js/issues/208
				css3:false
			});
		});
	</script>

</head>
<body>



<div id="fullpage">
	<div class="section " id="section0">
		<div class="intro" >
	    	
			<h2 style="font-size: 50px;font-family: Times; padding:10px;background-color:rgba(5,5,5,.9);color: grey">Football Follower:<br> Follow Your Favorite Football Club </h2>
			
		</div>
	</div>
	<div class="section" id="section1">
	    <a href="chelsea.php"><div class="slide" id="slide1"></div></a>
	    <a href="arsenal.php"><div class="slide" id="slide2"></div></a>
	    <a href="liverpool.php"><div class="slide" id="slide3"></div></a>
	    <a href="mufc.php"><div class="slide" id="slide4"></div></a>
	    <a href="mcfc.php"><div class="slide" id="slide5"></div></a>
	</div>
	<div class="section" id="section2">
		<a href="http://localhost:5000/web2/labproj/latest">
		<div class="intro" >
		   	
			<h2 style="font-size: 50px;font-family: Times; padding:10px;background-color:rgba(5,5,5,.9);color: grey">Our Flask Endpoint for<br> Getting Aggregated tweets </h2>
			
		</div></a>
	</div>
</div>

</body>
</html>
