<?php include "header.php" ?>
<?php include "sidebar.php" ?>

      <div class="col-sm-10">
        <div class="row">

          <div class="row">
            <div class="col-sm-12">
              <h1>Contas a pagar</h1><br>

              <form class="form-inline">
                <div class="form-group">
                  Entre <select class="form-control">
                    <option>01/03/2016 &nbsp;</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select> &nbsp;a&nbsp;
                  <select class="form-control">
                    <option>31/03/2016 &nbsp;</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>

                  &nbsp;&nbsp;&nbsp;Nível: <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>

                  &nbsp;&nbsp;&nbsp;Status: <select class="form-control">
                    <option>Não pago</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                &nbsp;&nbsp;<button type="submit" class="btn btn-default">Filtrar</button>&nbsp;&nbsp;&nbsp;&nbsp;

                <input type="" class="form-control" id="" placeholder="Pesquisar por código"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
  
              </form>

              <a href="/pellicanos/html/relatorio-contas-pagar.pdf" target="_blank"><button class="btn btn-default" style="float: right" ><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Gerar relatório</button></a>

              <br>

              <a href="/pellicanos/html/cadastro-conta-pagar.php"><button type="button" class="btn btn-primary"> Criar novo</button></a>
              <button type="button" class="btn btn-default"> Agendar</button>
              <button type="button" class="btn btn-default"> Simular</button>
              <button type="button" class="btn btn-default"> Pagar</button>
              <button type="button" class="btn btn-default"> Criar alerta</button>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-sm-12">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Código</th>
                  <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Descrição</th>
                  <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Valor</th>
                  <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Nível</th>
                  <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Vencimento</th>
                  <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Status</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tr>
                <td>001</td>
                <td>Água</td>
                <td>R$53,00</td>
                <td>1</td>
                <td>31/03/2016</td>
                <td style="color: red">Não pago</td>
                <td>
                  <a href="/pellicanos/html/editar-conta-pagar.php"><span class="glyphicon glyphicon-edit" aria-hidden="true" title="editar"></span></a>
                  <span class="glyphicon glyphicon-book" aria-hidden="true" title="agendar"></span> 
                  <span class="glyphicon glyphicon-usd" aria-hidden="true" title="pagar"></span> 
                  <span class="glyphicon glyphicon-bell" aria-hidden="true" title="criar alerta"></span> 
                  <span class="glyphicon glyphicon-trash" aria-hidden="true" title="excluir"></span>
                </td>
              </tr>
              <tr>
                <td>002</td>
                <td>Água</td>
                <td>R$53,00</td>
                <td>1</td>
                <td>31/03/2016</td>
                <td style="color: red">Não pago</td>
                <td><span class="glyphicon glyphicon-edit" aria-hidden="true" title="editar"></span> <span class="glyphicon glyphicon-book" aria-hidden="true" title="agendar"></span> <span class="glyphicon glyphicon-usd" aria-hidden="true" title="pagar"></span> <span class="glyphicon glyphicon-bell" aria-hidden="true" title="criar alerta"></span> <span class="glyphicon glyphicon-trash" aria-hidden="true" title="excluir"></span></td>
              </tr>
              <tr>
                <td>003</td>
                <td>Água</td>
                <td>R$53,00</td>
                <td>1</td>
                <td>31/03/2016</td>
                <td style="color: red">Não pago</td>
                <td><span class="glyphicon glyphicon-edit" aria-hidden="true" title="editar"></span> <span class="glyphicon glyphicon-book" aria-hidden="true" title="agendar"></span> <span class="glyphicon glyphicon-usd" aria-hidden="true" title="pagar"></span> <span class="glyphicon glyphicon-bell" aria-hidden="true" title="criar alerta"></span> <span class="glyphicon glyphicon-trash" aria-hidden="true" title="excluir"></span></td>
              </tr>
              <tr>
                <td>004</td>
                <td>Água</td>
                <td>R$53,00</td>
                <td>1</td>
                <td>31/03/2016</td>
                <td style="color: red">Não pago</td>
                <td><span class="glyphicon glyphicon-edit" aria-hidden="true" title="editar"></span> <span class="glyphicon glyphicon-book" aria-hidden="true" title="agendar"></span> <span class="glyphicon glyphicon-usd" aria-hidden="true" title="pagar"></span> <span class="glyphicon glyphicon-bell" aria-hidden="true" title="criar alerta"></span> <span class="glyphicon glyphicon-trash" aria-hidden="true" title="excluir"></span></td>
              </tr>
              <tr>
                <td>005</td>
                <td>Água</td>
                <td>R$53,00</td>
                <td>1</td>
                <td>31/03/2016</td>
                <td style="color: blue">Agendado</td>
                <td><span class="glyphicon glyphicon-edit" aria-hidden="true" title="editar"></span>  <span class="glyphicon glyphicon-trash" aria-hidden="true" title="excluir"></span></td>
              </tr>
              <tr>
                <td>123</td>
                <td>100 un. Cola Cola lata </td>
                <td>R$84,90</td>
                <td>3</td>
                <td>21/03/2016</td>
                <td style="color: green">Pago</td>
                <td><span class="glyphicon glyphicon-edit" aria-hidden="true" title="editar"></span> <span class="glyphicon glyphicon-trash" aria-hidden="true" title="excluir"></span></td>
              </tr>
              <tr>
                <td>124</td>
                <td>100 un. Cola Cola lata </td>
                <td>R$84,90</td>
                <td>3</td>
                <td>21/03/2016</td>
                <td style="color: green">Pago</td>
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