<!DOCTYPE html>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Yatri Place - Search Anything Go Anywhere</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
	
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="assets/css/custom.css" rel="stylesheet" media="screen">
    <link href="assets/css/intro.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
	
    <!-- Fonts -->	
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>	
	<!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="screen" />
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="assets/css/font-awesome-ie7.css" media="screen" /><![endif]-->
	
    <!-- Carousel -->	
	<link href="examples/carousel/carousel.css" rel="stylesheet">
	
    <!-- Revolution banner css settings -->
    <link rel="stylesheet" type="text/css" href="css/fullscreen.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- Picker -->	
	<link rel="stylesheet" href="assets/css/jquery-ui.css" />	
	
    <!-- jQuery -->	
    <script src="assets/js/jquery.v2.0.3.js"></script>
<script src="js/jquery/jquery-1.7.1.min.js"></script>
<script src="js/jquery/jquery.ui.core.min.js"></script>
<script src="js/jquery/jquery.ui.widget.min.js"></script>
<script src="js/jquery/jquery.ui.position.min.js"></script>
<script src="js/jquery/jquery.ui.autocomplete.min.js"></script>
<script>var dataent = [
	{"label" : "Movie Theater"},
		{"label" : "Movie Rental"},
		{"label" : "Zoo"},
		{"label" : "Amusement Park"},
		{"label" : "Night Club"},
		{"label" : "Pubs"},
		{"label" : "Disks"},
		{"label" : "Clubs"}
		];
</script>
<script>

$(function() {

	$( "#q" ).autocomplete(
	{
		 source:"rsrc.php"
	})
});
</script>
  </head>
  <body>
    
	<!-- BLUE SECTION -->	
	<div class="bluediv">
		<div class="loader"><img src="images/loading.gif" alt="" /></div>
		
		<a href="index.html"><img class="logointro" src="images/logo-intro.png" alt="" /></a>
		
		<div class="tabscontainer">
			<ul class='tabs'>
				<li class="b1" onclick='mySelectUpdate(); changeAnimation1();'><a href='#tab1'><div class="anivacations"><img src="images/spacer.png" alt=""/>Known Place</div></a></li>
				<li class="b2" onclick='mySelectUpdate(); changeAnimation2();'><a href='#tab2'><div class="anihotels"><img src="images/spacer.png" alt=""/>Entertainment</div></a></li>
				<li class="b3" onclick='mySelectUpdate(); changeAnimation3();'><a href='#tab3'><div class="aniflights"><img src="images/spacer.png" alt=""/>Food</div></a></li>
				<li class="b4" onclick='mySelectUpdate(); changeAnimation4();'><a href='#tab4'><div class="anicars"><img src="images/spacer.png" alt=""/>Stores</div></a></li>
				<li class="b5" onclick='mySelectUpdate(); changeAnimation5();'><a href='#tab5'><div class="anicruises"><img src="images/spacer.png" alt=""/>Other</div></a></li>
			</ul>
		</div>
		
		<div class="social">
			<a href="https://www.facebook.com/yatriplace" ><img src="images/icon-facebook.png" alt=""/></a>
			<a href="https://twitter.com/yatriplace" ><img src="images/icon-twitter.png" alt=""/></a>
			<a href="#" ><img src="images/icon-gplus.png" alt=""/></a>
			<a href="#" ><img src="images/icon-youtube.png" alt=""/></a>
			<br/><br/>
			&copy; 2014 |<a href="http://www.yatriplace.com">Yatri Place</a><br/>All rights reserved.
		</div>
	</div>
	<!-- END OF BLUE SECTION -->	

	<!--WHITE SECTION -->	
	<div class="whitediv">
	
		<!--HOME OBJECTS -->	
		<img class="girl-car" src="images/girl-car.png" alt="" />
		<img class="couple" src="images/couple.png" alt="" />
		<img class="girl" src="images/girl.png" alt="" />
		<img class="girl2" src="images/girl2.png" alt="" />
		
		<img class="car" src="images/car.png" alt="" />
		<img class="girl-cruise" src="images/girl-cruise.png" alt="" />
		<div class="palmbgcontainer"></div>
		<img class="road" src="images/road.jpg" alt="" />
		<img class="dubai" src="images/dubai.jpg" alt="" />
		<img class="plane" src="images/plane.jpg" alt="" />
		
		<img class="cruise" src="images/cruise.jpg" alt="" />

		<!--TAB 1 -->	
		<div id="tab1">
			<form action="directsearch.php" method="get">
			<div class="w100percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Search anything</b></span>
<input class="form-control" placeholder="Enter your search term..." type="text" value="" name="q" id="q"  autocomplete="off">
							<!--input class="submit" type="submit"  value=""!-->
				</div>
			</div>

			
			<div class="clearfix"></div><br/>
			
			
			
			
			
			
				<input type="submit" class="btn-search2" value="Search"></input>	
			</form>	
		</div>
		<!-- END OF TAB1 -->

		<!-- END OF TAB5 -->
		
		
		
		
	</div>
	<!-- END OF WHITE SECTION -->	
	
	
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
	
    <!-- Javascript -->
	<script src="assets/js/js-intro2.js"></script>
	
	<!-- Preload images -->
    <script src="assets/js/jquery.preload.js"></script>	
	
    <!-- Easing -->	
    <script src="assets/js/jquery.easing.js"></script>	
	
    <!-- Nicescroll  -->	
	<script src="assets/js/jquery.nicescroll.min.js"></script>	
	
    <!-- Picker UI-->		
	<script src="assets/js/jquery-ui.js"></script>		
	
    <!-- Custom Select -->
	<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>
	
    <!-- Functions -->
    <script src="assets/js/functions.js"></script>
	
    <!-- CarouFredSel -->
    <script src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="assets/js/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
	<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-43203432-1', 'titanicthemes.com');  ga('send', 'pageview');</script>
  </body>
</html>
