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
                               <option value="2">Canino</option>
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