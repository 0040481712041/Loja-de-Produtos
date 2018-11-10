<?php 
error_reporting(E_ALL ^ E_NOTICE);
require_once("alerta.php"); ?>



<html>
<head>
    <meta charset="utf-8">
    <title>Loja de Produtos</title>
    <link href="node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet">
    <link href="node_modules/bootstrap/compiler/loja.css" rel="stylesheet">
    <link href="css/loja.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/shop.png" />

    
</head>
<body>


<nav class="navbar navbar-expand navbar-dark bg-gradient-primary">
          
          <div class="container">
  
                <a class="navbar-brand h1 mb-0" href="index.php">Loja do Silas</a>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                   <span class="navbar-toggler-icon"></span>
                </button>
  
            <div class="collapse navbar-collapse" id="navbarSite">
              
                 <ul class="navbar-nav mr-auto">
  
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="produto-formulario.php">Adicionar</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="produto-lista.php">Produtos</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                     </li>
  
                </ul>
  
                <ul class="navbar-nav ml-auto">
  
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                           Redes Sociais
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">Twitter</a>
                            <a class="dropdown-item" href="#">Instagram</a>
                            <a class="dropdown-item" href="#">YouTube</a>
                            <a class="dropdown-item" href="https://wa.me/5519987480963" target="_blank">WhatsApp</a>
                            <a class="dropdown-item" href="https://github.com/0040481712041" target="_blank">GitHub</a>
                        </div>
  
                     </li>
  
                </ul>
   
           </div>
           
  
           <form class="form-inline my-4">    <!--margin-right(mr) margin-left(ml)-->
              <input class="form-control ml-4 mr-2" type="search" placeholder="Buscar..."> 
              <button class="btn btn-light" type="Submit">Procurar</button>
           </form>
      
        </div>
       
    </nav>

    <div class="container">
        <div class="principal">
            


    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
             