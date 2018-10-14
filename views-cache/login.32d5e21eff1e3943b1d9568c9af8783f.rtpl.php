<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br" >

<head>
  <meta charset="UTF-8">
  <title>...::: SisOuvWeb Centenário do Sul:::...</title>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
  meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="../../res/admin/bootstrap/css/styleLogin.css">
  <link rel="stylesheet" href="../../res/admin/bootstrap/css/bootstrap.css">

</head>
<body>
  <!-- Inspiration
  https://dribbble.com/shots/2311260-Day-1-Sign-Up-and-Login-Animated
-->
<section class="user-authentication">
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
        <figure>
          <img class="LogoSisOuv" src="../../res/site/img/ouv.png" alt="Logotipo Sys-Ouv" />
          <figcaption style="display:none">LogoTipo Sys-Ouv Municipal</figcaption>
        </figure>
        <h2 class="user_unregistered-title">SisOuvWeb - Centenário do Sul</h2>
        <p class="user_unregistered-text">Painel administrativo do SisOuvWeb - Sistema de Ouvidoria Digital do Município de Centenário do Sul do Estado do Paraná.</p>
        <!--<button class="user_unregistered-signup" id="signup-button">Sem Acesso?</button>-->
        <button id="signup-button"></button>
      </div>

      <div class="user_options-registered">
        <h2 class="user_registered-title">Já possue uma conta?</h2>
        <p class="user_registered-text">Para ter acesso a conta do SisOuvWeb, click em Login logo abaixo para inserir sua credenciais.</p>
        <button class="user_registered-login" id="login-button">Login</button>
      </div>
    </div>
    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <figure>
          <img class="logo" src="../../res/site/img/logo.png" alt="Logotipo Principal Prefeitura de Centenário do Sul" />
          <figcaption style="display:none">Brasão Prefeitura Municipal de Centenário do Sul</figcaption>
        </figure>
        <h2 class="forms_title">Acesso ao SisOuvWeb</h2>
        <form class="forms_form" action="/AdminPainel/login" method="post">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" name="login" placeholder="Login" class="forms_field-input" required autofocus onkeyup="maiuscula(this)" />
              <span class="glyphicon glyphicon-user form-control-feed"></span>         
            </div>
            <div class="forms_field">
              <input type="password" name="password" placeholder="Senha" class="forms_field-input" required /> 
              <span class="glyphicon glyphicon-lock form-control-feed"></span>            
            </div>
          </fieldset>
          <div class="forms_buttons">
            <button type="button" class="forms_buttons-forgot" id="forget-button">Esqueceu a senha?</button>
            <button type="submit" class="forms_buttons-action">Acessar</button>
            <!--<a class="forms_buttons-mb-button" id="signup-button-mb">Sign up</a>-->
          </div>
        </form>
      </div>
      <div class="user_forms-signup">
        <h2 class="forms_title">SOLICITAÇÃO DE ACESSO</h2>
        <form class="forms_form">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" placeholder="Nome Completo" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="email" placeholder="Email" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="text" placeholder="Motivo" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <button type="submit" class="forms_buttons-action">Enviar Solicitação</button>
            <a class="forms_buttons-mb-button" id="login-button-mb">Login</a>
          </div>
        </form>
      </div>
      <div class="user_forms-forgot">
        <h2 class="forms_title">Esqueci a Senha</h2>
        <form class="forms_form" action="/AdminPainel/forgot" method="post">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="email" name="email" placeholder="Email" class="forms_field-input"  />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <button type="submit" class="forms_buttons-action">Resetar senha</button>         
          </div>
          <button style="color: #f00" class="user_unregistered-signup" id="back-button">Voltar</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script  src="../../res/admin/bootstrap/js/login.js"></script>
<script type="text/javascript">
  function maiuscula(z){
    v = z.value.toUpperCase();
    z.value = v;
 }
</script>


</body>

</html>
