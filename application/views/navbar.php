
<nav class="navbar navbar-expand-md navbar-light  bg-light sticky-top">
 <a class="navbar-brand" href="formulario_controller">
    <img src="https://elandroidelibre.elespanol.com/wp-content/uploads/2014/05/coconut.png" width="50" height="50" alt="">
  </a>
   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
    <span class="navbar-toggler-icon"></span>
  </button>

<div id="navb" class="navbar-collapse collapse hide">
<ul class="navbar-nav">
   <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url() ?>subir_video_controller">Subir video</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Crusos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Tema 1</a>
          <a class="dropdown-item" href="#">Tema 2</a>
          <!--<div class="dropdown-divider"></div>-->
          <a class="dropdown-item" href="#">Tema 3</a>
        </div>
      </li>
    </ul>
<ul class="navbar-nav mx-auto">
  <form class="form-inline my-2 my-lg-0  align-center">
    <input id="Buscar" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  </form>
</ul>

  <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
        
          <span class=" ">
          <?php 
          if ($nombre!=null) {
            echo "<a class='nav-link' href='#'>".$nombre."</a>";
          }else{
            ?>
            <a class="nav-link" href="login"> Entrar</a>
            <?php
          }  
          ?>
        </span>
      </li>
      <li class="nav-item">
        <?php
          if ($nombre!=null) {
            ?><a class="nav-link" href="<?php echo base_url() ?>formulario_controller/cerrar_sesion"><span class=" "></span> Salir</a>
          <?php }else{ ?>
            <a class="nav-link" href="registro"><span class=" "></span> Registrarse</a>
        <?php } ?>
      </li>
    </ul>
  </div>
</nav>