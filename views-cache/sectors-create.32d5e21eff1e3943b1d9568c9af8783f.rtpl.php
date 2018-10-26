<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Lista de Setores
    </h1>
    <ol class="breadcrumb">
      <li><a href="/AdminPeinel"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="/AdminPainel/sectors">Setores</a></li>
      <li class="active"><a href="/AdminPainel/sectors/create">Cadastrar</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
     <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Novo Setor</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/AdminPainel/sectors/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="dessector">Descrição do Setor</label>
              <input type="text" class="form-control" id="dessector" name="dessector" placeholder="Digite a Descrição do Setor">
            </div>
            <div class="form-group">
              <label for="dessecretary">Secretaria</label>
              <input type="text" class="form-control" id="dessecretary" name="dessecretary" placeholder="Digite a Descrição da Secretaria">
            </div> 
            <fieldset class="GRUPO">
              <legend class="GroupTitle">Endereço:</legend>
              <div class="form-select">
                <div class="form-group" style="float: right; width: 100%">
                  <label for="despublicplace">Logradouro</label>
                  <input style="width: 99%" class="form-control" id="despublicplace" name="despublicplace" placeholder="Digite o Endereço" type="text" onkeyup="corrigirValor(this)">
                </div>
                <div class="form-group">
                  <label for="nrnumber">Número</label>
                  <input type="number" class="form-control" id="nrnumber" name="nrnumber" placeholder="Num"></input>
                </div>
              </div>
              <div class="form-select">
                <div class="form-group" style="float: right; width: 40%; margin-right: 5px;">
                  <label for="desregion">Bairro</label>
                  <input style="width: 100%" class="form-control" id="desregion" name="desregion" placeholder="Digite o Bairro" type="text" onkeyup="corrigirValor(this)">
                </div>
                <div style="float: right; width: 65%" class="form-group">
                  <label for="complement" class="control-label">Complemento:</label>
                  <input name="descomplement" type="text" class="form-control" id="complement" placeholder="Digite um Complemento">
                </div>
              </div>
              <div class="form-select">
                <div style="float: left; margin-right: 5px; width: 35%" class="form-group">
                  <label for="nrphone">Telefone</label>
                  <input type="text" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o Número de Telefone da Secretaria">
                </div>
                <div style="float: right; width: 65%" class="form-group">
                  <label for="desemail">Email</label>
                  <input style="text-transform: lowercase;" type="text" class="form-control" id="desemail" name="desemail" placeholder="Digite o Email da Secretaria">
                </div>
              </div>
            </fieldset>
            <div class="" style="display: inline;">
              <div class="form-group" style="float: left; margin-right: 5px; width: 90%">
                <label for="desresponsable">Responsável</label>
                <input type="text" class="form-control" id="desresponsable" name="desresponsable" placeholder="Digite o Nome do Responsável pela Secretaria" onkeyup="corrigirValor(this)">
              </div>
              <div>
                <a href="" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
              </div>
            </div>         
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->