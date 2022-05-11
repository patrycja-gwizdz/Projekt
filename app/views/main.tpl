{extends file= "template.tpl"}
{block name="banner"}
<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-7 col-12-medium">
								<h2> Schronisko  </h2>
								<p> PODAJ ŁAPĘ</p>
								<img src="{$conf->app_url}/images/7.svg" style="width:7em;alt="" />
							</div>
							<div class="col-5 col-12-medium">
								<ul>
									<li><a href="#" class="button large icon solid fa-arrow-circle-right" color:red; > Nasi podopieczni</a></li>
									<li><a href="#" class="button alt large icon solid fa-question-circle"> Więcej informacji </a></li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
{/block}

{block name="features"}
	<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="{$conf->app_url}/images/4.svg" alt="" /></a>
										<div class="inner">
											<header>
												<h2> Zostań wolontariuszem</h2>
											</header>
											<p>Jedną z najszlachetniejszych form pomocy bezdomnym zwierzętom jest wolontariat w schronisku.</p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="{$conf->app_url}/images/6.svg" alt="" /></a>
										<div class="inner">
											<header>
												<h2> Poznaj podopiecznych</h2>
											</header>
											<p>Nie każde zwierzę ma wiele szczęścia w życiu, poznaj histrorię naszych podopiecznych.</p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="{$conf->app_url}/images/5.svg" alt="" /></a>
										<div class="inner">
											<header>
												<h2> Zaadoptuj </h2>
											</header>
											<p> Wiele naszych podopiecznych czworonogów czeka na to aby mieć swój własny dom. </p>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>
{/block}

{block name="main"}
<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="widget thumbnails">
											<h3></h3>
											<div class="grid">
												<div class="row gtr-50">
													<div class="col-6"><a href="#" class="image fit"><img src="{$conf->app_url}/images/pies3.svg" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="{$conf->app_url}/images/pies1.svg" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="{$conf->app_url}/images/pies2.svg" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="{$conf->app_url}/images/pies4.svg" alt="" /></a></div>
												</div>
											</div>
										</section>
									</div>

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<div id="content">
										<section class="last">
											<h2> O nas</h2>
											<p>Obecnie w Schronisku przebywa około 20 psów, którymi przez cała dobę opiekują się pracownicy z dużym doświadczeniem w opiece nad zwierzętami. Co roku do Schroniska przyjmowanych jest około 1000 zwierząt. Dzięki zaangażowaniu pracowników i wolontariuszy oraz prowadzonym akcjom adopcyjnym, prawie tyle samo zwierząt zostaje wydanych ze Schroniska.</p>
											<p>Nasza misja: Chronimy bezdomne zwierzęta, Stwarzamy im druga szansę. Wiemy, że czują. Schronisko to nie dom docelowy dla bezdomnych zwierząt. To jedynie przystanek na ich trudnej drodze życia. Przystanek pomiędzy jednym a drugim domem.</p>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>
{/block}
