	<?php 
		$base_url = $this->config->item('base_url'); 
		$userdata = $links['data']['user'][0];
		$kcys = $links['data']['user'][0]['kcys'];
	?>
	<div class="container-fluid">
      <div class="row-fluid">
      	<div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><h2><?php echo $userdata['username']?></h2></li>
              <li><br/><img width="128" src="<?php echo $userdata['img']?>" alt="imagen del usuario"/></li>
              <li><br/>Ranking: <?php echo $userdata['kcyrank']?></li>
              <li><br/>Enlaces compartidos: <?php echo $userdata['stats']['totalkcys']?></li>
              <li><br/>Clicks: <?php echo $userdata['stats']['totalkclicks']?></li>
			  <li><br/>Media clicks: <?php echo $userdata['stats']['koi']?></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>Tus enlaces compartidos</h1>
            <p>Este es tu espacio personal :)</p>
            <table class="table table-striped">
				<thead>
			    <tr>
			      <th>Título</th>
			      <th>Enlace</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			 	foreach ($kcys as $kcy) {
			 		echo '<tr>';
						echo '<td>' .$kcy['title']. '</td>';
						echo '<td>' .$kcy['shorturl']. '</td>';
					echo '</tr>';
					 }
				?>
			  </tbody>
			</table>
          </div>
        </div><!--/span-->
      </div><!--/row-->
    </div><!--/.fluid-container-->
