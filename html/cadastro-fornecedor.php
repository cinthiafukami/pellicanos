<?php include "header.php" ?>
<?php include "sidebar.php" ?>

      <div class="col-sm-10">
        <div class="conteudo">
          <h1>Novo fornecedor</h1><br>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputEmail2">Razão social<span style="color: red">*</span></label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="70">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">CNPJ<span style="color: red">*</span></label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="25" required>
            </div>
          </form> <br>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Nome fantasia</label><br>
              <input type="text" class="form-control" id="exampleInputName2" placeholder="" size="70">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Insc. estadual / RG</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="25">
            </div>
          </form>
          <br>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Logradouro<span style="color: red">*</span></label><br>
              <input type="text" class="form-control" id="exampleInputName2" placeholder="" size="55">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Número<span style="color: red">*</span></label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="10">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Complemento</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="25">
            </div>
          </form>
          <br>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Bairro<span style="color: red">*</span></label><br>
              <input type="text" class="form-control" id="exampleInputName2" placeholder="" size="30">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Cidade<span style="color: red">*</span></label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="35">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Estado<span style="color: red">*</span></label><br>
              <select name="" id="" class="form-control">
                <option value="SP">SP&nbsp;&nbsp;&nbsp;&nbsp;</option>
                <option value="">RJ</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">CEP<span style="color: red">*</span></label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="00.000-000" size="15">
            </div>
          </form><br>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Telefone</label><br>
              <input type="text" class="form-control" id="exampleInputName2" placeholder="(00) 0000-0000" size="25">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Celular</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="(00) 0000-0000" size="25">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Nome do contato</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="" size="40">
            </div>
          
          </form><br>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Email<span style="color: red">*</span></label><br>
              <input type="email" class="form-control" id="exampleInputName2" placeholder="alguem@exemplo.com.br" size="35">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Site</label><br>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="www.exemplo.com.br" size="40">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Status</label><br>
              <select name="" id="" class="form-control">
                <option value="">Ativo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                <option value="">Inativo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
              </select>
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