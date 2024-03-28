<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exercicio 1</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div>
                <h1 class="text-center p-3">Exercicio 2 </h1>
            </div>
            <div class="row bg-dark text-white p-2">
                <form action="mes.php" method="post">
                    <h2>Verifica o mês do ano</h2>
                    <div class="mb-2">
                        <label class="form-label">Digite um numero</label>
                        <input type="number" name="num" class="form-control">
                    </div>

                    <div class="d-flex justify-content-center mb-2">
                        <button type="submit" class="btn btn-primary p-2">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>