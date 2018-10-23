<?php

namespace SisOuvWeb\Model;

use \SisOuvWeb\DB\Sql;
use \SisOuvWeb\Model;
use \SisOuvWeb\Mailer;

class Person extends Model
{

	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_persons");

	}

	public function save()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_persons_save(:desperson, :destypedoc, :nrdocument, :desemitter, :desemail, :nrphone, :despublicplace, :nrnumber, :desregion, :descity, :desstate, :descountry, :descomplement)", array(
			":desperson" => $this->getdesperson(),
			":destypedoc" => $this->getdestypedoc(),
			":nrdocument" => $this->getnrdocument(),
			":desemitter" => $this->getdesemitter(),
			":desemail" => $this->getdesemail(),
			":nrphone" => $this->getnrphone(), 
			":despublicplace" => $this->getdespublicplace(), 
			":nrnumber" => $this->getnrnumber(),
			":desregion" => $this->getdesregion(), 
			":descity" => $this->getdescity(), 
			":desstate" => $this->getdesstate(), 
			":descountry" => $this->getdescountry(), 
			":descomplement" => $this->getdescomplement()
		));

		$this->setData($results[0]);
	}

	public function get($idperson)
    {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_persons WHERE idperson = :idperson", [
            ":idperson" => $idperson
		]);

        $this->setData($results[0]);
	}
	
	public function update()
    {
        $sql = new Sql();

		$results = $sql->select("CALL sp_personsupdate_save(:desperson, :destypedoc, :nrdocument, :desemitter, :desemail, :nrphone, :despublicplace, :nrnumber, :desregion, :descity, :desstate, :descountry, :descomplement)", array(
			":desperson" => $this->getdesperson(),
			":destypedoc" => $this->getdestypedoc(),
			":nrdocument" => $this->getnrdocument(),
			":desemitter" => $this->getdesemitter(),
			":desemail" => $this->getdesemail(),
			":nrphone" => $this->getnrphone(), 
			":despublicplace" => $this->getdespublicplace(), 
			":nrnumber" => $this->getnrnumber(),
			":desregion" => $this->getdesregion(), 
			":descity" => $this->getdescity(), 
			":desstate" => $this->getdesstate(), 
			":descountry" => $this->getdescountry(), 
			":descomplement" => $this->getdescomplement()
		));

        $this->setData($results[0]);
    }


}
