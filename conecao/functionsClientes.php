<?php
include "config.php";
include "conecao.php";

function listarPessoas() {
   $conn = conectar();
   $sqlLista = $conn ->prepare("SELECT * FROM clientes");
   $sqlLista->execute();
   if($sqlLista->rowcount() > 0) {
      return $sqlLista -> fetchALL(PDO::FETCH_OBJ);
   }
   else{
      return null;
   }
   $conn = null;
}

function editarCliente($id_cliente, $nome, $cpf, $telefone, $email, $genero){
    $conn = conectar();

    try {
        $query = "UPDATE clientes SET nome = :value1, cpf = :value2, telefone = :value3, email = :value4, genero = :value5 
        where id_cliente = :value6";
        //$query = "UPDATE clientes set nome = '$nome', cpf = '$cpf', set telefone = '$telefone', set email = '$email', set genero = $genero, where id_cliente = $id_cliente";
        $statment = $conn->prepare($query);
        
        $statment-> bindParam(':value1', $nome);
        $statment-> bindParam(':value2', $cpf);
        $statment-> bindParam(':value3', $telefone);
        $statment-> bindParam(':value4', $email);
        $statment-> bindParam(':value5', $genero);
        $statment-> bindParam(':value6', $id_cliente);

        $statment->execute();
        
        return [true];
    }
    catch(PDOException $e){
        return [false, $e];
    }
    $conn = null;
}

function insertCliente($nome, $cpf, $telefone, $email, $genero){
    $conn = conectar();

    try {
        $query = "insert into clientes(id_cliente, nome, cpf, telefone, email, genero)
        values(default, '$nome', '$cpf', '$telefone', '$email', '$genero')";
        $statment = $conn->prepare($query);
        $statment->execute();
        
        return [true];
    }
    catch(PDOException $e){
        return [false, $e];
    }
    $conn = null;
}

function deleteCliente($id_cliente){
   $conn = conectar();

   try {
       $query = "delete from clientes where id_cliente = '$id_cliente'";
       $statment = $conn->prepare($query);
       $statment->execute();
       
   }
   catch(PDOException $e){
       echo $e;
   }
   $conn = null;
}