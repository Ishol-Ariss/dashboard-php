<?php 
   $acao = $_POST['acao'];
   switch ($acao) {
      case 'mostrarClienteAcao':
         include_once("./clienteAcoes/mostrarClienteAcao.php");
         break;
      
         case 'mostrarBanner':
         //   include_once("mostrarClienteAcao.php");
         echo "banner";
            break;
      default:
         # code...
         break;
   }
?>