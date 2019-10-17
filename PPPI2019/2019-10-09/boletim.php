<?php
if (($arquivo = fopen("boletim.csv", "r")) !== false) {

    $linha = fgetcsv($arquivo, 100, ',');
    $aluno = $linha[0];
    $dataNascimento = $linha[1];
} else {
    die("arquivo não existe");
};
?>
<!doctype html>
<html lang="en">

<head>
    <style>
        .table {
            margin-left: 1.rem margin-right: 1.rem
        }
        .Aprovado{
            bg-gradient-success
        }
        :Reprovado{

        }
        :Exame{

        }

        tr {
            transition: .4s
        }

        tr:hover {
            background-color: red !important;
            transition: .9s
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstdap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>09-10-2019</title>
</head>

<body>

    <div class='alert alert-warning' role='alert'>
        curso ainda em andamento !
    </div>
    <div>
        <table class='table table-striped table-hover'>
            <thead align="center" class='thead-dark'>
                <tr>
                    <th colspan="8">BOLETIM</th>
                </tr>
                <tr>
                    <th colspan="8">INSTITUTO FEDERAL DO RIO GRADE DO SUL</th>
                </tr>
                <tr>
                    <th colspan="8">CAMPUS BENTO GONÇALVES</th>
                </tr>
                <tr>
                    <th colspan="8">ANALISE E DESENVOLVIMENTO DE SISTEMAS</th>
                </tr>

                <tr>
                    <th align="left" colspan="4">Nome do aluno: <?= $aluno ?></th>
                    <th align="right" colspan="4">Nascimento: <?= $dataNascimento ?></th>
                </tr>
                <th>Componente Curricular</th>
                <th>1ª nota</th>
                <th>2ª nota</th>
                <th>3ª nota</th>
                <th>Média</th>
                <th>Nota Minima Exame</th>
                <th>Nota Exame</th>
                <th>Situação</th>


                </tr>
            </thead>
            <tbody>
                <?php
                if (($arquivo = fopen("boletim.csv", "r")) !== false) {
                    $linha = fgetcsv($arquivo, 100, ',');
                    while (($linha = fgetcsv($arquivo, 100, ',')) !== false) {
                        $media1 = ($linha[1] + $linha[2] + $linha[3]) / 3;
                      
                        if ($media1 >= 7.0) {
                            $situacao = "Aprovado";
                            $notaExame="-";
                            $classe = "bg-success text-white";
                        }
                        else if ($media1 < 1.7) {
                            $situacao = "Reprovado";
                            $classe = "bg-danger text-white";
                        } else {
                            $situacao = "Exame";
                            $classe = "bg-warning text-dark";
                            $notaExame =( 50 - 6 * $media1)/4;
                        };

                        ?>

                        <tr>
                            <td><?= $linha[0] ?></td>
                            <td><?= number_format($linha[1], 1, ",", ".") ?></td>
                            <td><?= number_format($linha[2], 1, ",", ".") ?></td>
                            <td><?= number_format($linha[3], 1, ",", ".") ?></td>
                            <td><?= number_format($media1, 2, ",", ".") ?></td>
                            <td><?=$notaExame?></td>
                            <td>-</td>
                            <td class="p-3 mb-2 <?=$classe?>"><?= $situacao ?></td>
                        </tr>
                <?php
                    }
                } else {
                    die("arquivo não existe");
                };


                ?>
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstdap JS -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstdapcdn.com/bootstdap/4.3.1/js/bootstdap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            </tbody>
    </div>
</body>

</html>