<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Lista de Pessoas
      </h1>
   </section>

   <!-- Main content -->
   <section class="content">

      <div class="row">
         <div class="col-md-12">
            <div class="box box-primary">
               <div class="box-header with-border">
                  <h3 class="box-title">Editar Pessoa</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="/AdminPainel/persons/<?php echo htmlspecialchars( $person["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
                  <div class="box-body">
                     <div class="form-group">
                        <label for="desperson">Nome</label>
                        <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome"
                           onkeyup="corrigirValor(this)" value="<?php echo htmlspecialchars( $person["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                     </div>
                     <div class="form-group">
                        <label for="destypedoc">Tipo do Documento</label></br>
                        <select id="destypedoc" name="destypedoc" style="height: 36px; width: 100%">
                           <option id="RG" value="RG" <?php if( $person["destypedoc"] == 'RG' ){ ?>selected<?php } ?>>RG</option>
                           <option value="CPF" <?php if( $person["destypedoc"] == 'CPF' ){ ?>selected<?php } ?>>CPF</option>
                           <option value="Passaporte" <?php if( $person["destypedoc"] == 'Passaporte' ){ ?>selected<?php } ?>>Passaporte</option>
                        </select>
                     </div>
                     <div class="form-select">
                        <div class="form-group" style="float: right; width: 100%">
                           <label for="nrdocument">Número do Documento</label>
                           <input class="form-control" id="nrdocument" name="nrdocument" placeholder="Digite o Nº do Doumento"
                              type="number" value="<?php echo htmlspecialchars( $person["nrdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        <div class="form-group divEmitter" id="hidden_div">
                           <label for="desemitter">Orgão Emissor</label>
                           <input type="text" class="form-control" id="desemitter" name="desemitter" placeholder="Digite o Orgão Emissor"
                              onkeyup="maiuscula(this)" value="<?php echo htmlspecialchars( $person["desemitter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="nrphone">Telefone</label>
                        <input class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone" type="tel" value="<?php echo htmlspecialchars( $person["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                     </div>
                     <div class="form-group">
                        <label for="desemail">E-mail</label>
                        <input class="form-control" style="text-transform: lowercase;" id="desemail" name="desemail"
                           placeholder="Digite o e-mail" type="email" value="<?php echo htmlspecialchars( $person["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                     </div>
                     <fieldset class="GRUPO">
                        <legend class="GroupTitle">Endereço:</legend>
                        <div class="form-select">
                           <div class="form-group" style="float: right; width: 100%">
                              <label for="despublicplace">Logradouro</label>
                              <input style="width: 99%" class="form-control" id="despublicplace" name="despublicplace"
                                 placeholder="Digite seu Endereço" type="text" onkeyup="corrigirValor(this)" value="<?php echo htmlspecialchars( $person["despublicplace"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                           </div>
                           <div class="form-group">
                              <label for="nrnumber">Número</label>
                              <input type="number" class="form-control" id="nrnumber" name="nrnumber" placeholder="Num" value="<?php echo htmlspecialchars( $person["nrnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                           </div>
                        </div>
                        <div class="form-select">
                           <div class="form-group" style="float: right; width: 40%; margin-right: 10px;">
                              <label for="desregion">Bairro</label>
                              <input style="width: 100%" class="form-control" id="desregion" name="desregion"
                                 placeholder="Digite seu Bairro" type="text" onkeyup="corrigirValor(this)" value="<?php echo htmlspecialchars( $person["desregion"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                           </div>
                           <div style="float: left; margin-right: 10px; width: 50%" class="">
                              <label for="descity">Cidade</label>
                              <input type="text" class="form-control" id="descity" name="descity" placeholder="Disite sua Cidade"
                                 onkeyup="corrigirValor(this)" value="<?php echo htmlspecialchars( $person["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                           </div>
                           <div style="float: right; width: 10%; " class="">
                              <label for="desstate">UF</label><br>
                              <select style="height: 35px; width: 100%" name="desstate" id="desstate">
                                 <option value="Paraná" <?php if( $person["desstate"] == 'Paraná' ){ ?>selected<?php } ?>>PR</option>
                                 <option value="Outro" <?php if( $person["desstate"] == 'Outro' ){ ?>selected<?php } ?>>Outro</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-select">
                           <div style="float: left; margin-right: 5px; width: 35%" class="form-group">
                              <label for="country" class="control-label">Pais:</label>
                              <input name="descountry" type="text" class="form-control" id="country" placeholder="Digite o Pais"
                                 onkeyup="corrigirValor(this)" value="<?php echo htmlspecialchars( $person["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                           </div>
                           <div style="float: right; width: 65%" class="form-group">
                              <label for="complement" class="control-label">Complemento:</label>
                              <input name="descomplement" type="text" class="form-control" id="complement" placeholder="Digite um Complemento"
                                 onkeyup="corrigirValor(this)" value="<?php echo htmlspecialchars( $person["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                           </div>
                        </div>
                     </fieldset>
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
   window.onload = function () {
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
      return String(string).toLowerCase().replace(/([^A-zÀ-ú]?)([A-zÀ-ú]+)/g, function (match, separator, word) {
         if (ignorar.indexOf(word) != -1) return separator + word;
         return separator + word.charAt(0).toUpperCase() + word.slice(1);
      });
   }
   function corrigirValor(el) {
      el.value = caixaAlta(el.value);
   }
   // INICIO FUNÇÃO DE MASCARA MAIUSCULA
   function maiuscula(z) {
      v = z.value.toUpperCase();
      z.value = v;
   }
//FIM DA FUNÇÃO MASCARA MAIUSCULA
</script>