<?php include "header.php" ?>
<?php include "sidebar.php" ?>

      <div class="col-sm-10">
        <div class="row">

          <div class="row">
            <div class="col-sm-12">
              <h1>Editar conta bancária</h1>
              
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4"><label for="">Banco<span style="color: red">*</span></label><select name="" id="" class="form-control"><option value="">033 - Santander</option></select></div>
            <div class="col-sm-3"><label for="">Agência/DV<span style="color: red">*</span></label>
            <select name="" id="" class="form-control">
              <option value="">	1404 - x</option>
            </select>
            </div>
            <div class="col-sm-3"><label for="">Conta<span style="color: red">*</span></label><input class="form-control" type="text" value="156422"></div>
            <div class="col-sm-1"><label for="">DV conta</label><input class="form-control" type="text" value="2"></div>
          </div><br>
          <div class="row">
            <div class="col-sm-4"><label for="">Saldo</label><input class="form-control" type="text" placeholder="R$0,00" value="R$3414,00"></div>
            <div class="col-sm-3"><label for="">Tipo da conta: </label><br>
            <select name="" id="" class="form-control">
              <option value="">Poupança</option>
            </select>
            </div>
          </div>
      </div><br>

      <button type="button" class="btn btn-success">Salvar</button>
      <button type="button" class="btn btn-default">Cancelar</button>
    </div>
       
<?php include "footer.php" ?>