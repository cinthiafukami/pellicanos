<?php include "header.php" ?>
<?php include "sidebar.php" ?>

<!-- Pop up excluir -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Excluir conta 001 - Água</h4>
      </div>
      <div class="modal-body">
        Tem certeza que deseja excluir registro permanentemente?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</div>

<!-- Pop up agendar -->
<div class="modal fade" id="agendar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agendar conta a pagar</h4>
      </div>
      <div class="modal-body">
        
          <form class="form-inline">
            Conta: <b>942 - 1cx Swift Hamburguer</b> <br>
            Fornecedor: <b>Oppa Alimentos Ltda.</b> <br>
            Valor: <b>R$115,00</b> <br><br>
            <div class="form-group">
              <label for="">Banco/Agência/Conta bancária:</label><br>
              <select name="" id="" class="form-control">
                <option value="">033/1234-5/98765-4 &nbsp;&nbsp;&nbsp;&nbsp;</option>
              </select>
            </div><br><br>
            <div class="form-group">
              <label for="">Data do agendamento:</label><br>
              <input type="text" class="form-control" placeholder="dd/mm/aaaa">
            </div><br><br>

            Saldo: <b>R$7.000,00</b> <br>
            Novo Saldo: <b>R$6.947,00</b>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Agendar</button>
      </div>
    </div>
  </div>
</div>

<!-- Pop up pagar -->
<div class="modal fade" id="pagar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pagar conta</h4>
      </div>
      <div class="modal-body">
        
          <form class="form-inline">
            Conta: <b>942 - 1cx Swift Hamburguer</b> <br>
            Fornecedor: <b>Oppa Alimentos Ltda.</b> <br>
            Valor: <b>R$115,00</b> <br><br>
            <div class="form-group">
              <label for="">Banco/Agência/Conta bancária:</label><br>
              <select name="" id="" class="form-control">
                <option value="">033/1234-5/98765-4 &nbsp;&nbsp;&nbsp;&nbsp;</option>
              </select>
            </div><br><br>

            Saldo: <b>R$7.000,00</b> <br>
            Novo Saldo: <b>R$6.947,00</b>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Pagar</button>
      </div>
    </div>
  </div>
</div>

      <div class="col-sm-10">
        <div class="row">

          <div class="row">
            <div class="col-sm-12">
              <h1>Contas a pagar</h1><br>

              <form class="form-inline">
                <div class="form-group">
                  Entre <select class="form-control">
                    <option>01/03/2016 &nbsp;</option>

                  </select> &nbsp;a&nbsp;
                  <select class="form-control">
                    <option>31/03/2016 &nbsp;</option>
                  </select>

                  &nbsp;&nbsp;&nbsp;Nível: <select class="form-control">
                    <option>1</option>
                  </select>

                  &nbsp;&nbsp;&nbsp;Status: <select class="form-control">
                    <option>Não pago</option>
                  </select>
                </div>
                &nbsp;&nbsp;<button type="submit" class="btn btn-default">Filtrar</button>&nbsp;&nbsp;&nbsp;&nbsp;

                <input type="" class="form-control" id="" placeholder="Pesquisar por código"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
              </form>

              <a href="/pellicanos/html/relatorio-contas-pagar.pdf" target="_blank"><button class="btn btn-default" style="float: right" ><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Gerar relatório</button></a>

              <br>

              <a href="/pellicanos/html/cadastro-conta-pagar.php"><button type="button" class="btn btn-success"> Criar novo</button></a>
              <a href="/pellicanos/html/editar-conta-pagar.php"><button type="button" class="btn btn-primary"> Editar</button></a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"> Excluir</button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#pagar"> Pagar</button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#agendar"> Agendar</button>
              <button type="button" class="btn btn-default"> Simular</button>
            </div>
          </div>  
          <br>

          <div class="row">
            <div class="col-sm-12">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th></th>
                  <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Código</th>
                  <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Descrição</th>
                  <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Valor</th>
                  <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Nível</th>
                  <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Vencimento</th>
                  <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Status</th>
                </tr>
              </thead>
              <tr>
                <td><input type="checkbox"></td>
                <td>001</td>
                <td>Água</td>
                <td>R$53,00</td>
                <td>1</td>
                <td>31/03/2016</td>
                <td style="color: red">Não pago</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>002</td>
                <td>Luz</td>
                <td>R$64,00</td>
                <td>1</td>
                <td>31/03/2016</td>
                <td style="color: red">Não pago</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>003</td>
                <td>100 un. Copo descartável Mabex</td>
                <td>R$53,00</td>
                <td>1</td>
                <td>31/03/2016</td>
                <td style="color: green">Pago</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>942</td>
                <td>1cx Swift Hamburguer</td>
                <td>R$115,00</td>
                <td>1</td>
                <td>31/06/2016</td>
                <td style="color: red">Não pago</td>
              </tr>
            </table>

            <div style="float: right">
              <button type="submit" class="btn btn-default" disabled="true" \><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></button><button type="submit" class="btn btn-default" disabled="true" \><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
            </div>
            </div>
          </div>
      </div>
    </div>

<?php include "footer.php" ?>