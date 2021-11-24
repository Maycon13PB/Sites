<?php
    session_start();
    include_once('conexao.php');
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    

    $result_mag_usuario = "INSERT INTO usuario(Nome, Data, Telefone, Sexo, Email, Cep, Rua, Numero, Complemento, Cidade, Estado) VALUES('$nome', '$data', '$telefone', '$sexo', '$email', '$cep', '$rua', '$numero', '$complemento', '$cidade', '$estado')";

    $resultado = mysqli_query($link, $result_mag_usuario);

    header('Location:index.html');
?>