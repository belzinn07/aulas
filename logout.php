<?php
session_start();
session_destroy();
header("location: login.php?msg= você não pode está aqui")//location: serve para redirecionar
?>
