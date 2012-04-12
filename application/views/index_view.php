<?php $base_url = $this->config->item('base_url') ?>
	
	<div id="content">
		<h4>Hasta ahora se han registrado estos usuarios</h4>
		<ul>
		<?php
			foreach ($users as $user) 
				echo "<li>$user->NAME</li>";
		?>
		</ul>
		<form id="login" method="post" action="<?php echo $base_url . 'login';?>">
			<p>Déjate de mierdas y loguéate</p>
			<input type="text" id="login_username" name="username" placeholder="usuario"/>
			<input type="password" id="password_username" name="password" placeholder="contraseña"/>
			<input type="submit" value="Entrar"/>
		</form>
	</div>
