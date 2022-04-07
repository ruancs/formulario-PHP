<?php

session_start();

include_once("connect.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "Email: $email <br>";

$result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome','$email', NOW())";
$user_aut = mysqli_query($conn, $result_usuario);


if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = " <p>Usuário Cadastrado com sucesso!</p>";
    header("Location: index.php");
} else{
    $_SESSION['msg'] = " <p>Usuário não cadastrado!</p>";
    header("Location: index.php");
}