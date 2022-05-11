<?php
/* Smarty version 4.1.0, created on 2022-05-11 20:08:50
  from 'C:\xampp\htdocs\Projekt\app\views\rejestracja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627bfbb250cc78_78101815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed96661677553c9818175a9d4c5dc381ce1073d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\rejestracja.tpl',
      1 => 1652292528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627bfbb250cc78_78101815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1716463881627bfbb2508fc9_91690993', "banner");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "banner"} */
class Block_1716463881627bfbb2508fc9_91690993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1716463881627bfbb2508fc9_91690993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="banner-wrapper">
	<div id="banner" class="box container">
  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rejestracjautworz" method="post"  >
	<legend> Rejestracja</legend>
	<fieldset>
        <div >
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div >
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
         <div >
			<label for="id_pass">Powtórz hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div >
			<input type="submit" value="Zarejestruj" class=" primary button small"/>
		</div>
	</fieldset>
</form>	  
</div>
</div>
<?php
}
}
/* {/block "banner"} */
}
