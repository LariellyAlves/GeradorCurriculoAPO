<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador Curriculo</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #F2F2F2;">
    <header>
        <div>
            <h2 class="titulo__fonte">
                Gerador de Currículos
            </h2>
        </div>
    </header>

    <div class="corpo">
        <h5 class="titulo__fonte">
            Dados Pessoais:
        </h5>
    </div>

    <form action="geraPdfCurriculo.php" method="post" id="formularioCurriculo">
        <div class="alinhaCampo">
            <label for="fname" class="form-label">Nome Completo:</label>
            <input type="text" id="fname" class="form-control" required>
        </div>

        <div class="row alinhaCampo">
            <div class="col-6">
                <label for="fnacionalidade" class="form-label">Nacionalidade:</label>
                <input type="text" id="fnacionalidade" class="form-control" required>
            </div>
            <div class="col-3">
                <label for="fsexo" class="form-label">Sexo:</label>
                <input type="text" id="fsexo" class="form-control" required>
            </div>
            <div class="col-3">
                <label for="fidade" class="form-label">Idade:</label>
                <input type="text" id="fidade" class="form-control" required>
            </div>
        </div>

        <div class="alinhaCampo">
            <label for="fendereco" class="form-label">Endereço:</label>
            <input type="text" id="fendereco" class="form-control" required>
        </div>

        <div class="row alinhaCampo">
            <div class="col-6">
                <label for="festado" class="form-label">Estado:</label>
                <input type="text" id="festado" class="form-control" required>
            </div>
            <div class="col-6">
                <label for="fcidade" class="form-label">Cidade:</label>
                <input type="text" id="fcidade" class="form-control" required>
            </div>
        </div>

        <div class="row alinhaCampo">
            <div class="col-3">
                <label for="ftelefone" class="form-label">Telefone:</label>
                <input type="text" id="ftelefone" class="form-control" required>
            </div>
            <div class="col-3">
                <label for="fcelular" class="form-label">Celular:</label>
                <input type="text" id="fcelular" class="form-control" required>
            </div>
            <div class="col-6">
                <label for="femail" class="form-label">E-mail:</label>
                <input type="email" id="femail" class="form-control" required>
            </div>
        </div>
        
        <hr style="border-color: #883677; margin: 20px 20px;">

        <div class="corpo">
            <h5 class="titulo__fonte">
                Objetivo:
            </h5>
        </div>

        <div class="alinhaCampo">
            <input type="text" id="fobjetivo" class="form-control" required>
        </div>

        <hr style="border-color: #883677; margin: 20px 20px;">

        <div class="corpo">
            <h5 class="titulo__fonte">
                Formação Acadêmica:
            </h5>
        </div>

        <template id="template_formacao">

            <div class="alinhaCampo">
                <label for="fcurso" class="form-label">Curso:</label>
                <input type="text" id="fcurso" class="form-control" required>
            </div>

            <div class="row alinhaCampo">
                <div class="col-9">
                    <label for="finst" class="form-label">Instituição:</label>
                    <input type="text" id="finst" class="form-control" required>
                </div>
                <div class="col-3">
                    <label for="fdateConclusao" class="form-label">Ano de Conclusão:</label>
                    <input type="date" id="fdateConclusao" class="form-control" required>
                </div>
            </div>
            <hr style="border-color: #883677; margin: 20px 20px;">
        </template>

        <div id="formacaoContainer"></div>

        <div class="row alinhaCampo">
            <div class="col-1">
                <button   button type="button" class="btn_add_formacao">+</button>
            </div>
            <div class="col-11">
                <label for="addCurso" class="form-label" style="margin-top: 22px; margin-left: -145px;">Adicionar Formação</label>
            </div>
        </div>
        
        <hr style="border-color: #883677; margin: 20px 20px;">

        <div class="corpo">
            <h5 class="titulo__fonte">
                Experiência Profissional:
            </h5>
        </div>

        <template id="template_experiencia">
            <div class="row alinhaCampo">
                <div class="col-4">
                    <label for="fempresa" class="form-label">Empresa:</label>
                    <input type="text" id="fempresa" class="form-control" required>
                </div>
                <div class="col-2">
                    <label for="fEntrada" class="form-label">Ano de Entrada:</label>
                    <input type="text" id="fEntrada" class="form-control" required>
                </div>
                <div class="col-2">
                    <label for="fSaida" class="form-label">Ano de Saída:</label>
                    <input type="text" id="fSaida" class="form-control" required>
                </div>
                <div class="col-4">
                    <label for="fCargo" class="form-label">Cargo:</label>
                    <input type="text" id="fCargo" class="form-control" required>
                </div>
                <div class="alinhaCampo">
                    <label for="fatividade" class="form-label">Atividade:</label>
                    <input type="text" id="fatividade" class="form-control" required>
                </div>
            </div>
            <hr style="border-color: #883677; margin: 20px 20px;">
        </template>


        <div id="experienciasContainer"></div>

        <div class="row alinhaCampo">
            <div class="col-1">
                <button type="button" class="btn_add_experiencia">+</button>
            </div>
            <div class="col-11">
                <label for="addExp" class="form-label" style="margin-top: 22px; margin-left: -145px;">Adicionar Experiência</label>
            </div>
        </div>

        <hr style="border-color: #883677; margin: 20px 20px;">

        <div class="corpo">
            <h5 class="titulo__fonte">
                Informações Adicionais:
            </h5>
        </div>

        <div class="alinhaCampo">
            <input type="text" id="finfo" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-gerar-pdf" style="background-color: #883677; border-color: #883677; margin: 40px; float: right">Gerar PDF</button>

    </form>

    <footer>
        
    </footer>

    <script src="js/duplicaLinha.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
