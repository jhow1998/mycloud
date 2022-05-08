<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!--- font awesome cdn link   -->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--link css  -->

    <link rel="stylesheet" href="css/style.css">

    <title>MyCloud</title>
</head>
<body>
    
<header>

<div id="menu-bar" class="fas fa-bars"></div>

<a href="#" class="logo"><i class="fas fa-cloud"> <span>my</span>Cloud</i></a>

<nav class="navbar">
   <a href="#inicio">inicio</a>
   <a href="#planos">planos</a>
   <a href="#servicos">serviços</a>
   <a href="#avaliacoes">avaliações</a>
   <a href="#contato">contato</a>
  
</nav>

<div class="icons">
    <i class="fas fa-search" id="search-btn"></i>
    <i class="fas fa-user" id="login-btn"></i>
</div>

<form action="" method="post" class="search-bar-container">
    <input type="search" name="" id="search-bar" placeholder="Pesquise aqui...">
    <label for="search-bar" class="fas fa-search" ></label>
</form>

</header>


<!-- fim do header -->

<!-- login form container -->

<div class="login-form-container">

<i class="fas fa-times" id="form-close"></i>

<form action="">
    <h3>Login</h3>
    <input type="email" class="box" placeholder="coloque seu email">
    <input type="password" class="box" placeholder="coloque sua senha">
    <input type="submit" value="Entrar" class="btn">
    <input type="checkbox" id="remenber">
    <label for="remember">lembrar de min</label>
    <p>esqueceu sua senha ? <a href="#">Click aqui</a></p>
    <p>Não tem uma conta ? <a href="#">Registre agora</a></p>
</form>

</div>

<div class="login-cadastro-container">

<i class="fas fa-times" id="form-close-cad"></i>

<form action="">
    <h3>registrese-se agora</h3>
    <input type="text" required placeholder="coloque seu nome" class="box">
    <input type="email" class="box" placeholder="coloque seu email">
    <input type="password" class="box" placeholder="coloque sua senha">
    <input type="password" class="box" placeholder="confirme sua senha">
    <p>ja tem uma conta ? <a href="#">Click aqui</a></p>
    <input type="submit" value="Entrar" class="btn">
</form>

</div> 

