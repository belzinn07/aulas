<?php
//pagina de validaçâo de login, session
session_start();
if(isset($_SESSION['nome_usuario'])){//verifica se a sessão existe
    $user=$_SESSION['nome_usuario'];//se a sessão exitir vai ser armazenado na variavel $user
}else{
    session_destroy();//destroi a sessão se o usuario não tiver logadfo
    header("location:../login.php?msg= você não tem acesso");//redireciona para login.php
}
?>