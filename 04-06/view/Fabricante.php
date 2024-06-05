<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <form action="controller/FabricanteController.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label ">Nome:</label>
                    <input type="text" class="form-control" name="nome">                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">Endereço</label>
                    <input type="text" class="form-control" name="endereco">
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">Documento</label>
                    <input type="text" class="form-control" name="documento" >                    
                </div>               
                <div class="mb-3">
                    <input type="reset" value="Limpar" class="btn btn-danger">
                    <input type="submit" value="Enviar" class="btn btn-success" name="cadastrar">
                </div>
               </form>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h3 class="text-center">Listagem de fabricantes</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOME</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Documento</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Codigo de select-->
                        <?php 
                          foreach($fabricanteDao->listarFabricante() as $fab): ?>
                          <tr> 
                            <td><?php $fab->getCodigo()?></td>
                            <td><?php $fab->getNome()?></td>
                            <td><?php $fab->getEndereco()?></td>
                            <td><?php $fab->getDocumento()?></td>
                          </tr>
                        <?php endforeach; ?>                
                        </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>