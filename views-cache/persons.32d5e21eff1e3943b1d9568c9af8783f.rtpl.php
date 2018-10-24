<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Lista de Pessoas
		</h1>
		<ol class="breadcrumb">
			<li><a href="/AdminPainel"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><a href="/AdminPainel/persons">Pessoas</a></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">

					<div class="box-header">
						<a href="/AdminPainel/persons/create" class="btn btn-success">Cadastrar Pessoa</a>
					</div>

					<div class="box-body no-padding">
						<table class="table table-striped">
							<thead>
								<tr>
									<th style="width: 10px">#</th>
									<th>Nome</th>
									<th>E-mail</th>
									<th>Telefone</th>
									<th>Endereço</th>
									<th>Bairro</th>
									<th>Cidade</th>
									<th style="width: 140px">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<?php $counter1=-1;  if( isset($persons) && ( is_array($persons) || $persons instanceof Traversable ) && sizeof($persons) ) foreach( $persons as $key1 => $value1 ){ $counter1++; ?>
								<tr>
									<td><?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
									<td><?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
									<td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
									<td><?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
									<td><?php echo htmlspecialchars( $value1["despublicplace"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, <?php echo htmlspecialchars( $value1["nrnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
									<td><?php echo htmlspecialchars( $value1["desregion"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
									<td><?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
									<td>
										<!--<button type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#exampleModal"
										 data-whatever="<?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whateverperson="<?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whatevertypedoc="<?php echo htmlspecialchars( $value1["destypedoc"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
										 data-whatevernrdocument="<?php echo htmlspecialchars( $value1["nrdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whateveremitter="<?php echo htmlspecialchars( $value1["desemitter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
										 data-whatevernrphone="<?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whateveremail="<?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whateverpublicplace="<?php echo htmlspecialchars( $value1["despublicplace"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
										 data-whatevernrnumber="<?php echo htmlspecialchars( $value1["nrnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whateverregion="<?php echo htmlspecialchars( $value1["desregion"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whatevercity="<?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
										 data-whateverstate="<?php echo htmlspecialchars( $value1["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whatevercountry="<?php echo htmlspecialchars( $value1["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whatevercomplement="<?php echo htmlspecialchars( $value1["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i
											 class="fa fa-info"></i></button>-->
										<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#exampleModal"
										 data-whatever="<?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whateverperson="<?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whatevertypedoc="<?php echo htmlspecialchars( $value1["destypedoc"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
										 data-whatevernrdocument="<?php echo htmlspecialchars( $value1["nrdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whateveremitter="<?php echo htmlspecialchars( $value1["desemitter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
										 data-whatevernrphone="<?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whateveremail="<?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whateverpublicplace="<?php echo htmlspecialchars( $value1["despublicplace"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
										 data-whatevernrnumber="<?php echo htmlspecialchars( $value1["nrnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whateverregion="<?php echo htmlspecialchars( $value1["desregion"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whatevercity="<?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
										 data-whateverstate="<?php echo htmlspecialchars( $value1["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whatevercountry="<?php echo htmlspecialchars( $value1["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whatevercomplement="<?php echo htmlspecialchars( $value1["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i
											 class="fa fa-edit"></i> Editar</button>
										<!--<button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal"
										 data-whatever="<?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whatevernome="<?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-whateverdetalhes="<?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Editar</button>-->
									<!--<a href="/AdminPainel/persons/<?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Editar</a>-->
										<a href="/AdminPainel/persons/<?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')"
										 class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
										</a>
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
<!-- Inicio Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Detalhes</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="/AdminPainel/persons/up">
					<div class="form-group">
						<label for="recipient-person" class="control-label">Nome:</label>
						<input name="desperson" type="text" class="form-control" id="recipient-person">
					</div>
					<div class="form-group">
						<label for="destypedoc">Tipo Documento</label></br>
						<select name="destypedoc" id="typedoc" style="height: 36px; width: 100%">
							<option value="RG">RG</option>
							<option value="CPF">CPF</option>
							<option value="Passaporte">Passaporte</option>
						</select>
					</div>
					<div class="form-select">
						<div class="form-group" style="float: right; width: 100%; margin-right: 0px;">
							<label for="nrdocument" class="control-label">Número Documento:</label>
							<input style="width: 100%" name="nrdocument" type="text" class="form-control" id="nrdocument">
						</div>
						<div class="form-group divEmitter" id="hidden_div">
							<label for="emitter" class="control-label">Orgão Emissor:</label>
							<input name="desemitter" type="text" class="form-control" id="emitter">
						</div>
					</div>
					<div class="form-group">
						<label for="nrphone" class="control-label">Telefone:</label>
						<input name="nrphone" type="text" class="form-control" id="nrphone">
					</div>
					<div class="form-group">
						<label for="email" class="control-label">Email:</label>
						<input name="desemail" type="email" class="form-control" id="email">
					</div>
					<fieldset class="GRUPO">
						<legend class="GroupTitle">Endereço:</legend>
						<div class="form-select">
							<div class="form-group" style="float: right; width: 100%; margin-right: 5px">
								<label for="publicplace" class="control-label">Logradouro:</label>
								<input style="width: 100%" name="despublicplace" type="text" class="form-control" id="publicplace">
							</div>
							<div class="form-group">
								<label for="nrnumber" class="control-label">Número:</label>
								<input name="nrnumber" type="text" class="form-control" id="nrnumber">
							</div>
						</div>
						<div class="form-select">
							<div class="form-group" style="float: right; width: 40%; margin-right: 5px;">
								<label for="region" class="control-label">Bairro:</label>
								<input style="width: 100%" name="desregion" type="text" class="form-control" id="region">
							</div>
							<div style="float: left; margin-right: 5px; width: 40%" class="">
								<label for="city" class="control-label">Cidade:</label>
								<input name="descity" type="text" class="form-control" id="city">
							</div>
							<div div style="float: right; width: 20%; " class="">
								<label for="state" class="control-label">Estado:</label>
								<select style="height: 35px; width: 100%" name="desstate" id="state">
									<option value="Null">Outro</option>
									<option value="Paraná">PR</option>
								</select>
							</div>
						</div>
						<div class="form-select">
							<div style="float: left; margin-right: 5px; width: 35%" class="form-group">
								<label for="country" class="control-label">Pais:</label>
								<input name="descountry" type="text" class="form-control" id="country">
							</div>
							<div style="float: right; width: 65%" class="form-group">
								<label for="complement" class="control-label">Complemento:</label>
								<input name="descomplement" type="text" class="form-control" id="complement">
							</div>
						</div>
					</fieldset>
					<input name="id" type="hidden" class="form-control" id="id-curso" value="">

					<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-danger">Alterar</button>
					<button type="button" class="btn btn-primary">Imprimir</button>

				</form>
			</div>

		</div>
	</div>
</div>
<!-- Fim Modal -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../res/admin/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	window.onload = function () {
		var campoRG = document.getElementById('typedoc').value;
		var display = campoRG == 'RG' ? 'block' : 'none';
		document.getElementById('hidden_div').style.display = display;

		document.getElementById('typedoc').addEventListener('change', function () {
			var style = this.value == 'RG' ? 'block' : 'none';
			document.getElementById('hidden_div').style.display = style;
		});
	}
	$('#exampleModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
		var recipient = button.data('whatever') // Extract info from data-* attributes
		var recipientperson = button.data('whateverperson')
		var recipienttypedoc = button.data('whatevertypedoc')
		var recipientnrdocument = button.data('whatevernrdocument')
		var recipientemitter = button.data('whateveremitter')
		var recipientnrphone = button.data('whatevernrphone')
		var recipientemail = button.data('whateveremail')
		var recipientpublicplace = button.data('whateverpublicplace')
		var recipientnrnumber = button.data('whatevernrnumber')
		var recipientregion = button.data('whateverregion')
		var recipientcity = button.data('whatevercity')
		var recipientstate = button.data('whateverstate')
		var recipientcountry = button.data('whatevercountry')
		var recipientcomplement = button.data('whatevercomplement')
		//document.write(recipientemail)
		// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		var modal = $(this)
		modal.find('.modal-title').text('Detalhes: ID ' + recipient)
		modal.find('#id-curso').val(recipient)
		modal.find('#recipient-person').val(recipientperson)
		modal.find('#nrphone').val(recipientnrphone)
		modal.find('#typedoc').val(recipienttypedoc)
		modal.find('#nrdocument').val(recipientnrdocument)
		modal.find('#emitter').val(recipientemitter)
		modal.find('#email').val(recipientemail)
		modal.find('#publicplace').val(recipientpublicplace)
		modal.find('#nrnumber').val(recipientnrnumber)
		modal.find('#region').val(recipientregion)
		modal.find('#city').val(recipientcity)
		modal.find('#state').val(recipientstate)
		modal.find('#country').val(recipientcountry)
		modal.find('#complement').val(recipientcomplement)
		/**/
	})
</script>