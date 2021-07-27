<?php
include('verifica_login.php');
include_once('./views/header.php');
$pagina = "Painel de Acesso";
?>
<main>
  <div class="w-25 card p-2 m-2 shadow-sm">
    <span>
      Bem vindo: <? echo $_SESSION['usuario']; ?>
    </span>
  </div>
</main>

<?php
include_once('./views/footer.php');
?>