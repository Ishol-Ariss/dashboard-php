<?php
include_once '..\conecao\functionsClientes.php';


if (isset($_POST['id_cliente']) && !empty($_POST['id_cliente'])) {
    $id_cliente = $_POST['id_cliente'];
}
else{
    $id_cliente = '';
}


if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = $_POST['nome'];
}
else{
    $nome = '';
}


if (isset($_POST['cpf']) && !empty(['cpf'])) {
    $cpf = $_POST['cpf'];
}
else{
    $cpf = '';
}

if (isset($_POST['telefone']) && !empty(['telefone'])) {
    $telefone = $_POST['telefone'];
}
else{
    $telefone = '';
}
if (isset($_POST['email']) && !empty(['email'])) {
    $email = $_POST['email'];
}
else{
    $email = '';
}
if (isset($_POST['genero']) && !empty(['genero'])) {
    $genero = $_POST['genero'];
}
else{
    $genero = 0;
}

$return = editarCliente($id_cliente, $nome, $cpf, $telefone, $email, $genero);

if($return[0]){
    echo $return[0];
}
else{
    echo $return[0] . $return[1];
}