<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Protótipo Contas a Pagar</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <header>
      <div class="logo"><img src="img/logo.png" alt=""></div>
      <div class="header-menu"></div>
    </header>

    <div class="login">
    	<h1>Login</h1><br>
	  <div class="form-group">
	    <label for="">Usuário: </label>
	    <input type="text" class="form-control" id="" placeholder="" size="25">
	  </div>
	  <div class="form-group">
	    <label for="">Senha:</label>
	    <input type="password" class="form-control" id="" placeholder="" size="25" required>
	  </div>
	  <a href="/pellicanos/html/index.php"><button class="btn btn-success form-control">Entrar</button></a><br><br>

	  <a href="">Esqueceu a senha?</a>
    <a href="">Cadastrar novo usuário</a>
    </div>

<?php include "footer.php" ?>