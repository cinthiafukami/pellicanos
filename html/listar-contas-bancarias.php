<?php include "header.php" ?>
<?php include "sidebar.php" ?>
  
<div class="col-sm-10">
	<div class="row">

	    <div class="row">
	      <div class="col-sm-12">
	        <h1>Contas bancárias</h1><br>

	        <!-- Pop up excluir -->
	        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	          <div class="modal-dialog" role="document">
	            <div class="modal-content">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myModalLabel">Excluir conta de número "7869-0"</h4>
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

	        <a href="/pellicanos/html/cadastro-conta-bancaria.php"><button type="button" class="btn btn-success"> Criar novo</button></a>
	        <a href="/pellicanos/html/editar-conta-bancaria.php"><button type="button" class="btn btn-primary"> Editar</button></a>
	        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"> Excluir</button><br><br>
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-sm-12">
	      <table class="table table-striped table-hover">
	        <thead>
	          <tr>
	            <th><input type="checkbox"></th>
	            <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Banco</th>
	            <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Agência/DV</th>
	            <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span>Conta bancária/DV conta</th>
	            <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Saldo</th>
	            <th><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Tipo de conta</th>
	          </tr>
	        </thead>
	        <tr>
	        	<td><input type="checkbox"></td>
	        	<td>341</td>
	        	<td>4505 - 5</td>
	        	<td>7869 - 0</td>
	        	<td>R$2853,00</td>
	        	<td>Conta corrente</td>
	        </tr>
	        <tr>
	        	<td><input type="checkbox"></td>
	        	<td>033</td>
	        	<td>1404 - x</td>
	        	<td>156422 - 2</td>
	        	<td>R$3414,00</td>
	        	<td>Poupança</td>
	        </tr>
	        <tr>
	        	<td><input type="checkbox"></td>
	        	<td>341</td>
	        	<td>4505 - 5</td>
	        	<td>4852 - 2</td>
	        	<td>R$10,00</td>
	        	<td>Conta corrente</td>
	        </tr>
	      </table>

	      <div style="float: right">
	        <button type="submit" class="btn btn-default" \><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></button><button type="submit" class="btn btn-default" \><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
	      </div>
	      </div>
	    </div>
	</div>

</div>

<?php include "footer.php" ?>