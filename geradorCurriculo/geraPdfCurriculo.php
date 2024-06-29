<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeCompleto = $_POST["nomeCompleto"];
        $nacionalidade = $_POST["nacionalidade"];
        $sexo = $_POST["sexo"];
        $idade = $_POST["idade"];
        $endereco = $_POST["endereco"];
        $estado = $_POST["estado"];
        $cidade = $_POST["cidade"];
        $telefone = $_POST["telefone"];
        $celular = $_POST["celular"];
        $email = $_POST["email"];
        $objetivo = $_POST["objetivo"];
        $info = $_POST["info"];


        echo "<h1>$nomeCompleto</h1>";

        echo "<hr>";

        echo "<h2>Dados Pessoais:</h2>";
        
        echo "<h3>Nacionalidade: $nacionalidade</h3>";
        echo "<h3>Cidade: $cidade</h3>";
        echo "<h3>Estado: $estado</h3>";
        echo "<h3>Endereço: $endereco</h3>";
        echo "<h3>Telefone: $telefone</h3>";
        echo "<h3>Celular: $celular</h3>";
        echo "<h3>E-mail: $email</h3>";
        
        echo "<hr>";

        echo "<h2>Objetivo:</h2>";
        echo "<h3>$objetivo</h3>";
        
        echo "<hr>";

        if (isset($_POST['empresa']) && isset($_POST['anoEntrada']) && isset($_POST['anoSaida']) && isset($_POST['cargo']) && isset($_POST['atividade'])) {

            echo "<h2>Experiência:</h2>";

            $empresas = $_POST['empresa'];
            $anosEntrada = $_POST['anoEntrada'];
            $anosSaida = $_POST['anoSaida'];
            $cargos = $_POST['cargo'];
            $atividades = $_POST['atividade'];

            for ($i = 0; $i < count($empresas); $i++) {
                $empresa = $empresas[$i];
                $anoEntrada = $anosEntrada[$i];
                $anoSaida = $anosSaida[$i];
                $cargo = $cargos[$i];
                $atividade = $atividades[$i];

                echo "<h3>Empresa: $empresa</h3>";
                echo "<h3>Período: $anoEntrada - $anoSaida</h3>";
                echo "<h3>Cargo: $cargo</h3>";
                echo "<h3>Atividade: $atividade </h3><br>";
            }
            echo "<hr>";
        }

        if (isset($_POST['cursos']) && isset($_POST['instituicoes']) && isset($_POST['datasConclusao'])) {
            echo "<h2>Formações:</h2>";

            $cursos = $_POST['cursos'];
            $instituicoes = $_POST['instituicoes'];
            $datasConclusao = $_POST['datasConclusao'];

            for ($i = 0; $i < count($cursos); $i++) {
                $curso = $cursos[$i];
                $instituicao = $instituicoes[$i];
                $dataConclusao = $datasConclusao[$i];
                
                if (!empty($curso) && !empty($instituicao) && !empty($dataConclusao)) {
                    echo "<h3>Curso: $curso</h3>";
                    echo "<h3>Instituição: $instituicao</h3>";
                    echo "<h3>Ano de Conclusão: $dataConclusao</h3>";
                }
            }
            echo "<hr>";
        }
        echo "<h2>Informações Adicionais:</h2>";
        echo "<h3>$info</h3>";
    }
?>
