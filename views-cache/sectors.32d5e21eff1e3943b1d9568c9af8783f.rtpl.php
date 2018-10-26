<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Lista de Setores
    </h1>
    <ol class="breadcrumb">
      <li><a href="/AdminPainel"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="/AdminPainel/sectors">Setores</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
     <div class="col-md-12">
      <div class="box box-primary">

        <div class="box-header">
          <a href="/AdminPainel/sectors/create" class="btn btn-success">Cadastrar Setor</a>
        </div>

        <div class="box-body no-padding">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nome do Setor</th>
                <th>Secretaria</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Responsável</th>
                <th style="width: 140px">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php $counter1=-1;  if( isset($sectors) && ( is_array($sectors) || $sectors instanceof Traversable ) && sizeof($sectors) ) foreach( $sectors as $key1 => $value1 ){ $counter1++; ?>

              <tr>
                <td><?php echo htmlspecialchars( $value1["idsector"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["desdescrition"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["dessecretary"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["idresponsable"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td>
                  <a href="/AdminPainel/sectors/<?php echo htmlspecialchars( $value1["idsector"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                  <a href="/AdminPainel/sectors/<?php echo htmlspecialchars( $value1["idsector"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                </td>
              </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->