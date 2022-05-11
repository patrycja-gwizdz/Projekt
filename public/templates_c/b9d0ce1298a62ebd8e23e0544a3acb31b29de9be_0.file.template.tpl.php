<?php
/* Smarty version 4.1.0, created on 2022-05-11 19:37:48
  from 'C:\xampp\htdocs\Projekt\app\views\templates\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627bf46c69a472_25033572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9d0ce1298a62ebd8e23e0544a3acb31b29de9be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\templates\\template.tpl',
      1 => 1652290666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627bf46c69a472_25033572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title> Schronisko Podaj Łapę</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/3.svg" style="width:7em; alt="Schronisko" />
								<span> PODAJ ŁAPĘ </span>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main"> Strona główna </a></li>
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
									<li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rejestracja"> Rejestracja </a></li>
								</ul>
							</nav>

					</header>
				</div>
			
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_741432546627bf46c6964b8_45366452', "banner");
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1505842369627bf46c697212_47578252', "features");
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_791091530627bf46c697960_00334242', "main");
?>

					

			
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

			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block "banner"} */
class Block_741432546627bf46c6964b8_45366452 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_741432546627bf46c6964b8_45366452',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "banner"} */
/* {block "features"} */
class Block_1505842369627bf46c697212_47578252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'features' => 
  array (
    0 => 'Block_1505842369627bf46c697212_47578252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "features"} */
/* {block "main"} */
class Block_791091530627bf46c697960_00334242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_791091530627bf46c697960_00334242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "main"} */
}
