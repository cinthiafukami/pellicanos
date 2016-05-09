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

        <a href="/pellicanos/html/cadastro-fornecedor.php"><button type="button" class="btn btn-primary"> Criar novo</button></a>

        <button type="button" class="btn btn-danger" disabled> Excluir</button><br><br>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th><input type="checkbox"></th>
            <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Código</th>
            <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Razão Social</th>
            <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> CNPJ</th>
            <th>Telefone</th>
            <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Status</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tr>
          <td><input type="checkbox"></td>
          <td>001</td>
          <td>BEBIDAS WILSON LTDA.</td>
          <td>22.156.465/00001-23</td>
          <td>(15)3211-1234</td>
          <td style="color: green">Ativo</td>
          <td><a href="/pellicanos/html/editar-fornecedor.php"><span class="glyphicon glyphicon-edit" aria-hidden="true" title="editar"></span></a> <span class="glyphicon glyphicon-trash" aria-hidden="true" title="excluir"></span></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>111</td>
          <td>SOROCABA REFRESCOS</td>
          <td>01.252.335/0001-70</td>
          <td>(15)3211-1234</td>
          <td style="color: green">Ativo</td>
          <td><span class="glyphicon glyphicon-edit" aria-hidden="true" title="editar"></span> <span class="glyphicon glyphicon-trash" aria-hidden="true" title="excluir"></span></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>132</td>
          <td>OPPA ALIMENTOS LTDA.</td>
          <td>49.925.225/0001-48</td>
          <td>(15)3211-1234</td>
          <td style="color: green">Ativo</td>
          <td><span class="glyphicon glyphicon-edit" aria-hidden="true" title="editar"></span> <span class="glyphicon glyphicon-trash" aria-hidden="true" title="excluir"></span></td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>556</td>
          <td>CEREALISTA SÃO JOÃO LTDA</td>
          <td>23.152.0001-95</td>
          <td>(14)3244-0987</td>
          <td style="color: red">Inativo</td>
          <td><span class="glyphicon glyphicon-edit" aria-hidden="true" title="editar"></span> <span class="glyphicon glyphicon-trash" aria-hidden="true" title="excluir"></span></td>
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