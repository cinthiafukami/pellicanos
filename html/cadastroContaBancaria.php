<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Padrão de telas</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <header>
      <div class="logo"><img src="img/logo.png" alt=""></div>
      <div class="header-menu">
        <div class="alertas"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></div>
        <div class="user"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;Administrador &nbsp;<span class="glyphicon glyphicon-menu-down" style="color: #999; font-size: 10px" aria-hidden="true"></span></div>
      </div>
    </header>
  

    <div class="row">
      <div class="col-sm-2 menu">
        <ul class="menu-principal">
          <a href=""><li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> &nbsp;Home</li></a>
          <a href=""><li><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> &nbsp;Contas a pagar</li></a>
          <a href=""><li><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;Fornecedores</li></a>
          <a href=""><li><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span> &nbsp;Contas bancárias</li></a>
        </ul>
      </div>

      <div class="col-sm-10">
        <div class="row">

          <div class="row">
            <div class="col-sm-12">
              <h1>Nova conta bancária</h1>
              
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4"><label for="">Banco</label><select name="" id="" class="form-control"><option value="">033 - Santander</option></select></div>
            <div class="col-sm-4"><label for="">Agência<span style="color: red">*</span></label><input class="form-control" type="text"></div>
            <div class="col-sm-4"><label for="">Conta<span style="color: red">*</span></label><input class="form-control" type="text"></div>
          </div><br>
          <div class="row">
            <div class="col-sm-4"><label for="">Saldo inicial</label><input class="form-control" type="text" placeholder="R$0,00"></div>
            <div class="col-sm-4"><label for="">Data do saldo</label><input class="form-control" type="text" placeholder="dd/mm/aaaa"></div>
            <div class="col-sm-4"><label for="">Tipo da conta: </label><br><input type="text" class="form-control"></div>
          </div>
      </div><br>

      <button type="button" class="btn btn-success">Salvar</button>
      <button type="button" class="btn btn-default">Cancelar</button>
    </div>
       
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>