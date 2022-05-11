{extends file= "template.tpl"}
{block name="banner"}
<div id="banner-wrapper">
	<div id="banner" class="box container">
  <form action="{$conf->action_root}rejestracjautworz" method="post"  >
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
{/block}
