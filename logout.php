<?php

session_start();
session_destroy();

header('Location: http://localhost/LoginPHP/index.php');

?>