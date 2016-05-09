<?php include "header.php" ?>
<?php include "sidebar.php" ?>
  
<div class="col-sm-10">
  <div class="row">

    <div class="row">
      <div class="col-sm-12">
        <h1>Fornecedores</h1><br>

        <form class="form-inline">
          <div class="form-group">
            Status: <select class="form-control">
              <option>Ativo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
              <option>Inativo</option>
            </select>
          </div>
          <button type="submit" class="btn btn-default">Filtrar</button>&nbsp;&nbsp;&nbsp;&nbsp;

          <input type="" class="form-control" id="" placeholder="Pesquisar por CNPJ"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>

        </form>

        <br>
        
        <!-- Pop up excluir -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Excluir fornecedor "Bebidas Wilson Ltda."</h4>
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

        <a href="/pellicanos/html/cadastro-fornecedor.php"><button type="button" class="btn btn-success"> Criar novo</button></a>
        <a href="/pellicanos/html/editar-fornecedor.php"><button type="button" class="btn btn-primary"> Editar</button></a>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"> Excluir</button><br><br>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th><input type="checkbox"></th>
            <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> CNPJ</th>
            <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Razão Social</th>
            <th>Telefone</th>
            <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Status</th>
          </tr>
        </thead>
        <tr>
          <td><input type="checkbox"></td>
          <td>22.156.465/00001-23</td>
          <td>BEBIDAS WILSON LTDA.</td>
          <td>(15)3211-1234</td>
          <td style="color: green">Ativo</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>01.252.335/0001-70</td>
          <td>SOROCABA REFRESCOS</td>
          <td>(15)3211-1234</td>
          <td style="color: green">Ativo</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>49.925.225/0001-48</td>
          <td>OPPA ALIMENTOS LTDA.</td>
          <td>(15)3211-1234</td>
          <td style="color: green">Ativo</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>23.152.0001-95</td>
          <td>CEREALISTA SÃO JOÃO LTDA</td>
          <td>(14)3244-0987</td>
          <td style="color: red">Inativo</td>
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