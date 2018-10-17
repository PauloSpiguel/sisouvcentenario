<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Lista de Responsáveis
    </h1>
    <ol class="breadcrumb">
      <li><a href="/AdminPainel"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="/AdminPainel/responsable">Responáveis</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
     <div class="col-md-12">
      <div class="box box-primary">

        <div class="box-header">
          <a href="/AdminPainel/responsable/create" class="btn btn-success">Cadastrar Responsável</a>
        </div>

        <div class="box-body no-padding">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Celular</th>
                <th>Função</th>
              </tr>
            </thead>
            <tbody>
              <?php $counter1=-1;  if( isset($responsable) && ( is_array($responsable) || $responsable instanceof Traversable ) && sizeof($responsable) ) foreach( $responsable as $key1 => $value1 ){ $counter1++; ?>
              <tr>
                <td><?php echo htmlspecialchars( $value1["idresponsable"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>           
                <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["desfunction"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                  <td>
                   <a href="/AdminPainel/responsable/<?php echo htmlspecialchars( $value1["idresponsable"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onclick="return confirm('Deseja realmente alter a senha este registro?')" class="btn btn-warning btn-xs disabled"><i class="fa fa-lock"></i></a>
                   <a href="/AdminPainel/responsable/<?php echo htmlspecialchars( $value1["idresponsable"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                   <a href="/AdminPainel/responsable/<?php echo htmlspecialchars( $value1["idresponsable"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>                   
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