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
            <label for="nomeCompleto" class="form-label">Nome Completo:</label>
            <input type="text" id="nomeCompleto" name="nomeCompleto" class="form-control" required>
        </div>

        <div class="row alinhaCampo">
            <div class="col-6">
                <label for="nacionalidade" class="form-label">Nacionalidade:</label>
                <input type="text" id="nacionalidade" name="nacionalidade" class="form-control" required>
            </div>
            <div class="col-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <input type="text" id="sexo" name="sexo" class="form-control" required>
            </div>
            <div class="col-3">
                <label for="idade" class="form-label">Idade:</label>
                <input type="text" id="idade" name="idade" class="form-control" required>
            </div>
        </div>

        <div class="alinhaCampo">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" id="endereco" name="endereco" class="form-control" required>
        </div>

        <div class="row alinhaCampo">
            <div class="col-6">
                <label for="estado" class="form-label">Estado:</label>
                <input type="text" id="estado" name="estado" class="form-control" required>
            </div>
            <div class="col-6">
                <label for="cidade" class="form-label">Cidade:</label>
                <input type="text" id="cidade" name="cidade" class="form-control" required>
            </div>
        </div>

        <div class="row alinhaCampo">
            <div class="col-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" id="telefone" name="telefone" class="form-control" required>
            </div>
            <div class="col-3">
                <label for="celular" class="form-label">Celular:</label>
                <input type="text" id="celular" name="celular" class="form-control" required>
            </div>
            <div class="col-6">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
        </div>
        
        <hr style="border-color: #883677; margin: 20px 20px;">

        <div class="corpo">
            <h5 class="titulo__fonte">
                Objetivo:
            </h5>
        </div>

        <div class="alinhaCampo">
            <input type="text" id="objetivo" name="objetivo" class="form-control" required>
        </div>

        <hr style="border-color: #883677; margin: 20px 20px;">

        <div class="corpo">
            <h5 class="titulo__fonte">
                Formação Acadêmica:
            </h5>
        </div>

        <template id="template_formacao">
            <div class="alinhaCampo">
                <label for="curso[]" class="form-label">Curso:</label>
                <input type="text" id="curso" name="cursos[]" class="form-control" required>
            </div>

            <div class="row alinhaCampo">
                <div class="col-9">
                    <label for="instituicao[]" class="form-label">Instituição:</label>
                    <input type="text" id="instituicao" name="instituicoes[]" class="form-control" required>
                </div>
                <div class="col-3">
                    <label for="dataConclusao[]" class="form-label">Ano de Conclusão:</label>
                    <input type="date" id="dataConclusao" name="datasConclusao[]" class="form-control" required>
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
                <label for="addCurso" class="form-label" style="margin-top: 22px; margin-left: -130px;">Adicionar Formação</label>
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
                    <label for="empresa[]" class="form-label">Empresa:</label>
                    <input type="text" id="empresa" name="empresa[]" class="form-control" required>
                </div>
                <div class="col-2">
                    <label for="anoEntrada[]" class="form-label">Ano de Entrada:</label>
                    <input type="text" id="anoEntrada" name="anoEntrada[]" class="form-control" required>
                </div>
                <div class="col-2">
                    <label for="anoSaida[]" class="form-label">Ano de Saída:</label>
                    <input type="text" id="anoSaida" name="anoSaida[]" class="form-control" required>
                </div>
                <div class="col-4">
                    <label for="cargo[]" class="form-label">Cargo:</label>
                    <input type="text" id="cargo" name="cargo[]" class="form-control" required>
                </div>
                <div class="alinhaCampo">
                    <label for="atividade[]" class="form-label">Atividade:</label>
                    <input type="text" id="atividade" name="atividade[]" class="form-control" required>
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
                <label for="addExp" class="form-label" style="margin-top: 22px; margin-left: -130px;">Adicionar Experiência</label>
            </div>
        </div>

        <hr style="border-color: #883677; margin: 20px 20px;">

        <div class="corpo">
            <h5 class="titulo__fonte">
                Informações Adicionais:
            </h5>
        </div>

        <div class="alinhaCampo">
            <input type="text" id="info" name="info" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-gerar-pdf" style="background-color: #883677; border-color: #883677; margin: 40px; float: right">Gerar PDF</button>

    </form>

    <footer>
        
    </footer>

    <script src="js/duplicaLinha.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
