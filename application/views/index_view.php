<?php $base_url = $this->config->item('base_url') ?>
	
	<div id="content">
		<?php 
			if (isset($message))
				echo $message;
		?>
		<form id="login" method="post" action="<?php echo $base_url . 'login';?>">
			<p>Déjate de mierdas y loguéate</p>
			<input type="text" id="login_username" name="username" placeholder="usuario"/>
			<input type="password" id="password_username" name="password" placeholder="contraseña"/>
			<input type="submit" value="Entrar"/>
		</form>
<?php
 for ($i=0; $i < sizeof($list_kcys['data']['kcy']); $i++) { 
  	echo "<p>" .$list_kcys['data']['kcy'][$i]['imgUser']. " - " .$list_kcys['data']['kcy'][$i]['user']. " - " .$list_kcys['data']['kcy'][$i]['title']. " - " .$list_kcys['data']['kcy'][$i]['url']. " - " .$list_kcys['data']['kcy'][$i]['time']. " </p>";   
 } 
?>
	</div>
