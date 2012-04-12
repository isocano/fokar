	<div id="content">
		<h4>Hasta ahora se han registrado estos usuarios</h4>
		<ul>
		<?php
			foreach ($users as $user) 
				echo "<li>$user->NAME</li>";
		?>
		</ul>
	</div>
