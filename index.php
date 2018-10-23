<?php
session_start();
require_once "vendor/autoload.php";
require_once "vendor/hcodebr/php-classes/src/DB/SecretAdmin.php";
//Traz as dependências do sistema

use \SisOuvWeb\Model\User; //namespaces Site
use \SisOuvWeb\Model\Responsable;
use \SisOuvWeb\Model\Person;
use \SisOuvWeb\Page; //namespaces
use \SisOuvWeb\PageAdmin;
use \Slim\Slim;

$app = new Slim(); //rotas

$app->config('debug', true);
################### ROTA INDEX #####################
$app->get('/', function () {
//Metodo para contrução dos modelos->Method to build the templates

    $page = new Page(); //Cria o header da página->Create the page header

    $page->setTpl("index"); //Carrega o conteudo

});
################## ROTA ADMIN ######################
$app->get('/AdminPainel', function () {
//Metodo para contrução dos modelos->Method to build the templates

    User::verifyLogin();

    $page = new PageAdmin(); //Cria o header da página->Create the page header

    $page->setTpl("index"); //Carrega o conteudo

});
################## ROTA LOGIN ######################
$app->get('/AdminPainel/login', function () {
//Metodo para contrução dos modelos->Method to build the templates

    $page = new PageAdmin([
        "header" => false, //Desabilita o carregamento do cabeçalho
        "footer" => false, //Desabilita o carregamento do rodapé
    ]);

    $page->setTpl("login");

});
################## VALIDAÇAO DO LOGIN ######################
$app->post('/AdminPainel/login', function () {
//Metodo para contrução dos modelos->Method to build the templates

    User::login($_POST["login"], $_POST["password"]);

    header("location: /AdminPainel");

    exit;

});
################## ROTA LOGOUT ######################
$app->get('/AdminPainel/logout', function () {

    User::logout();
    header("Location: /AdminPainel/login");

    exit;

});
################## ROTA LISTAR PESSOAS ######################
$app->get('/AdminPainel/persons', function () {

    User::verifyLogin();

    $persons = Person::listAll();

    $page = new PageAdmin();

    $page->setTpl("persons", [
        "persons" => $persons
    ]);

});
################## ROTA CREATE PESSOAS ######################
$app->get('/AdminPainel/persons/create', function () {

    User::verifyLogin();

    $page = new PageAdmin();

    $page->setTpl("persons-create");

});
################## CRIA O PESSOAS ######################
$app->post('/AdminPainel/persons/create', function () {

    User::verifyLogin();

    $person = new Person();

    $person->setData($_POST);

    $person->save();

    header("Location: /AdminPainel/persons");

    exit;

});
################## UPDATE PESSOAS ######################
$app->get('/AdminPainel/persons/:idperson', function ($idperson) {

    User::verifyLogin();

    $person = new Person();

    $person->get((int) $idperson);

    $page = new PageAdmin();

    $page->setTpl("persons-update", array(
        "person" => $person->getValues(),
    ));

});
################## UPDATE PESSOA ######################
$app->post("/AdminPainel/persons/:idperson", function ($idperson) {

    User::verifyLogin();

    $person = new Person();

    $person->get((int) $idperson); //Select no db

    $person->setData($_POST); //Cria os Gets e Sets

    //var_dump($person);

    $person->update();

    header('Location: /AdminPainel/persons');

    exit;

});
################## ROTA LISTAR USUARIOS ######################
$app->get('/AdminPainel/users', function () {

    User::verifyLogin();

    $users = User::listAll();

    $page = new PageAdmin();

    $page->setTpl("users", array(
        "users" => $users,

    ));

});
################## ROTA CREATE USUARIOS ######################
$app->get('/AdminPainel/users/create', function () {

    User::verifyLogin();

    $page = new PageAdmin();

    $page->setTpl("users-create");

});
################## DELETA USUARIOS ######################
$app->get("/AdminPainel/users/:iduser/delete", function ($iduser) {

    User::verifyLogin();

    $user = new User();

    $user->get((int)$iduser);

    $user->delete();

    header('Location: /AdminPainel/users');

    exit;

});
################## UPDATE USUARIOS ######################
$app->get('/AdminPainel/users/:iduser', function ($iduser) {

    User::verifyLogin();

    $user = new User();

    $user->get((int) $iduser);

    $page = new PageAdmin();

    $page->setTpl("users-update", array(
        "user" => $user->getValues(),
    ));

});
################## CRIA O USUARIOS ######################
$app->post('/AdminPainel/users/create', function () {

    User::verifyLogin();

    $user = new User();

    // $_POST["inadmin"] = (isset($_POST["inadmin"])) ? 1 : 0; //Não utilizando
    //
    $_POST['despassword'] = password_hash($_POST["despassword"], PASSWORD_DEFAULT, [
        "cost" => 12,
    ]);

    $user->setData($_POST);

    $user->save();

    header("Location: /AdminPainel/users");

    exit;

});
################## UPDATE USUARIOS ######################
$app->post("/AdminPainel/users/:iduser", function ($iduser) {

    User::verifyLogin();

    $user = new User();

    $user->get((int) $iduser); //Select no db

    //$_POST["inadmin"] = (isset($_POST["inadmin"])) ? 1 : 0; //Condição verificação de valor  

    $user->setData($_POST); //Cria os Gets e Sets

    $user->update();

    header('Location: /AdminPainel/users');

    exit;

});
################## CARREGA TELA DE RECUPERAÇÃO DE SENHA ######################
$app->get("/AdminPainel/forgot", function(){

    $page = new PageAdmin([
        "header"=>false,
        "footer"=>false
    ]);

    $page->setTpl("forgot");

});
################## ROTA RECUPERAÇÃO DE SENHA ######################
$app->post("/AdminPainel/forgot", function(){

  $user = User::getForgot($_POST["email"]);

  header("Location: /AdminPainel/forgot/sent");

  exit;

});
################## UPDATE USUARIOS ######################
$app->get("/AdminPainel/forgot/sent", function(){

    $page = new PageAdmin([
        "header" => false,
        "footer" =>false
    ]);

    $page->setTpl("forgot-sent");

});
################## ROTA PARA DEFINIÇÃO DE SENHA USUARIOS ######################
$app->get("/AdminPainel/forgot/reset", function(){
#Digitando este endereço no navegador será redirecionado para a página abaixo

    $user = User::validForgotDecrypt($_GET["code"]);

    $page = new PageAdmin([
        "header"=>false,
        "footer"=>false
    ]);

    $page->setTpl("forgot-reset", array(
        "name"=>$user["desperson"],
        "code"=>$_GET["code"]
    ));//Esta aqui

});
################## MONTANDO A TELA PRA DEFINIÇÃO DE SENHA USUARIOS ######################
$app->post("/AdminPainel/forgot/reset", function(){

    $forgot = User::validForgotDecrypt($_POST["code"]);

    User::setForgotUsed($forgot["idrecovery"]);

    $user = new User();

    $user->get((int)$forgot["iduser"]);

    $password = password_hash($_POST["password"], PASSWORD_DEFAULT,[
        "cost" => 12
    ]);//hash a senha

    $user->setPassword($password);

    $page = new PageAdmin([
        "header"=>false,
        "footer"=>false
    ]);

    $page->setTpl("forgot-reset-success");

});
################## ROTA LISTAR RESPONSÁVEIS ######################
$app->get('/AdminPainel/responsables', function () {

    User::verifyLogin();

    $responsables = Responsable::listAll();

    $page = new PageAdmin();

    $page->setTpl("responsables", [
        "responsables" => $responsables
    ]);

});
################## LISTAR USUÁRIOS EM RESPONSÁVEIS ######################
$app->get('/AdminPainel/responsables/create', function () {

    User::verifyLogin();

    $persons = Responsable::listPersons();

    //var_dump($persons);

    $page = new PageAdmin();

    $page->setTpl("responsables-create", [
        "person" => $persons
    ]);

});
################## ROTA CREATE RESPONSÁVEIS ######################
$app->get('/AdminPainel/responsables/create', function () {

    User::verifyLogin();

    $page = new PageAdmin();

    $page->setTpl("responsables-create");

});
################## CREATE O RESPONSÁVEIS ######################
$app->post('/AdminPainel/responsables/create', function () {

    User::verifyLogin();

    $user = new User();

    $user->setData($_POST);

    $user->save();

    header("Location: /AdminPainel/responsables");

    exit;

});
$app->run();

