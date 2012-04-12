<div class="container-fluid">
      <div class="row-fluid">
        <div class="span9">
          <div class="hero-unit">
            <h1>Ranking</h1>
            <p>En fokar nos gustan las listas, aquí están los mejores =)</p>
            <table class="table table-striped">
				<thead>
			    <tr>
			      <th>Usuario</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		$id = 0;
					foreach ($ranking['data']['user'] as $user) 
					{
						echo '<tr>';
							echo '<td>' .$user['username']. '</td>';
							if ($this->session->userdata('logged_in'))
							{
								if ($user['followed'] == FALSE)
									echo '<td><a class="btn btn-small btn-info" href="#" 
											onclick="follow(\'' . $this->session->userdata('username') . '\', \'' . $user['username'] . '\', \'' . $id . '\')">
											<span id="'.$id.'"><i class="icon-plus icon-white"></i> Seguir</span></a></td>';
								else 
									echo '<td><a class="btn btn-small btn-info" href="#" 
											onclick="unfollow(\'' . $this->session->userdata('username') . '\', \'' . $user['username'] . '\', \'' . $id . '\')">
											<span id="'.$id.'"><i class="icon-minus icon-white"></i> Dejar de seguir</span></a></td>';
								
							}
						echo '</tr>';
						$id ++;
					}
				?>
			  </tbody>
			</table>
          </div>
        </div><!--/span-->
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
      </div><!--/row-->
    </div><!--/.fluid-container-->