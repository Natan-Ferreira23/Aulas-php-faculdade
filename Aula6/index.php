<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>UPet</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row"> <!--MENU-->
          
         <nav class="navbar navbar-expand-lg bg-body-tertiary">
               <div class="container-fluid">
                    <a href="#" class="navbar-brand">UPets</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navBarSupportedContent">
                       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                             <li class="nav-item">
                                <a href="#" class="nav-link active" atia-current="page" >Home</a>
                             </li>
                             <li class="nav-item">
                                <a href="#" class="nav-link" aria-current="page" >Animais</a>
                             </li>
                             <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" aria-current="page" data-bs-toggle="dropdown"  >Suprimentos</a>
                                <ul class="dropdown-menu">
                                   <li> <a href="#" class="dropdown-item">Manutenção</a></li>
                                   <li> <a href="#" class="dropdown-item">Alimentação</a></li>
                                   <li> <a href="#" class="dropdown-item">Médicos</a></li>
                                   <li> <a href="#" class="dropdown-item">E.P.I</a></li>
                                </ul>
                             </li>
                             <li class="nav-item">
                                <a href="#" class="nav-link" aria-current="page" >Financeiro</a>
                             </li>
                             <li class="nav-item">
                                <a href="#" class="nav-link" aria-current="page" >Funcionarios</a>
                             </li>
                       </ul>
                    </div>
               </div>               
         </nav>
        </div>
        <div class="row">
            <div class="col-md-3"></div> <!--Div vazia -->
            <div class="col-md-6 m-2 p-3"><!--Div do form -->
                <h1>Cadastro de Animais</h1>
                <form action="cadastraAnimal.php" method="post">
                <div class="mb-3">
                    <label for="" class=""></label>
                    <label for="familia" class="form-label">Familia</label>
                    <select name="familia" id="familia" class="form-select">
                               <option disabled selected>Selecione uma opção</option>
                               <option value="1">Felino</option>
                               <option value="2">Canídeo</option>
                               <option value="3">Ave</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do Animal</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tutor" class="form-label">Tutor</label>
                   <select name="tutor" id="tutor" class="form-select">
                       <option selected disabled>Selecione uma opção</option>
                       <option value="1">João</option>
                       <option value="1">Maria</option>
                       <option value="1">José</option>
                   </select>
                </div>
                <div class="mb-3">
                    <label for="form-label" for="porte">Porte</label>
                    <select name="porte" id="porte" class="form-select">
                        <option selected disabled>Selecione uma opção</option>
                        <option value="1">Pequeno</option>
                        <option value="2">Médio</option>
                        <option value="3">Grande</option>
                    </select>
                </div>
                <div class="mb-3">
                     <label for="peso" class="form-label">Peso</label>
                     <input type="text" class="form-control" name="peso">
                </div>
                <div class="mb-3">
                <h5><label for="genero">Genero</label></h5>
                    <div class="form-chek form-check-inline">
                        <input type="radio" name="genero" value="M" class="form-check-input">
                        <label for="Masculino" class="form-check-label">Masculino</label>                                                    
                        
                    </div>
                    <div class="form-check form-check-inline">
                        <label for="Feminino" class="form-check-label">Feminino</label>
                        <input type="radio" name="genero" value="F" class="form-check-input">
                    </div>
                </div>
                 <div class="mb-3">
                    <label for="dn" class="form-label">Data de nascimento</label>
                    <input type="date" name="dn" class="form-control">
                 </div>
                 <input type="submit" value="Salvar" class="btn btn-outline-success">
                 <input type="button" value="Cancelar" class="btn btn-outline-danger">
                </form>
            </div>
            <div class="col-md-3"></div><!--Div vazia -->
        </div>          
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>