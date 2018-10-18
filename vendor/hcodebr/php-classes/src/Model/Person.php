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

}
