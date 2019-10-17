<?php
$pessoa = [
    ['nome' => 'pessoa 1', 'idade' => 22],
    ['nome' => 'pessoa 2', 'idade' => 23],
    ['nome' => 'pessoa 3', 'idade' => 52],
    ['nome' => 'pessoa 4', 'idade' => 32],
    ['nome' => 'pessoa 5', 'idade' => 62],
    ['nome' => 'pessoa 6', 'idade' => 79],
    ['nome' => 'pessoa 7', 'idade' => 85],
    ['nome' => 'pessoa 8', 'idade' => 97],
    ['nome' => 'pessoa 9', 'idade' => 16]
];
?>
<!DOCTYPE html>
<html><!-- Required meta tags -->
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstdap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title><p>TITULO</P></title>
</head>
<body>
<a  type="button" class="btn btn-danger" href="http://127.0.0.1/PPPI2019/index.php">VOLTAR</a><br/>
  <table border="1">
            <thead>
                <tr><th>Nome</th><th>Idade</th></tr>
            </thead>
            <tbody>
                <tr><td>Pessoa 1</td><td>22</td></tr>
                <tr><td>Pessoa 2</td><td>23</td></tr>
                <tr><td>Pessoa 3</td><td>52</td></tr>
                <tr><td>Pessoa 4</td><td>34</td></tr>
                <tr><td>Pessoa 5</td><td>62</td></tr>
            </tbody>
        </table>
        //exemplo1


        //2 maneira usando dados acima pegando os dados manualmente
        <table border="1">
            <thead><tr><th>Nome</th><th>Idade</th></tr></thead>
            <tbody>
                <tr><td><?= $pessoa [0]['nome'] ?> </td><td><?= $pessoa[0]['idade'] ?></td></tr>
                <tr><td><?= $pessoa [1]['nome'] ?> </td><td><?= $pessoa[1]['idade'] ?></td></tr>
                <tr><td><?= $pessoa [2]['nome'] ?> </td><td><?= $pessoa[2]['idade'] ?></td></tr>
                <tr><td><?= $pessoa [3]['nome'] ?> </td><td><?= $pessoa[3]['idade'] ?></td></tr>
                <tr><td><?= $pessoa [4]['nome'] ?> </td><td><?= $pessoa[4]['idade'] ?></td></tr>
                <tr><td><?= $pessoa [5]['nome'] ?> </td><td><?= $pessoa[5]['idade'] ?></td></tr>
            </tbody>
        </table>
        //exemplo2
        //3 maneira de fazer
        <table border="1">

            <thead><tr><th>Nome</th><th>Idade</th></tr></thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($pessoa); $i++) {
                    ?>	
                    <tr><td><?= $pessoa [$i]['nome'] ?> </td><td><?= $pessoa[$i]['idade'] ?></td></tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        //exemplo3
        //4 maneira de fazer USANDO VARIAVEL HTML
        <table border="1">
            ///inserindo uma legenda
            <caption>Mostrando <?= count($pessoa) ?> registros .</caption>

            <thead><tr><th>Nome</th><th>Idade</th></tr></thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($pessoa); $i++) {
                    print "<tr><td>{$pessoa[$i]['nome']}</td><td>{$pessoa[$i]['idade']}</td></tr>";
                }
                ?>
            </tbody>
        </table>
        //exemplo4
        //exemplos de tamanho de textos
        <h1>Meu Texto</h1>
        <h2>Meu Texto</h2>
        <h3>Meu Texto</h3>
        <h4>Meu Texto</h4>
        <h5>Meu Texto</h5>
        <h6>Meu Texto</h6>

        //usar modelos e estilos de texto
        <h2 style="color: #1568ed; background-color: #e9ed15">Tabela de Pessoas</h2>
        <p>Relação de Pessoas Cadastradas</p>

        <table border="10">
            <caption>Mostrando <?= count($pessoa) ?> registros .</caption>
            <thead><tr><th>Nome</th><th>Idade</th></tr></thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($pessoa); $i++) {
                    print "<tr><td>{$pessoa[$i]['nome']}</td><td>{$pessoa[$i]['idade']}</td></tr>";
                }
                ?>

            </tbody>

        </table>
        //exemplo5

        //deixando estilos prontos no inicio
        <style>
            h1{
                color: green;
                background-color: yellow
            }
            caption{
                color: red;
                background-color: black
            }
        </style>
        <h1>Tabela de Pessoas</h1>
        <p>Relação de Pessoas Cadastradas</p>

        <table border="10">
            <caption>Mostrando <?= count($pessoa) ?> registros .</caption>
            <thead><tr><th>Nome</th><th>Idade</th></tr></thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($pessoa); $i++) {
                    print "<tr><td>{$pessoa[$i]['nome']}</td><td>{$pessoa[$i]['idade']}</td></tr>";
                }
                ?>

            </tbody>

        </table>
        //exemplo6
        //criando condicoes para definir estilos
        <style>
            #Titulo{
                color: orange;
                background-color:black
            }
            #SubTitulo{
                color:white;
                background-color:black
            }

            table{

            }
        </style>
        <h2 id="Titulo">Tabela de Pessoas</h2>
        <h3 id="SubTitulo">Relação de Pessoas Cadastradas</h3>

        <table border="10">
            <caption>Mostrando <?= count($pessoa) ?> registros .</caption>
            <thead><tr><th>Nome</th><th>Idade</th></tr></thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($pessoa); $i++) {
                    print "<tr><td>{$pessoa[$i]['nome']}</td><td>{$pessoa[$i]['idade']}</td></tr>";
                }
                ?>

            </tbody>

        </table>
        //exemplo7
        <a href="http://127.0.0.1/PPPI2019/aulas/aulas.html">VOLTAR</a><br/>
    <body>
</html>