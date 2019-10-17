<html>
<a href="http://127.0.0.1/PPPI2019/2019-08-28/LISTA1/FormularioCV.php">VOLTAR</a><br />

<head>
    <title>Curriculum Vitade</title>
    <style type="text/css">
        #box {
            border-width: 7px;
            background-color: white;
            border-radius: 40px 40px 40px 40px;
        }

        #line1 {
            border-top: solid 10px rgb(255, 127, 39);
        }

        #line2 {
            border-top: solid 10px rgb(253, 40, 40);
        }

        #line3 {
            border-top: solid 10px rgb(127, 127, 127);
        }

        .layout_geral_fixo {
            width: 100%;
            border-size: 5px;
            border-spacing: 2;
            border-collapse: collapse;
            z-index: 6;
            height: 15px;
            justify-content: center;
            align-items: center -webkit-print-color-adjust: exact;
        }

        .container {
            with: 100vw;
            height: 100vh;
            background: #6C7A89;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center -webkit-print-color-adjust: exact;
        }

        body {
            color: black;
            background-color: white;
        }

        .borderType1 {
            border rules: rows;
        }

        .type1 {
            font-size: 18px;
            font-family: courier new;
            background-color: rgb(192, 192, 192);
            -webkit-print-color-adjust: exact;
        }

        .type2 {
            font-size: 20px;
            font-family: courier new;
            background-color: rgb(192, 192, 192);
            -webkit-print-color-adjust: exact;
        }

        .type3 {
            font-size: 17px;
            font-family: courier new;
            -webkit-print-color-adjust: exact;
        }

        .type4 {
            font-size: 20px;
            font-family: courier new;
            -webkit-print-color-adjust: exact;
        }

        table.linhasAlternadas {
            border-collapse: collapse;
            -webkit-print-color-adjust: exact;
        }

        td.linhasAlternadas tr:nth-child(even) {
            -webkit-print-color-adjust: exact;
        }
    </style>


</head>

