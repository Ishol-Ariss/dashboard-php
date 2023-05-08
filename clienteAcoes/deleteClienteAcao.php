<?php
include_once '..\conecao\functionsClientes.php';
$id_cliente = $_POST['id_cliente'];

deleteCliente($id_cliente);