<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>
<body>
	<!--layout body-->
<nav class="navbar navbar-default navbar-fixed-top navbar-cp">
	<div class="container-fluid">
		

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav" id="navsound">
				<li ><a href="#content">
				<audio id="audio1" autoplay="" preload="auto">
					<source src="/audio/1.mp3">
					<source src="/audio/2.mp3">
					<source src="/audio/3.mp3">
				</audio>Home</a></li>
				<li><span class="sprite ie"></span></li>
				<li><a href="#section2">My Profile</a></li>
			</ul>
			<script>var music = $("#audio1")[0];
				$("navsound a").mouseenter(function() {
		music.play();
	});</script>
		</div>
	</div>
</nav>
<div id="content">
<section class="cp-jumbotron jumbotron-banner">">
	<div class="container">
		<button class="button">Welcome To My Profile</button>
	</div>
</section>
<section id="section2">
	<div class="content-utama">
		<div class="row">
		  <div class="col-sm-4"><img src="/image/2.png" class="img1"/>
		  </div>
		  <div class="col-sm-8"><p class="detail">
		        Name: Ahmad Qorthoni Nur Ardhi
			<br>Kelas: XI RPL 1
			<br>Sekolah: SMK Telekomuikasi Darul 'Ulum</p>
			</div>
		</div>		
	</div>
</section>
<section id="section3">
	<div class="cont">
		@yield('content')
		<audio id="audio2">
					<source src="/audio/1.mp3">
					<source src="/audio/2.mp3" type="mp3">
					<source src="/audio/3.mp3" type="audio/mp3">
				</audio>
	</div>
	<script type="text/javascript">
		
	</script>
</section>
</div>
<footer> 
	<div class="footer1"><p class="foot1">Copyright@2017</p></div>
  	<div class="footer2"><p class="foot2">Produced By:Ahmad Qorthony Nur Ardhi</p></div>
  	</footer>
		<!--Ends Layout Body-->

</body>
</html>