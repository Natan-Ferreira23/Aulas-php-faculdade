<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Aula 4</title>
</head>

<body>

    <div class="container">
         <div class="row text-center p-5">
                <h1>Atividade pratica</h1>
        </div>
        <div class="row">            
            <div class="col-md-4 p-5">
               <ul class="list-group">
                 <li class="list-group-item"> <a href="#atv1">Atividade 1</a></li>
                 <li class="list-group-item"> <a href="#atv2">Atividade 2</a></li>
                 <li class="list-group-item"> <a href="#atv3">Atividade 3</a></li>
                 <li class="list-group-item"> <a href="#atv4">Atividade 4</a></li>
                 <li class="list-group-item"> <a href="#atv5">Atividade 5</a></li>
               </ul>
               </ul>
            </div>
            <div class="col-md-8">
               
                <section id="atv1" class="border m-2 p-5">
                    <h3>Atividade-1-Soma</h3>
                    <p>Calcule dois valores inteiros, se os dois forem iguais retorne o triplo de sua soma</p>
                    <form action="aula5.php" method="post">
                        <div class="mb-3">
                            <label for="valo1" class="form-label">Valor 1</label>
                            <input type="number" name="valor1" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="valor2" class="form-label">Valor 2</label>
                            <input type="number" name="valor2" class="form-control">
                        </div>
                        <input type="submit" value="Fazer soma" class="btn btn-primary">
                    </form>
                </section>
                <section id="atv2" class="border m-2 p-5">
                    <h3>Atividade-2-Manipulando String</h3>
                    <p> Escreva um programa PHP para criar uma nova string onde 'ba' é adicionado a frente de uma determinada string. Se a string já começar
                     com 'ba' retorne a string inalterada;</p>
                     <p>Exemplo: input: Juliana ->Output:baJuliana</p>
                     <p>Exemplo[2]> Input: Banco -> Banco</p>
                     <form action="aula5.php" method="post">
                     <label for="texto" class="form-label">Texto</label>
                     <input type="text" name="texto" id="texto" class="form-control">
                       <div class="mt-2">
                       <input type="submit" value="Fazer soma" class="btn btn-primary">
                       </div>
                     </form>
                </section>
                <section id="atv3" class="border m-2 p-5">
                    <h3>Atividade-3-Intervalo Numerico</h3>
                    <p> Crie um script que receba que receba dois valores para definir um intervalo numerico. Exiba os valores dentro de um intervalo em uma linha
                        separados por hifen.</p>
                        <p>Exemplo: ( 1-2-3-4-5-6-7-8-9-10) em uma linha</p>
                        <p>Não havera hifen(-) na posição inicial e final</p>
                        <form action="aula5.php" method="post">
                            <div class="mb-3">
                                <label for="inicio" class="form-label">Inicio</label>
                                <input type="number" name="inicio" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="fim" class="form-label">Fim</label>
                                <input type="number" name="fim" class="form-control">
                            </div>
                            <div class="mb-">
                            <input type="submit" value="Exibir intervalo numerico" class="btn btn-primary">
                            </div>
                        </form>
                </section>
                <section id="atv4" class="border m-2 p-5">
                    <h3>Imprimindo Linhas</h3>
                    <p>Receba a quantidade de linhas que o usuario deseja visualizar</p>
                    <p>Construa o padrão a seguir usando o loop for aninhado, com a quantidade de linhas definidas pelo usuário.</p>
                    <p>*</p>
                    <p>**</p>
                    <p>***</p>
                    <p>****</p>
                    <p>*****</p>
                    <form action="aula5.php" method="post">
                        <div>
                        <label for="linhas" class="form-label">Linhas</label>
                        <input type="number" name="linhas" id="linhas" class="form-control">
                        </div>
                        <div class="mt-2">
                        <input type="submit" value="Criar linhas" class="btn btn-primary">
                        </div>
                     </form>
                </section>   
            </div>
        </div>
    </div>
</body>

</html>