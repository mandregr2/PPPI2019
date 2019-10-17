<!doctype html>
<html lang="en">

<head>
    <style>
        .table {
            margin-left: 1.rem margin-right: 1.rem
        }

        td:last-child::after {
            content: '%';
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
    <?php


    if (($arquivo = fopen("tabela.csv", "r")) !== false) {

        print "
        <div class='alert alert-warning' role='alert'>
         campeonato ainda está em andamento
         </div>";
        print "<a href='\\PPPI2019\\2019-10-16\cadastro.html' class='btn btn-danger'>CADASTRAR</a>";
        print "
       <table class='table table-striped table-hover'>
            <thead class='thead-dark'>
                <tr>
                    <th>EQUIPE</th>
                    <th>P</th>
                    <th>J</th>
                    <th>V</th>
                    <th>E</th>
                    <th>D</th>
                    <th>GP</th>
                    <th>GC</th>
                    <th>S</th>
                    <th>A</th>
                    
                </tr>
            </thead>
            <tbody>";
        $equipes = [];
        $linha = fgetcsv($arquivo, 50, ',');
        while (($linha = fgetcsv($arquivo, 50, ',')) !== false) {

            $jogos = ($linha[1] + $linha[2] + $linha[3]);
            $pontos = (($linha[1] * 3) + ($linha[2] * 1));
            $saldo = ($linha[4] - $linha[5]);
            $aproveitamento = number_format(($linha[1] / $jogos * 100), 2, ",", ".");
            $equipes[] = [
                'nome' => $linha[0],
                'pontos' => $pontos,
                'jogos' => $jogos,
                'vitorias' => $linha[1],
                'empates' => $linha[2],
                'derrotas' => $linha[3],
                'golspro' => $linha[4],
                'golscontra' => $linha[5],
                'saldo' => $saldo,
                'aproveitamento' => $aproveitamento
            ];
        }
        //ordenar
        usort(
            $equipes,

            function ($a, $b) {
                if ($a['pontos'] > $b['pontos']) {
                    return  -1;
                } else if ($a['pontos'] < $b['pontos']) {
                    return 1;
                } else {
                    if ($a['vitorias'] > $b['vitorias']) {
                        return  -1;
                    } else if ($a['vitorias'] < $b['vitorias']) {
                        return 1;
                    } else {
                        if ($a['saldo'] > $b['saldo']) {
                            return  -1;
                        } else if ($a['saldo'] < $b['saldo']) {
                            return 1;
                        } else {
                            if ($a['golspro'] > $b['golspro']) {
                                return -1;
                            } else {
                                return 1;
                            }
                        }
                    }
                }
            }
        );
        foreach ($equipes as $equipe) {
            print "
            <tr>
            <td>{$equipe['nome']}</td>
            <td>{$equipe['pontos']}</td>
            <td>{$equipe['jogos']}</td>
            <td>{$equipe['vitorias']}</td>
            <td>{$equipe['empates']}</td>
            <td>{$equipe['derrotas']}</td>
            <td>{$equipe['golspro']}</td>
            <td>{$equipe['golscontra']}</td>
            <td>{$equipe['saldo']}</td>
            <td>{$equipe['aproveitamento']}</td>

            </tr>";
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
</body>

</html>