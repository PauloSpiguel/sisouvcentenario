<?php
session_start();
require_once "vendor/autoload.php";
//Tras as dependencias do sistema

use \SisOuvWeb\Model\User; //namespaces Site
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
$app->get('/AdminPainel/create', function () {

    User::verifyLogin();

    $page = new PageAdmin();

    $page->setTpl("users-create");

});
################## DELETA USUARIOS ######################
$app->get("/AdminPainel/users/:iduser/delete", function ($iduser) {

    User::verifyLogin();

});
################## UPDATE USUARIOS ######################
$app->get("/AdminPainel/users/:iduser", function ($iduser) {

    User::verifyLogin();

    $user = new User();

    $user->get((int) $iduser);

    $page = new PageAdmin();

    $page->setTpl("users-update", array(
        "user" => $user->getValues(),
    ));

});
################## CRIA O USUARIOS ######################
$app->post("/AdminPainel/users/create", function () {

    User::verifyLogin();

    $user = new User();

    // $_POST["inadmin"] = (isset($_POST["inadmin"])) ? 1 : 0; //Não utilizando

    $user->setData($_POST);

    $user->save();

    header("Location: /AdminPainel/users");

    exit;

});
################## SALVAR O USUARIOS ######################
$app->post("/AdminPainel/users/:iduser", function ($iduser) {

    User::verifyLogin();

});

$app->run();
