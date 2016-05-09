<?php include "header.php" ?>
<?php include "sidebar.php" ?>

      <div class="col-sm-10">
        <div class="conteudo">
          <h1>Nova conta a pagar</h1><br>
          
          <div class="row">
            <h4><b>Dados da conta</b></h4><hr>
            <div class="col-sm-2">
              <label>Data de emissão</label>
              <input type="text" class="form-control" placeholder="dd/mm/aaaa">
            </div>
            <div class="col-sm-2">
              <label>CNPJ do Fornecedor<span style="color: red">*</span></label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-6">
              <label>Descrição</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-2">
              <label>Categoria</label>
              <select name="" id="" class="form-control">
              	<option value="">Conta fixa </option>
              </select>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-4">
              <label>Tipo de documento<span style="color: red">*</span></label><br>
              <select name="" id="" class="form-control">
                <option value="carteira">Carteira</option>
              </select>
            </div>
            <div class="col-sm-4">
              <label>Forma de pagamento</label>
              <select name="" id="" class="form-control">
              	<option value="">Boleto bancário</option>
              </select>
            </div>
            <div class="col-sm-4">
              <label>Número do Doc</label>
              <input type="text" class="form-control">
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-4">
              <label>Centro de custos<span style="color: red">*</span></label><br>
              <select name="" id="" class="form-control">
                <option value="cozinha">Cozinha</option>
              </select>
            </div>
            <div class="col-sm-4">
              <label>Vencimento</label>
              <input type="text" class="form-control" placeholder="dd/mm/aaaa">
            </div>
            <div class="col-sm-4">
              <label>Valor da conta</label>
              <input type="text" class="form-control" placeholder="R$0,00">
            </div>
          </div><br><br>
          <div class="row">
            <h4><b>Prioridade</b></h4><hr>
            <div class="col-sm-2">
              <label for=""><input type="radio"> Nível 1
              </label>
            </div>
            <div class="col-sm-2">
              <label for=""><input type="radio"> Nível 2
              </label>
            </div>
            <div class="col-sm-2">
              <label for=""><input type="radio"> Nível 3
              </label>
            </div>
            <div class="col-sm-2">
              <label for=""><input type="radio"> Nível 4
              </label>
            </div>
            <div class="col-sm-2">
              <label for=""><input type="radio"> Nível 5
              </label>
            </div>
          </div><br><br>
          <div class="row">
            <h4><b>Agendamento</b></h4><hr>
            <div class="col-sm-4">
            <br>
              <label for=""><input type="checkbox"> Agendar Pagamento</label>
            </div>
            <div class="col-sm-4">
              <label for="">Agendamento para</label>
              <select name="" id="" class="form-control" disabled="">
                <option value="">15/11/2015</option>
              </select>
            </div>
          </div><br>
          <div class="row">
            <h4><b>Pagamento</b></h4><hr>
            <div class="col-sm-2">
              <label for="">Data de pagto.</label>
              <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-2">
              <label for="">Multa</label>
              <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-2">
              <label for="">Juros</label>
              <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-3">
              <label for="">Agência e código do cedente</label>
              <input type="text" name="" id="" class="form-control">
            </div>
            
          </div><br>

          <div class="row">
          	<div class="col-sm-2">
              <label for="">Desconto</label>
              <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-3">
              <label for="">Data para aquisição do desconto</label>
              <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-2">
              <label for="">Nosso núm. da conta</label>
              <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-2">
              <label for="">Valor total pago</label>
              <input type="text" name="" id="" class="form-control">
            </div>
          </div>
        </div><br><br>

        <button type="button" class="btn btn-success">Salvar</button>
        <button type="button" class="btn btn-default">Cancelar</button>
      </div>
    </div><br><br>
  
<?php include "footer.php" ?>