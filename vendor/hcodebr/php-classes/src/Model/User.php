<?php

namespace SisOuvWeb\Model;

use \SisOuvWeb\DB\Sql;
use \SisOuvWeb\Model;

class User extends Model
{
    const SESSION = "User";

    public static function login($login, $password)
    {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :LOGIN", array(
            ":LOGIN" => $login,
        ));

        if (count($results) === 0) {

            throw new \Exception("Usuário inexistente ou senha inválida.");

        }

        $data = $results[0];

        if (password_verify($password, $data["despassword"]) === true) {

            $user = new User();

            $user->setData($data);

            $_SESSION[user::SESSION] = $user->getValues();

            return $user;

            exit;

        } else {

            throw new \Exception("Usuário inexistente ou senha inválida.");

        }

    }

    public static function VerifyLogin($inadmin = true)
    {
        if (
            !isset($_SESSION[User::SESSION])
            ||
            !$_SESSION[User::SESSION]
            ||
            !(int) $_SESSION[User::SESSION]["iduser"] > 0
            ||
            (bool) $_SESSION[User::SESSION]["inadmin"] !== $inadmin
        ) {

            header("Location: /AdminPainel/login");
            exit;
        }

    }

    public static function logout()
    {

        $_SESSION[User::SESSION] = null;

    }

    public static function listAll()
    {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) ORDER BY b.desperson");

    }

    public function save()
    {

        $sql = new Sql();

        $results = $sql->select("CALL sp_users_save(:desperson, :destypedoc, :nrdocument, :desemitter, :deslogin, :despassword, :desemail, :nrphone, :inadmin)", array(
            ":desperson"   => $this->getdesperson(),
            ":destypedoc"  => $this->getdestypedoc(),
            ":nrdocument"  => $this->getnrdocument(),
            ":desemitter"  => $this->getdesemitter(),
            ":deslogin"    => $this->getdeslogin(),
            ":despassword" => $this->getdespassword(),
            ":desemail"    => $this->getdesemail(),
            ":nrphone"     => $this->getnrphone(),
            ":inadmin"     => $this->getinadmin(),
        ));

        $this->setData($results[0]);
    }

    public function get($iduser)
    {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) WHERE a.iduser = :iduser", array(
            ":iduser" => $iduser,
        ));

        $this->setData($results[0]);
    }

}
