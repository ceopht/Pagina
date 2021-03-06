<?php
  include_once ('../database/crudUsuarios.php');
  $buscar_usu=buscarUsuario($_SESSION['id'],"idUsuario");
  $datos_usu = mysqli_fetch_assoc($buscar_usu);
  if(!empty($datos_usu)){
    $_SESSION['user'] = $datos_usu['usuario'];
    $_SESSION['type'] = $datos_usu['tipo'];
    $_SESSION['state'] = $datos_usu['estado'];
  }else{
    header("Location:../index.php?status=err");
  }
?>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a href="../usuarios/editarPerfil.php" class="navbar-brand"><?php echo $_SESSION['user'];?></a>
    <button class="navbar-toggler">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Post
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="../post/adminPost.php">Administrar post</a></li>
                    <li><a class="dropdown-item" href="../post/registroPost.php">Crear post</a></li>
                    <li><a class="dropdown-item" href="../post/post.php">Ver post</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../usuarios/adminUsuarios.php">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../usuarios/editarPerfil.php">Perfil</a>
            </li>
        
        </ul>
        <a href="../login/cerrarSesion.php">
        <div class="btn btn btn-outline-light">Cerrar Sesión</div>
        </a>
    </div>
  </div>
</nav>