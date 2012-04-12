	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Fokar, el sitio que más mola</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li <?php if($activeView == 1) echo 'class="active"';?> ><a href="/fokar">Inicio</a></li>
              <li <?php if($activeView == 2) echo 'class="active"';?>><a href="/fokar/ranking">Ranking</a></li>
              <li <?php if($activeView == 3) echo 'class="active"';?>><a href="/fokar/contact">Contacto</a></li>
            </ul>
            <p class="navbar-text pull-right">Logged in as <a href="#">username </a><a href="login/logout">Cerrar sesión</a></p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
