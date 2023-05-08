
<?php
include_once 'C:\xampp\htdocs\dashboard-bootstrap\conecao\functionsClientes.php';


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

   $return = insertCliente($nome, $cpf, $telefone, $email, $genero);

   if($return[0]){
      echo "Sucesso";
   }
   else{
      echo $return[0] . $return[1];
   }
