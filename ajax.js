
//Card Cliente
function mostrar(){
   var dados = {acao: 'mostrarClienteAcao'};

   $.ajax({
      type: "POST",
      dataType: 'html',
      url: 'controlePage.php',
      data: dados,
      success: function (retorno) {
         $('#mostrarPage').html(retorno);
         
      }
  });
   //cardClientes
}

//Modal Clientes
$('#clientes').on('shown.bs.modal', function () {
   $('input#nome').trigger('focus');
})


$('#formCliente').on('submit', function (retorno) {
   retorno.preventDefault();
   var formdata = $(this).serializeArray(); 
   $.ajax({
      type: "POST",
      dataType: 'html',
      url: 'clienteAcoes/cadClienteAcao.php',
      data: formdata,
      beforeSend: function () {
          alert("Processando");
      }, success: function (retorno) {
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Cadastrado com sucesso!',
            showConfirmButton: false,
            timer: 1500
            })
          $('#clientes').modal('hide');
          
      }
  });
});


//$('.modal-backdrop').remove(); <-- this works although I don't know where to put it...


