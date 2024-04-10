
<div class="row">
            <div class="col-md-3"></div> <!--Div vazia -->
            <div class="col-md-6 m-2 p-3"><!--Div do form -->
                <h1>Cadastro de Clientes</h1>
                <form action="cadastraAnimal.php" method="post">
              
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do cliente</label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <div class="mb-3">
                     <label for="cpf" class="form-label">CPF</label>
                     <input type="text" class="form-control" name="cpf" required>
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
                    <div class="form-check form-check-inline">
                        <label for="outro" class="form-check-label">Outro</label>
                        <input type="radio" name="genero" value="O" class="form-check-input">
                    </div>
                </div>
                <div class="mb-3">
                     <label for="email" class="form-label">E-mail</label>
                     <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                     <label for="telefone" class="form-label">Telefone</label>
                     <input type="phone" class="form-control" name="telefone" required>
                </div>
                <div class="mb-3">
                    <label for="dn" class="form-label">Data de nascimento</label>
                    <input type="date" name="dn" class="form-control">
                 </div>
                 <div class="mb-3">
                    <label class="form-label" for="cep">Cep:</label>
                    <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                        onblur="pesquisacep(this.value);" class="form-control">
                 </div>
                <div class="mb-3" for="rua">
                    <label class="form-label" for="numero">Rua: </label>
                    <input name="numero" type="text" id="numero" size="5"  class="form-control">
                </div>
                <div class="mb-3" for="rua">
                    <label class="form-label" for="complemento">Complemento: </label>
                    <input name="complemento" type="text" id="complementp" size="5"  class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bairro">Bairro:</label>
                    <input name="bairro" type="text" id="bairro" size="40" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for=""cidade>Cidade:</label>
                    <input name="cidade" type="text" id="cidade" size="40" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="estado">Estado:</label>
                    <input name="uf" type="text" id="uf" size="2" class="form-control"/>
                </div>             
                
                 <input type="submit" value="Salvar" class="btn btn-outline-success">
                 <input type="button" value="Cancelar" class="btn btn-outline-danger">
                </form>
            </div>
            <div class="col-md-3"></div><!--Div vazia -->
        </div> 
        <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>