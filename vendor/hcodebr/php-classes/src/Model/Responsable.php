<?php

namespace SisOuvWeb\Model;

use \SisOuvWeb\DB\Sql;
use \SisOuvWeb\Model;
use \SisOuvWeb\Mailer;

class Responsable extends Model
{

  public static function listAll()
  {

    $sql = new Sql();

    return $sql->select("SELECT * FROM tb_responsables a INNER JOIN tb_persons b USING(idperson)");

  }

  public static function listPersons()
  {

    $sql = new Sql();

    return $sql->select("SELECT * FROM tb_persons ORDER BY desperson");

  }


}
