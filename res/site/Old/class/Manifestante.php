<?php

class Manifestante extends Formularios{

	private $idmanifestante;		
	private $tipodocumento;
	private $numdocumento;
	private $sexo;
	private $logradouro;
	private $numero;
	private $complemento;
	private $bairro;
	private $cep;
	private $cidade;
	private $estado;
	private $telfixo;
	private $telcelular;

	
	public function getIdmanifestante(){

		return $this->idmanifestante;
	}

	public function setIdmanifestante($value){

		$this->idmanifestante = $value;
	}
	

	public function getTipodocumento(){

		return $this->tipodocumento;
	}

	public function setTipodocumento($value){

		$this->tipodocumento = $value;
	}

	public function getNumdocumento(){

		return $this->numdocumento;
	}

	public function setNumdocumento($value){

		$this->numdocumento = $value;
	}

	public function getSexo(){

		return $this->sexo;
	}

	public function setSexo($value){

		$this->sexo = $value;
	}

	public function getLogradouro(){

		return $this->logradouro;
	}

	public function setLogradouro($value){

		$this->logradouro = $value;
	}

	public function getNumero(){

		return $this->numero;
	}

	public function setNumero($value){

		$this->numero = $value;
	}

	public function getComplemento(){

		return $this->complemento;
	}

	public function setComplemento($value){

		$this->complemento = $value;
	}

	public function getBairro(){

		return $this->bairro;
	}

	public function setBairro($value){

		$this->bairro = $value;
	}

	public function getCep(){

		return $this->cep;
	}

	public function setCep($value){

		$this->cep = $value;
	}

	public function getCidade(){

		return $this->cidade;
	}

	public function setCidade($value){

		$this->cidade = $value;
	}

	public function getEstado(){

		return $this->estado;
	}

	public function setEstado($value){

		$this->estado = $value;
	}

	public function getTelfixo(){

		return $this->telfixo;
	}

	public function setTelfixo($value){

		$this->telfixo = $value;
	}

	public function getTelcelular(){

		return $this->telcelular;
	}

	public function setTelcelular($value){

		$this->telcelular = $value;
	}

	

//############BLOCO RESPONSÁVEL PELA INSERÇÃO NO BANCO DE DADOS DOS MANIFESTANTES#############

	public function __construct(
		$tipodocumento = "", $numdocumento = "", $sexo = "", $logradouro = "",
		$numero = "", $complemento = "", $bairro = "", $cep = "", $cidade = "",
		$estado = "", $telfixo = "", $telcelular = ""
	){

		$this->setTipodocumento($tipodocumento);
		$this->setNumdocumento($numdocumento);
		$this->setSexo($sexo);
		$this->setLogradouro($logradouro);
		$this->setNumero($numero);
		$this->setComplemento($complemento);
		$this->setBairro($bairro);
		$this->setCep($cep);
		$this->setCidade($cidade);
		$this->setEstado($estado);
		$this->setTelfixo($telfixo);
		$this->setTelcelular($telcelular);

	}

	public function setData($data){

		$this->setIdmanifestante($data['idmanifestante']);
		$this->setTipodocumento($data['tipodocumento']);
		$this->setNumdocumento($data['numdocumento']);
		$this->setSexo($data['sexo']);
		$this->setLogradouro($data['logradouro']);
		$this->setNumero($data['numero']);
		$this->setComplemento($data['complemento']);
		$this->setBairro($data['bairro']);
		$this->setCep($data['cep']);
		$this->setCidade($data['cidade']);
		$this->setEstado($data['estado']);
		$this->setTelfixo($data['telfixo']);
		$this->setTelcelular($data['telcelular']);

	}

	public function insert(){

		$sql = new Sql();

		$results = $sql->select("CALL sp_manifestante_insert(:NOME, :DATANASC, :TIPODOC, :NUMDOC, :EMAIL, :SEXO, :LOGRADOURO, :NUM, :COMPLEMENTO, :BAIRRO, :CEP, :CIDADE, :ESTADO, :FIXO, :CEL, :SENHA )", array(
				':NOME'=>$this->getNome(), 
				':DATANASC'=>$this->getDatanascimento(), 
				':TIPODOC'=>$this->getTipodocumento(), 
				':NUMDOC'=>$this->getNumero(), 
				':EMAIL'=>$this->getEmail(),
				':SEXO'=>$this->getSexo(), 
				':LOGRADOURO'=>$this->getLogradouro(), 
				':NUM'=>$this->getNumero(), 
				':COMPLEMENTO'=>$this->getComplemento(), 
				':BAIRRO'=>$this->getBairro(), 
				':CEP'=>$this->getCep(), 
				':CIDADE'=>$this->getCidade(), 
				':ESTADO'=>$this->getEstado(), 
				':FIXO'=>$this->getTelfixo(), 
				':CEL'=>$this->getTelcelular(), 
				':SENHA'=>$this->getSenha() 
			));

		if(count($results) > 0){

			$this->setData($results[0]);

		}
	}

	public function __toString(){

		return json_encode(array(

			"idmanifestante"=>$this->getIdmanifestante(),
			"tipodocumento"=>$this->getTipodocumento(),
			"numdocumento"=>$this->getNumdocumento(),
			"sexo"=>$this->getSexo(),
			"logradouro"=>$this->getLogradouro(),
			"numero"=>$this->getNumero(),
			"complemento"=>$this->get(),
			"bairro"=>$this->getBairro(),
			"cep"=>$this->getCep(),
			"cidade"=>$this->getCidade(),
			"estado"=>$this->getEstado(),
			"telfixo"=>$this->getTelfixo(),
			"telcelular"=>$this->getTelcelular()
		));	
	}

}

//#######################FIM DO BLOCO###################################

?>