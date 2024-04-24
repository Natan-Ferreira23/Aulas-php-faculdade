<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 m-5 p-5">
                <form action="addBanco.php" method="post">
                <div class="mb-3 text-white">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="usuario" placeholder="Digite seu usuario..">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label text-white">Senha</label>
                        <input type="password" class="form-control" name="senha" placeholder="Digite sua senha..">
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <input type="submit" class="btn btn-success" value="Logar">
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>