<body>
    <fieldset id="box">
        </br>
        </br>
        <div id="line1"></div>
        <div id="line2"></div>
        <div id="line3"></div>

        <?php

        function mask($val, $mask)
        {
            $maskared = '';
            $k = 0;
            for ($i = 0; $i <= strlen($mask) - 1; $i++) {
                if ($mask[$i] == '#') {
                    if (isset($val[$k]))
                        $maskared .= $val[$k++];
                } else {
                    if (isset($mask[$i]))
                        $maskared .= $mask[$i];
                }
            }
            return $maskared;
        }

        print "<a><font size='32' >"
            . "{$_POST['sobrenomeFinal']}"
            . ", "
            . "{$_POST['nome']}"
            . " "
            . "{$_POST['sobrenomeMeio']}"
            . "</font></p>";

        print "<h3>" . $_POST['telefoneFixo'] . "</h3>";
        print "<h3>" . $_POST['telefoneMovel'] . "</h3>";
        print "<a>Telefone de Recado: " . $_POST['telefoneContato'] . " com " . $_POST['pessoaContato'] . "</a></br>";
        print "</br></br></br>";
        print "<a class='tipe1'>ENDEREÇO</br>";
        print "" . $_POST['rua'] . ", " . $_POST['ruaNumero'] . " " . $_POST['ruaComplemento'] . "<br/>";
        print $_POST['bairro'] . "</br>";
        print $_POST['cidade'] . "-" . $_POST['estado'] . "</br>";
        $cep = $_POST['cep'];
        echo mask($cep, '#####-###');
        print "</br><a> email:" . $_POST['email'];
        print "</h6></br></br></br>";
        ?>
        <div>
            <table class="layout_geral_fixo">
                <td>
                    <h3>PERFIL</h3></br><?= $_POST['perfil'] ?></br></br>
                </td>
            </table>
        </div>
        <div>
            <table class="layout_geral_fixo">
                <td>
                    <h3>OBJETIVOS</h3></br><?= $_POST['objetivos'] ?>
                </td>
            </table>
        </div>

        <div>
            <table class="layout_geral_fixo">
                <tr>
                    <td>
                        <h3></br>DOCUMENTOS</h3>
                    </td>
                <tr>
                <tr>
                    <td>
                        RG:</br><?= $_POST['rg'] ?>
                    </td>
                    <td>
                        CPF:</br><?= $_POST['cpf'] ?>
                    </td>
                    <td>
                        CTPS/SÉRIE/UF:</br><?= $_POST['ctps'] ?>
                    </td>
                    <td>
                        PIS/PASEP:</br><?= $_POST['pis'] ?>
                    </td>
                    <td>
                        TITULO DE ELEITOR:</br><?= $_POST['titulo'] ?>
                    </td>
                    <td>
                        CARTEIRA D ERESERVISTA:</br><?= $_POST['reservista'] ?>
                    </td>
                    <td>
                        CNH:</br><?= $_POST['cnh'] ?>-<?= $_POST['cnhCat'] ?></td>
                    </td>

                </tr>

            </table>
        </div>
        <div>
            <table class="layout_geral_fixo">
                <tr>
                    <td>
                        <h3></br>FORMAÇÃO</h3>
                    </td>
                <tr>
                <tr>
                    <td>
                        <?= $_POST['formacaoAno1'] ?>
                        <?php
                        if ($_POST['FormacaoConclusao1'] == "nao") {
                            print " - EM ANDAMENTO";
                        } else {
                            print " - CONCLUIDO";
                        };
                        ?>
                        - <?= $_POST['FormacaoCurso1'] ?>
                        - <?= $_POST['formacaoInstituicao1'] ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $_POST['FormacaoAno2'] ?>
                        <?php
                        if ($_POST['FormacaoConclusao2'] == "nao") {
                            print " - EM ANDAMENTO";
                        } else {
                            print " - CONCLUIDO";
                        };
                        ?>
                        - <?= $_POST['FormacaoCurso2'] ?>
                        - <?= $_POST['FormacaoInstituicao2'] ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $_POST['FormacaoAno3'] ?>
                        <?php
                        if ($_POST['FormacaoConclusao3'] == "nao") {
                            print " - EM ANDAMENTO";
                        } else {
                            print " - CONCLUIDO";
                        };
                        ?>
                        - <?= $_POST['FormacaoCurso3'] ?>
                        - <?= $_POST['FormacaoInstituicao3'] ?>

                    </td>
                </tr>
            </table>
        </div>

        <div>
            <table class="layout_geral_fixo">
                <tr>
                    <td>
                        <h3></br>EXPERIÊNCIA</h3>
                    </td>
                <tr>
                <tr>
                    <td>
                        <h4>
                            <?= $_POST['ExperienciaAnoInicio1'] ?>
                            - <?= $_POST['ExperienciaAnoFim1'] ?>
                            - <?= $_POST['Experienciaempresa1'] ?>
                            - <?= $_POST['ExperienciaFuncao1'] ?>
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td><?= $_POST['ExperienciaAtividades1'] ?></td>
                </tr>
                <tr>
                    <td>
                        <h4>
                            <?= $_POST['ExperienciaAnoInicio2'] ?>
                            - <?= $_POST['ExperienciaAnoFim2'] ?>
                            - <?= $_POST['Experienciaempresa2'] ?>
                            - <?= $_POST['ExperienciaFuncao2'] ?>
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td><?= $_POST['ExperienciaAtividades2'] ?></td>
                </tr>
                <tr>
                    <td>
                        <h4>
                            <?= $_POST['ExperienciaAnoInicio3'] ?>
                            - <?= $_POST['ExperienciaAnoFim3'] ?>
                            - <?= $_POST['Experienciaempresa3'] ?>
                            - <?= $_POST['ExperienciaFuncao3'] ?>
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td><?= $_POST['ExperienciaAtividades3'] ?></td>
                </tr>
                    
            </table>
        </div>
                    </br>
                    </br>
    </fieldset>
</body>

</html>