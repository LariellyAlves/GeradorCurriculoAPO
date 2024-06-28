<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador Curriculo</title>
    <link rel="stylesheet" href="css\index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #F2F2F2;">
    <header>
        <div>
            <h2 class="titulo__fonte">
                Gerador de Curriculos
            </h2>
        </div>
    </header>

    <div class="corpo">
        <h2 class="titulo__fonte">
            Dados Pessoais:
        </h2>
    </div>

    <form action="geraPdfCurriculo.php" method="post">
        <div class="alinhaCampo">
            <label for="fname" class="form-label">Nome Completo:</label>
            <input type="text" id="fname" class="form-control" require>
        </div>

        <div class="row alinhaCampo">
            <div class="col-6">
                <label for="fnacionalidade" class="form-label">Nacionalidade:</label>
                <input type="text" id="fnacionalidade" class="form-control" require>
            </div>
            <div class="col-3">
                <label for="fsexo" class="form-label">Sexo:</label>
                <input type="text" id="fsexo" class="form-control" require>
            </div>
            <div class="col-3">
                <label for="fidade" class="form-label">Idade:</label>
                <input type="text" id="fidade" class="form-control" require>
            </div>
        </div>

        <div class="alinhaCampo">
            <label for="fendereco" class="form-label">Endereço:</label>
            <input type="text" id="fendereco" class="form-control" require>
        </div>

        <div class="row alinhaCampo">
            <div class="col-6">
                <label for="festado" class="form-label">Estado:</label>
                <input type="text" id="festado" class="form-control" require>
            </div>
            <div class="col-6">
                <label for="fcidade" class="form-label">Cidade:</label>
                <input type="text" id="fcidade" class="form-control" require>
            </div>
        </div>

        <div class="row alinhaCampo">
            <div class="col-3">
                <label for="ftelefone" class="form-label">Telefone:</label>
                <input type="text" id="ftelefone" class="form-control" require>
            </div>
            <div class="col-3">
                <label for="fcelular" class="form-label">Celular:</label>
                <input type="text" id="fcelular" class="form-control" require>
            </div>
            <div class="col-6">
                <label for="femail" class="form-label">E-mail:</label>
                <input type="email" id="femail" class="form-control" require>
            </div>
        </div>

        <div class="alinhaCampo">
            <input type="submit" value="Gerar PDF">
        </div>

    </form>

    <footer>
        
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>