<?php
$aluno = [
    'nome' => 'MARIO ANDRE GONZALEZ RODRIGUEZ',
    'escola' => 'INSTITUTO FEDERAL DO RIO GRANDE DO SUL - IFRS',
    'ano' => '2019',
    'componentes' => [
        ['materia' => 'matematica', 'n1' => 7.0, 'n2' => 7.0, 'n3' => 7.0, 'f1' => 2, 'f2' => 2, 'f3' => 2],
        ['materia' => 'portugues', 'n1' => 3.0, 'n2' => 3.0, 'n3' => 3.0, 'f1' => 2, 'f2' => 2, 'f3' => 2],
        ['materia' => 'geografia', 'n1' => 7.0, 'n2' => 7.0, 'n3' => 7.0, 'f1' => 2, 'f2' => 2, 'f3' => 2],
        ['materia' => 'historia', 'n1' => 3.0, 'n2' => 3.0, 'n3' => 3.0, 'f1' => 2, 'f2' => 2, 'f3' => 2],
        ['materia' => 'ed fisica', 'n1' => 7.0, 'n2' => 7.0, 'n3' => 7.0, 'f1' => 2, 'f2' => 2, 'f3' => 2],
        ['materia' => 'artes', 'n1' => 3.0, 'n2' => 3.0, 'n3' => 3.0, 'f1' => 2, 'f2' => 2, 'f3' => 2],
        ['materia' => 'quimica', 'n1' => 5.0, 'n2' => 5.0, 'n3' => 5.0, 'f1' => 2, 'f2' => 2, 'f3' => 2]
    ]
]
?>



<!DOCTYPE html>

<html>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstdap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>
    <p>BOLETIM</P>
</title>
</head>
<a type="button" class="btn btn-danger" href="http://127.0.0.1/PPPI2019/index.php">VOLTAR</a><br />

<style>
    .aprovado {
        color: green
    }

    .reprovado {
        color: red
    }

    .exame {
        color: yellow
    }

    .texto {
        background-color: yellow;
    }

    body {
        color: blue;
        background-color: azure;

    }

    #titulo,
    h2 {
        background-color: black;
    }
</style>
</head>

<body>
    <h1 id="titulo">BOLETIM</h1>

    <table border="2">
        <thead>
            <tr>
                <td colspan="10">BOLETIM ESCOLAR ANO: <?= $aluno['ano'] ?></td>
            </tr>
            <tr>
                <td colspan="10">Escola: <?= $aluno['escola'] ?></td>
            </tr>
            <tr>
                <td colspan="10">Aluno: <?= $aluno['nome'] ?> </td>
            </tr>
            <tr>
                <td colspan="1" rowspan="2">COMPONENTES CURRICULARES</td>
                <td colspan="3">NOTA</td>
                <td colspan="3">FALTAS</td>
                <td colspan="1" rowspan="2">MF</td>
                <td colspan="1" rowspan="2">T.FALTAS</td>
                <td colspan="1" rowspan="2">RESULTADO</td>
            </tr>
            <tr>
                <td>1º tri</td>
                <td>2º tri</td>
                <td>3º tri</td>
                <td>1º tri</td>
                <td>2º tri</td>
                <td>3º tri</td>
            </tr>
            <?php
            for ($i = 0; $i < count($aluno['componentes']); $i++) {

                $total_falta = $aluno['componentes'][$i]['f1'] + $aluno['componentes'][$i]['f2'] + $aluno['componentes'][$i]['f3'];
                $media_nota = ($aluno['componentes'][$i]['n1'] + $aluno['componentes'][$i]['n2'] + $aluno['componentes'][$i]['n3']) / 3;

                $resultado = 'reprovado';
                if ($media_nota >= 5) {
                    $resultado = 'exame';
                }
                if ($media_nota >= 7) {
                    $resultado = 'aprovado';
                }
                print "<tr>					
                                                <td>{$aluno['componentes'][$i]['materia']}</td>
                                                <td>" . number_format($aluno['componentes'][$i]['n1'], 1) . "</td>
                                                <td>" . number_format($aluno['componentes'][$i]['n2'], 1) . "</td>
                                                <td>" . number_format($aluno['componentes'][$i]['n3'], 1) . "</td>
                                                <td>{$aluno['componentes'][$i]['f1']}</td>
                                                <td>{$aluno['componentes'][$i]['f2']}</td>
                                                <td>{$aluno['componentes'][$i]['f3']}</td>
                                                <td>" . number_format($media_nota, 1) . "</td>
                                                <td>$total_falta</td>
                                                <td class='{$resultado}'>$resultado</td>                                                 
                                           
                             </tr>";
            }
            ?>
        </thead>
    </table>
</body>
<a type="button" class="btn btn-danger" href="http://127.0.0.1/PPPI2019/index.php">VOLTAR</a><br />

</html>