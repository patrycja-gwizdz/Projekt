<!DOCTYPE HTML>
<html>
	<head>
		<title> Schronisko Podaj Łapę</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<img src="{$conf->app_url}/images/3.svg" style="width:7em; alt="Schronisko" />
								<span> PODAJ ŁAPĘ </span>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="{$conf->action_root}main"> Strona główna </a></li>
									<li>
										<a href="#"> Jak pomóc?</a>
										<ul>
											<li><a href="#"> Wolontariat</a></li>
											<li><a href="#"> Dary rzeczowe</a></li>
											<li><a href="#"> Darowizny</a></li>
										</ul>
									</li>
									<li><a href="left-sidebar.html"> Kontakt</a></li>
									<li><a href="right-sidebar.html"> Adopcja</a></li>
									<li class="current"><a href="{$conf->action_root}rejestracja"> Rejestracja </a></li>
								</ul>
							</nav>

					</header>
				</div>
			
					{block name="banner"}{/block}
					{block name="features"}{/block}
					{block name="main"}{/block}
					

			
			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								
									<section class="widget links">
										<h3>Godziny otwarcia </h3>
										<ul class="style2" text-align: center; > 
											Poniedziałek 7:00 - 15:00 <br />
											Wtorek 7:00 - 18:00 <br />
											Środa 7:00 - 15:00 <br />
											Czwartek 7:00 - 18:00 <br />
											Piątek 7:00 - 15:00 <br />
											Sobota 9:00 - 18:00 <br />
											Niedziela 9:00 - 13:00 <br />
										</ul>
									</section>

						
							</div>
							
							<div class="col-3 col-6-medium col-12-small">

								<!-- Contact -->
									<section class="widget contact last">
										<h3> Kontakt</h3>
										32 256 61 15  <br />
										ul. Milowicka 1B <br />
										Katowice 40-312 <br />
										</p>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3> Nasze media</h3>
										<ul class="style2">
										<ul>	
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										</ul>
										</ul>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Schronisko Podaj Łapę</li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
			<script src="{$conf->app_url}/assets/js/jquery.dropotron.min.js"></script>
			<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
			<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
			<script src="{$conf->app_url}/assets/js/util.js"></script>
			<script src="{$conf->app_url}/assets/js/main.js"></script>

	</body>
</html>