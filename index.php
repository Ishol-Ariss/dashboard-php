<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

   <div class="container-fluid">
      <header>
         <div class="row">
            <div class="col-10"><h1>DASHBOARD</h1></div>
            <div class="col-1" id="h-user">
               <img src="./user.png" alt="img">
            </div>
            <div class="col-1" id="h-dropdown">
               <div class="btn-group">
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"></button>
                     <div class="dropdown-menu">
                       <a class="dropdown-item" href="#">Perfil</a>
                       <a class="dropdown-item" href="#">Sair</a>
                     </div>
                   </div>
                </div>
            </div>
         </div>
      </header>
      <main>
         <div class="row">
            <div class="col-2" id="barraLateral">
               <img src="./userMaior.png" alt="">
               <h3>Nome do Usuario</h3>
               <br>
               
               <div class="lista">
                  <h3>Cadastro</h3>
                  <ul class="list-group">
                     <li class="list-group-item" data-toggle="modal" data-target="#clientes">Cliente</li>
                     <li class="list-group-item" data-toggle="modal" data-target="#documentos">Documento</li>
                     <li class="list-group-item" data-toggle="modal" data-target="#produtos">Produto</li>
                     <li class="list-group-item" data-toggle="modal" data-target="#fornecedores">Fornecedor</li>
                  </ul>
               </div>
               <div class="lista">
                  <h3>Relatório</h3>
                  <ul class="list-group">
                     <li class="list-group-item">Cliente</li>
                     <li class="list-group-item">Produtos</li>
                  </ul>
               </div>
            </div>
   
            <div class="col-10" id="conteudo">
               <div class="row">
                  <div class="col-12">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                      </nav>
                  </div>
               </div>
               <div class="row">
                  <div class="col-3">
                     <div class="card" style="width: 18rem;" id="cardClientes" onclick="mostrar()">
                        <div class="card-body">
                          <h5 class="card-title">Clientes</h5>
                        </div>
                      </div>
                  </div>
                  <div class="col-3">
                     <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Fornecedores</h5>
                        </div>
                      </div>
                  </div>
                  <div class="col-3">
                     <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Produtos</h5>
                        </div>
                      </div>
                  </div>
                  <div class="col-3">
                     <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Documentos</h5>
                        </div>
                      </div>
                  </div>
               </div>
              
                  <div class="row">
                     <div class="col-12">
                        <div id="mostrarPage">
                     
                        </div>
                  </div>
               </div>
            </div>

            
         </div>
         </div>
         
         <div class="modal fade" id="clientes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Clientes</h5>
                </div>
                <div class="modal-body">
                  <form action="./cadClienteAcao.php" method="post" class="form" id="formCliente">
                     <label for="nome">Nome:</label>
                     <input type="text" name="nome" id="nome">
                     <label for="cpf">CPF:</label>
                     <input type="text" name="cpf" id="cpf">
                     <label for="telefone">Telefone:</label>
                     <input type="text" name="telefone" id="telefone">
                     <label for="nome">E-mail:</label>
                     <input type="text" name="email" id="email">
                     <label for="genero">Gênero</label>
                     <select name="genero" id="genero">
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                        <option value="3">Neutro</option>
                     </select>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary" form="formCliente">Salvar</button>
                </div>
              </div>
            </div>
         </div>

         <div class="modal fade" id="documentos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Documento</h5>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Salvar</button>
                </div>
              </div>
            </div>
         </div>

         <div class="modal fade" id="produtos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Produtos</h5>
                </div>
                <div class="modal-body">
                  <form action="" method="post" class="form" id="formProdutos">
                     <label for="descricao">Descrição:</label>
                     <input type="text" name="descricao" id="descricao">
                     <label for="preco">Preço:</label>
                     <input type="text" name="preco" id="preco">
                     <label for="estoque">Estoque:</label>
                     <input type="text" name="estoque" id="estoque">
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary" form="formProdutos">Salvar</button>
                </div>
              </div>
            </div>
         </div>

         <div class="modal fade" id="fornecedores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Fornecedor</h5>
                </div>
                <div class="modal-body">
                  <form action="" method="post" class="form" id="formFornecedores">
                     <label for="nome">Nome:</label>
                     <input type="text" name="nome" id="nome">
                     <label for="cnpj">CNPJ:</label>
                     <input type="text" name="cpf" id="cpf">
                     <label for="telefone">Telefone:</label>
                     <input type="text" name="telefone" id="telefone">
                     <label for="nome">E-mail:</label>
                     <input type="text" name="email" id="email">
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary" form="formFornecedores">Salvar</button>
                </div>
              </div>
            </div>
         </div>
      </main>
      <footer>
         <div class="row">
               <div class="col-12">
                  <h3>&copy;David Ribeiro de Lima</h3>
               </div>
         </div>
      </footer>
   </div>


   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

   <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
   <script src="./ajax.js"></script>
   </body>
</html>