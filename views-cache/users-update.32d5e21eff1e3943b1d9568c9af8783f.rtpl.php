<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Lista de Usuários
     </h1>
 </section>

 <!-- Main content -->
 <section class="content">

   <div class="row">
     <div class="col-md-12">
       <div class="box box-primary">
          <div class="box-header with-border">
             <h3 class="box-title">Editar Usuário</h3>
         </div>
         <!-- /.box-header -->
         <!-- form start -->
         <form role="form" action="/AdminPainel/users/<?php echo htmlspecialchars( $user["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
             <div class="box-body">
                <div class="form-group">
                   <label for="desperson">Nome</label>
                   <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
               </div>
              <div class="form-group">
                   <label for="destypedoc">Tipo Documento</label>               
                   <select name="destypedoc" id="destypedoc" >
                  <option>Selecione...</option>
                     <option id="rg" value="rg" <?php if( $user["destypedoc"] == rg ){ ?>selected<?php } ?>>RG</option>
                     <option value="cpf" <?php if( $user["destypedoc"] == rg ){ ?>selected<?php } ?>>CPF</option>
                     <option value="passaporte" <?php if( $user["destypedoc"] == rg ){ ?>selected<?php } ?>>Passaporte</option>                
                 <!--<option>Selecione...</option>
                 <option id="rg" value="rg">RG</option>
                 <option value="cpf">CPF</option>
                 <option value="passaporte">Passaporte</option>-->
             </select> 
         </div>
         <div class="form-group">
           <label for="nrdocument">Número Documento</label>
           <input type="number" class="form-control" id="nrdocument" name="nrdocument" placeholder="Digite o Nº do Doumento" value="<?php echo htmlspecialchars( $user["nrdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
       </div>
       <div class="form-group" id="hidden_div" style="display: none;">
           <label for="nrdocument">Orgão Emissor</label>
           <input type="text" name="nrdocument" id="nrdocument" placeholder="" value="<?php echo htmlspecialchars( $user["desemitter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
       </div>
       <div class="form-group">
        <label for="deslogin">Login</label>
        <input type="text" class="form-control" id="deslogin" name="deslogin" placeholder="Digite o login"  value="<?php echo htmlspecialchars( $user["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    </div>
    <div class="form-group">
        <label for="nrphone">Telefone</label>
        <input type="tel" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone"  value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    </div>
    <div class="form-group">
        <label for="desemail">E-mail</label>
        <input type="email" class="form-control" id="desemail" name="desemail" placeholder="Digite o e-mail" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    </div>
    <div class="form-group">
        <label for="inadmin">Perfil</label></br>
        <select name="inadmin" id="inadmin">
          <option style="display: none" value="0">Master</option>
          <option value="1" <?php if( $user["inadmin"] == 1 ){ ?>selected<?php } ?>>Administrador</option>
          <option value="2" <?php if( $user["inadmin"] == 2 ){ ?>selected<?php } ?>>Ouvidor</option>
          <option value="3" <?php if( $user["inadmin"] == 3 ){ ?>selected<?php } ?>>Cidadão</option>
          <option value="4" <?php if( $user["inadmin"] == 4 ){ ?>selected<?php } ?>>Consulta</option>
      </select>          
  </div>
</div>
<!-- /.box-body -->
<div class="box-footer">
   <button type="submit" class="btn btn-primary">Salvar</button>
</div>
</form>
</div>
</div>
</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
   window.onload=function(){
      document.getElementById('destypedoc').addEventListener('change', function () {
        var style = this.value == 'rg' ? 'block' : 'none';
        document.getElementById('hidden_div').style.display = style;
    });
  }
</script>