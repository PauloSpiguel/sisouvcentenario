<?php

class Formularios{

	private $nome;
	private $datanacimento;
	private $email;
	private $senha;
	private $dtcadastro;

	public function getNome(){

		return $this->nome;
	}

	public function setNome($value){

		$this->nome = $value;
	}

	public function getDatanascimento(){

		return $this->datanacimento;
	}

	public function setDatanascimento($value){

		$this->datanacimento = $value;
	}

	public function getEmail(){

		return $this->email;
	}

	public function setEmail($value){

		$this->email = $value;
	}

	public function getSenha(){

		return $this->senha;
	}

	public function setSenha($value){

		$this->senha = $value;
	}

	public function getDtcadastro(){

		return $this->dtcadastro;
	}

	public function setDtcadastro($value){

		$this->dtcadastro = $value;
	}

	public function __construct($nome = "", $datanacimento = "", $email = "", $senha = ""
){

		$this->setNome($nome);
		$this->setDatanascimento($datanacimento);
		$this->setEmail($email);
		$this->setSenha($senha);

	}

	public function setData($data){
		$this->setNome($data['nome']);
		$this->setDatanascimento($data['datanascimento']);
		$this->setEmail($data['email']);
		$this->setSenha($data['senha']);
		$this->setDtcadastro($data['dtcadastro']);
	}

	public function __toString(){

		return json_encode(array(
			"nome"=>$this->getNome(),
			"datanacimento"=>$this->getDatanascimento(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));	
	}

}


?>