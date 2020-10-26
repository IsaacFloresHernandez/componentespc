<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <LINK REL=StyleSheet HREF="public/css/posicion.css" TYPE="text/css" MEDIA=screen>
    <LINK REL=StyleSheet HREF="public/css/css_body.css" TYPE="text/css" MEDIA=screen>


</head>
<body background="public/imagenes/fondo_gamer.jpg" >
    <nav class="navbar navbar-expand-lg navbar-light bg-info  " >
        <a class="navbar-brand" href="<?php echo base_url(); ?>/menu">Componentes Pc</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>/menu">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>/ensambles">Ensamblajes</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Componentes
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url(); ?>/graficas"> Tarjetas graficas</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>/procesadores">Procesadores</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>/fuentes_poder">Fuentes de poder</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>/gabinetes">Gabinetes</a>
                <a class="dropdown-item" href="#">Tarjetas Madre</a>
                <a class="dropdown-item" href="#">Ram</a>
                <a class="dropdown-item" href="#">Disco Duro/estado solido</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url(); ?>/perifericos">Otros</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
