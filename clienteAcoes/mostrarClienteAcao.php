
<?php
   include_once '.\conecao\functionsClientes.php';
   $sqlLista = listarPessoas();
      ?>
      <style>
         #modalEditarCliente{
            display: flex;
            flex-direction: column;
         }
      </style>
      <table id="tableCliente">
         <thead>
            <tr>
               <th>Id</th>
               <th>Nome</th>
               <th>Cpf</th>
               <th>Email</th>
               <th>Telefone</th>
               <th>Genero</th>

            </tr>
         </thead>
         <tbody>
            <?php 
               if($sqlLista != null) {
                  foreach ($sqlLista as $row){
                     $id_cliente = $row->id_cliente;
                     $nome = $row->nome;
                     $cpf = $row->cpf;
                     $email = $row->email;
                     $telefone = $row->telefone;
                     $genero = $row->genero;
                     ?>
                     <tr data-menu="<?php echo $id_cliente ?>"></tr>
                        <td><?php echo $id_cliente ?></td>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $cpf ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $telefone ?></td>
                        <td><?php echo $genero ?></td>
                        <td><button type="button" class="btn btn-primary btn-sm" id="btnEditar<?php $id_cliente?>" onclick="editar(<?php echo $id_cliente?>, '<?php echo $nome?>', '<?php echo $cpf?>', '<?php echo $telefone?>', '<?php echo $email?>', <?php echo $genero?>)">Editar</button></td>
                        <td><button type="button" class="btn btn-danger btn-sm" id="btnDeletar<?php $id_cliente?>" onclick="deletar(<?php echo $id_cliente ?>)">Deletar</button></td>
                     </tr>
                  <?php
                  }
               }
               else{
                  echo "Nenhum Registro Encontrado";
               }
            ?>
         <div class="modal fade" id="editarClientes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Clientes</h5>
                </div>
                <div class="modal-body" id="modalEditarCliente">
                  <form action="./clienteAcoes/editarClienteAcao.php" method="post" class="form" id="formEditarCliente">
                     <input type="hidden" name="id_cliente" id="id_cliente" value="">
                     <label for="eNome">Nome:</label>
                     <input type="text" name="eNome" id="eNome">
                     <label for="eCpf">CPF:</label>
                     <input type="text" name="eCpf" id="eCpf">
                     <label for="eTelefone">Telefone:</label>
                     <input type="text" name="eTelefone" id="eTelefone">
                     <label for="eEmail">E-mail:</label>
                     <input type="text" name="eEmail" id="eEmail">
                     <label for="eGenero">Gênero</label>
                     <select name="eGenero" id="eGenero">
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                        <option value="3">Neutro</option>
                     </select>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary" form="formEditarCliente">Salvar</button>
                </div>
              </div>
            </div>
         </div>
         </tbody>
      </table>
      
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
      <script src="../ajax.js"></script>
      <script>
         function editar(id_cliente, nome, cpf, telefone, email, genero){
            $('#editarClientes').modal('show');
            $('#id_cliente').val(id_cliente);
            $('#eNome').val(nome);
            $('#eCpf').val(cpf);
            $('#eTelefone').val(telefone);
            $('#eEmail').val(email);
            $('#eGenero').val(genero);

            $('#formEditarCliente').on('submit', function (retorno) {
               retorno.preventDefault();
               var formdata = {
                  id_cliente: $('#id_cliente').val(),
                  nome: $('#eNome').val(),
                  cpf: $('#eCpf').val(),
                  telefone: $('#eTelefone').val(),
                  email: $('#eEmail').val(),
                  genero: $('#eGenero').val()
               } 
               $.ajax({
                     type: "POST",
                     dataType: 'json',
                     url: './clienteAcoes/editarClienteAcao.php',
                     data: formdata,
                     success: function (retorno) {
                        alert("Editado com Sucesso!")
                        $('#editarClientes').modal('hide');
                        mostrar();
                     },
                     error: function(xhr, status, error) {
                        alert(xhr.responseText); // output error message to the console
                     }
               });
            });
         }

         
         
         function deletar(id_cliente){
            var dados = {
               id_cliente: id_cliente,
            };
            $.ajax({
                  type: "POST",
                  dataType: 'html',
                  url: './clienteAcoes/deleteClienteAcao.php',
                  data: dados,
                  success: function (dado) {
                     alert("Deletado Com Sucesso!");
                     mostrar();
                  },
                  error: function(xhr, status, error) {
                     alert(xhr.responseText); // output error message to the console
                  }
            });
         }
            
      </script>