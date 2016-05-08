<?php include "header.php" ?>
<?php include "sidebar.php" ?>

      <div class="col-sm-10">
        <div class="conteudo">
          <h1>Editar fornecedor "Bebidas Wilson Ltda."</h1><br>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputEmail2">Razão social</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="70" value="Bebidas Wilson Ltda.">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">CNPJ<span style="color: red">*</span></label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="25" required value="22.156.465/00001-23">
            </div>
          </form> <br>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Nome fantasia</label><br>
              <input type="text" class="form-control" id="exampleInputName2" placeholder="" size="70" value="Bebidas Wilson">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Insc. estadual / RG</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="25" value="45.789.132-2">
            </div>
          
          </form>
          <br>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Logradouro</label><br>
              <input type="text" class="form-control" id="exampleInputName2" placeholder="" size="55" value="Rua Gentil da Silva">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Número</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="10" value="666">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Complemento</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="25">
            </div>
          
          </form>
          <br>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Bairro</label><br>
              <input type="text" class="form-control" id="exampleInputName2" placeholder="" size="30" value="Vila São Caetano">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Cidade</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="35" value="Taguaí">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Estado</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="5" value="SP">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">CEP</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="00.000-000" size="15" value="18890-000">
            </div>
          </form><br>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Telefone</label><br>
              <input type="text" class="form-control" id="exampleInputName2" placeholder="(00) 0000-0000" size="25">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Celular</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="(00) 0000-0000" size="25" value="(15)3211-1234">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Nome do contato</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="40" value="Wilson">
            </div>
          
          </form><br>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Email<span style="color: red">*</span></label><br>
              <input type="email" class="form-control" id="exampleInputName2" placeholder="alguem@exemplo.com.br" size="35" value="contato@bebidaswilson.com.br">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Site</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="www.exemplo.com.br" size="40" value="www.bebidaswilson.com.br">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Status</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="dd/mm/aaaa" size="15" value="Ativo">
            </div>
          </form><br>

          <div class="row">
            <div class="col-sm-8">
              <label for="">Observações:</label>
              <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea> <br>
            </div>
          </div>

          <button type="button" class="btn btn-success">Salvar</button>
          <button type="button" class="btn btn-default">Cancelar</button>

          <br><br>
        </div>
      </div>
    </div>

<?php include "footer.php" ?>