<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
<div class="container">
  <div class="row align-items-start">
    <div class="col">
          <nav class="navbar navbar-expand bg-primary">
              <div class="container-fluid">
                  <a class="navbar-brand text-light" href="#" >Cadastrar Cliente</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                     </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                 <li class="nav-item">
                                  <a class="nav-link active text-light" aria-current="page" href="#">Cadastrar</a>
                                 </li>
                                    <li class="nav-item">
                                       <a class="nav-link text-light" href="#">Consultar</a>
                                    </li>
                               </ul>
                         </div>
                  </div>
            </div>
           <p> 
           <p align="left"><font size="5">Cadastrar -  Agendamento de Clientes</p></font>
           <p align="left"><font size="4">Sistema utilizado para agedamento de serviços</font></p>
           
<div class="container mt-5">
        <form method="POST" action="/adicionarContato">
            @csrf
           <div class="form-group mb-2">
                <label for="exampleInputNome">Nome</label>
                    <input type="text" class="form-control" name="nome" >
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2" >Data de Nascimento</label>
                    <input type="text" class="form-control" name="DataNasc" placeholder="(XX)XXXXX-XXXX" >
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">CPF</label>
                    <input type="text" class="form-control" name="CPF" placeholder="XXXX/XX/XX">
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">Telefone</label>
                    <input type="text" class="form-control" name="Telefone" placeholder="XXXX/XX/XX">
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">Endereco</label>
                    <input type="text" class="form-control" name="Endereco" placeholder="XXXX/XX/XX">
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">Email</label>
                    <input type="text" class="form-control" name="Email" placeholder="XXXX/XX/XX">
           </div>
           <button type="submit" class="btn btn-primary">Cadastrar</button> 
      </form>
</div>
</body>
</html>
