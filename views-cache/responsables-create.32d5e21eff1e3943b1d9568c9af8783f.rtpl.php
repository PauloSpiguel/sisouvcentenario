<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>Lista de Responsáveis</h1>
  <ol class="breadcrumb">
   <li>
    <a href="/AdminPainel"><i class="fa fa-dashboard"></i>Home</a></li>
    <li>
     <a href="/AdminPainel/responsables">Responsáveis</a></li><li class="active">
      <a href="/AdminPainel/responsables/create">Cadastrar</a>
    </li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Novo Responsável</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
         <!-- <form role="form" action="/AdminPainel/responsables/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="desperson">Nome</label>
              <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome" onkeyup="corrigirValor(this)"></input>
            </div>
            <div class="form-group">
             <label for="destypedoc">Tipo do Documento</label></br>
             <select id="destypedoc" name="destypedoc" style="height: 36px; width: 100%">
               <option>Selecione...</option>
               <option id="RG" value="RG">RG</option>
               <option value="CPF">CPF</option>
               <option value="Passaporte">Passaporte</option>
             </select>
           </div> 
           <div class="form-select">
            <div class="form-group" style="float: right; width: 100%">
              <label for="nrdocument">Número do Documento</label>
              <input class="form-control" id="nrdocument" name="nrdocument" placeholder="Digite o Nº do Doumento" type="number"></input>
            </div>
            <div class="form-group divEmitter" id="hidden_div">
              <label for="desemitter">Orgão Emissor</label>
              <input type="text" class="form-control" id="desemitter" name="desemitter" placeholder="Digite o Orgão Emissor" onkeyup="maiuscula(this)"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="nrphone">Telefone</label>
            <input class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone" type="tel"></input>
          </div>
          <div class="form-group">
            <label for="desemail">E-mail</label>
            <input class="form-control" style="text-transform: lowercase;" id="desemail" name="desemail" placeholder="Digite o e-mail" type="email"></input>
          </div>-->
          <div style="display: inline;">
            <div class="form-group">
              <select name="idPersons">
                <?php $counter1=-1;  if( isset($person) && ( is_array($person) || $person instanceof Traversable ) && sizeof($person) ) foreach( $person as $key1 => $value1 ){ $counter1++; ?>
                <option value="<?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                <?php } ?>
              </select>   
            </div>        
            <div class="form-group">
              <label for="desfunction">Função</label></br>
              <input type="text" name="desfunction" id="desfunction" style="height: 36px">
            </div>
          </div>  
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-success" type="submit">Cadastrar</button>
        </div>  
      </form>                 
    </div>
  </div>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper-->
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
</script>