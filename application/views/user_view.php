<?php 
	$base_url = $this->config->item('base_url'); 
	$userdata = $links['data']['user'][0];
	$kcys = $links['data']['user'][0]['kcys'];
?>
	
	<div id="content">
		<h3>¡Bienvenido a FOKAR!</h3>
		<a href="login/logout">Cerrar sesión</a>
		<h3>Estos son tus datos</h3>
			<ul>
				<li>Username: <?php echo $userdata['username']?></li>
				<li>Ranking: <?php echo $userdata['kcyrank']?></li>
				<li>Enlaces compartidos: <?php echo $userdata['stats']['totalkcys']?></li>
				<li>Clicks: <?php echo $userdata['stats']['totalkclicks']?></li>
				<li>Media clicks: <?php echo $userdata['stats']['koi']?></li>
				<li>Imagen: <br/><img width="128" src="<?php echo $userdata['img']?>" alt="imagen del usuario"/></li>
			</ul>
		<h3>Estos son tus enlaces compartidos</h3>
		<div id="links">
			<?php 
			 	foreach ($kcys as $kcy) {
					 echo '<br/>' . $kcy['title'] . '   ' . $kcy['shorturl'];
				 }
			?>
		</div>
		<h3>¿Por qué no sigues a alguno de estos pollos?</h3>
		
		
	</div>
