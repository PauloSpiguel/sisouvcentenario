<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Lista de Usuários
    </h1>
    <ol class="breadcrumb">
      <li><a href="/AdminPainel"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="/AdminPainel/users">Usuários</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
     <div class="col-md-12">
      <div class="box box-primary">

        <div class="box-header">
          <a href="/AdminPainel/users/create" class="btn btn-success">Cadastrar Usuário</a>
        </div>

        <div class="box-body no-padding">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Celular</th>
                <th>Login</th>
                <th style="width: 50px">Perfil</th>
                <th style="width: 160px">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>
              <tr>
                <td><?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>           
                <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td/>
                  <td>
                    <?php if( $value1["inadmin"] == 0 ){ ?>
                    Master
                    <?php }else{ ?>
                    <?php if( $value1["inadmin"] == 1 ){ ?>
                    Administrador
                    <?php }else{ ?>
                    <?php if( $value1["inadmin"] == 2 ){ ?>
                    Ouvidor
                    <?php }else{ ?>
                    <?php if( $value1["inadmin"] == 3 ){ ?>
                    Cidadão
                    <?php }else{ ?>
                    Consulta
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>
                  </td>
                  <td>
                   <a href="/AdminPainel/users/<?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onclick="return confirm('Deseja realmente alter a senha este registro?')" class="btn btn-warning btn-xs disabled"><i class="fa fa-lock"></i></a>
                   <a href="/AdminPainel/users/<?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                   <a href="/AdminPainel/users/<?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>                   
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