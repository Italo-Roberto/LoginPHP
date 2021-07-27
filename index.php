<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/estilo.css">
  <title>Login PHP</title>
</head>

<body>
  <main>
    <form action="login.php" method="post" class="card w-25 p-3 mx-auto my-5 shadow">
      <div class="form-group">
        <h2>Sistema de Login</h2>
      </div>
      <div class="form-group">
          <input type="text" name="usuario" class="form-control w-75 bg-light" placeholder="Usuário">
      </div>
      <div class="form-group">
          <input type="password" name="senha" class="form-control w-75 bg-light" placeholder="Senha">
      </div>
      <div class="form-group">
        <a href="cadastro.php">Ainda não tem cadastro? Cadastre-se aqui!</a><br>
      </div>
      <div class="form-group">
        <input type="submit" value="Entrar" class="btn btn-secondary">
      </div>
    </form>
  </main>

<?php
include_once('./views/footer.php');
?>