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
                   <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onkeyup="corrigirValor(this)">
               </div>
               <div class="form-group">
                   <label for="destypedoc">Tipo Documento</label></br>
                   <select name="destypedoc" id="destypedoc" style="height: 36px; width: 100%">
                      <option>Selecione...</option>
                      <option id="RG" value="RG" <?php if( $user["destypedoc"] == 'RG' ){ ?>selected<?php } ?>>RG</option>
                      <option value="CPF" <?php if( $user["destypedoc"] == 'CPF' ){ ?>selected<?php } ?>>CPF</option>
                      <option value="Passaporte" <?php if( $user["destypedoc"] == 'Passaporte' ){ ?>selected<?php } ?>>Passaporte</option>
                  </select>
              </div>
              <div class="form-select">
                <div class="form-group" style="float: right; width: 100%;">
                   <label for="nrdocument">Número do Documento</label>
                   <input type="number" style="" class="form-control" id="nrdocument" name="nrdocument" placeholder="Digite o Nº do Doumento" value="<?php echo htmlspecialchars( $user["nrdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
               </div>
               <div class="form-group divEmitter" id="hidden_div">
                   <label for="desemitter">Orgão Emissor</label>
                   <input style="" type="text" class="form-control" name="desemitter" id="desemitter" placeholder="Digite o Orgão Emissor" value="<?php echo htmlspecialchars( $user["desemitter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onkeyup="maiuscula(this)">
               </div>
           </div>
           <div class="form-group">
              <label for="deslogin">Login</label>
              <input type="text" class="form-control" id="deslogin" name="deslogin" placeholder="Digite o login" value="<?php echo htmlspecialchars( $user["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onkeyup="maiuscula(this)">
          </div>
          <div class="form-group">
              <label for="nrphone">Celular</label>
              <input type="tel" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone"  value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
          </div>
          <div class="form-group">
              <label for="desemail">E-mail</label>
              <input type="email" class="form-control" style="text-transform: lowercase;" id="desemail" name="desemail" placeholder="Digite o e-mail" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
          </div>
          <div class="form-group">
              <label for="inadmin">Perfil</label></br>
              <select name="inadmin" id="inadmin" style="height: 36px">
                <option style="display: none" value="0" <?php if( $user["inadmin"] == 0 ){ ?>selected<?php } ?>>Master</option>
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
<script type="text/javascript" DEFER="DEFER">
  // INICIO FUNÇÃO DE MOSTRA ORGÃO EMISSOR
  window.onload=function(){
    var campoRG = document.getElementById('destypedoc').value;
    var display = campoRG == 'RG' ? 'block' : 'none';
    document.getElementById('hidden_div').style.display = display;


    document.getElementById('destypedoc').addEventListener('change', function () {
      var style = this.value == 'RG' ? 'block' : 'none';
      document.getElementById('hidden_div').style.display = style;
    });
 }
  // INICIO FUNÇÃO DE MASCARA MAIUSCULA
  var ignorar = ["das", "dos", "e", "é", "do", "da", "de"];

  function caixaAlta(string) {
    return String(string).toLowerCase().replace(/([^A-zÀ-ú]?)([A-zÀ-ú]+)/g, function(match, separator, word) {
      if (ignorar.indexOf(word) != -1) return separator + word;
      return separator + word.charAt(0).toUpperCase() + word.slice(1);
    });
  }
  function corrigirValor(el) {
    el.value = caixaAlta(el.value);
  }
  // INICIO FUNÇÃO DE MASCARA MAIUSCULA
  function maiuscula(z){
    v = z.value.toUpperCase();
    z.value = v;
 }
//FIM DA FUNÇÃO MASCARA MAIUSCULA
</script>
