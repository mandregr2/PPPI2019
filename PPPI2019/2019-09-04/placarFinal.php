<?php

if ($_POST['mandante1Placar'] > $_POST['visitante1Placar']) {
    $finalista1 = $_POST['mandante1Nome'];
    $escudoFinalista1 = $_POST['mandante1Escudo'];
} else {
    $finalista1 = $_POST['visitante1Nome'];
    $escudoFinalista1 = $_POST['visitante1Escudo'];
}
if ($_POST['mandante2Placar'] > $_POST['visitante2Placar']) {
    $finalista2 = $_POST['mandante2Nome'];
    $escudoFinalista2 = $_POST['mandante2Escudo'];
} else {
    $finalista2 = $_POST['visitante2Nome'];
    $escudoFinalista2 = $_POST['visitante2Escudo'];
}
?>

<html>

<head>
    <TITLE>COPA DO BRASIL - FINAL</TITLE>
    <style>
        .container {
            with: 100vw;
            height: 100vh;
            background: #6C7A89;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center
        }

        .box {
            justify-content: center;
            align-items: center;
            widht: 500px;
            heigt: 500px;
            background: #fff;
        }

        .box1 {
            justify-content: center;
            align-items: center;
            widht: 200px;
            heigt: 200px;
            background: rgb(239, 228, 176);
        }

        .box2 {
            justify-content: center;
            align-items: center;
            widht: 400px;
            heigt: 200px;
            background: rgb(239, 228, 176);
        }

        body {
            margin: 0px;
        }

        .botaoFinalizar {
            width: 350px;
            padding: 15px 20px;
            border: 1px solid #eee;
            border-radius: 6px;
            background-color: #FCC302;
            font-size: 18px;
        }

        .campoPlacar {
            width: 100px;
            padding: 15px 20px;
            border: 1px solid #eee;
            border-radius: 6px;
            background-color: #FCC302;
            font-size: 18px;
        }

        .text1 {}

        .type3 {
            font-size: 25px;
            font-family: arial;

        }

        .columnSize2 {
            width: 200px;
            font-size: 25px;
            font-family: arial;

        }
    </style>
</head>

<body>
    <form class="container" name="form" action="http://127.0.0.1/PPPI2019/2019-09-04/campeao.php" method="POST" name="incluir">

        <div>
            <table>
                <tr>
                    <td colspan="7" align="center">
                        <h1>COPA DO BRASIL</h1>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" align="center">
                        <h2>FINAL</h2>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td colspan="7" align="center">
                        <h2>2019</h2>
                    </td>
                </tr>
                <tr>
                    <td class="columnSize2">
                        <img src="<?= $escudoFinalista1 ?>" />
                        <input type="hidden" name="mandante1Nome" value="<?= $finalista1 ?>" />
                        <input type="hidden" name="mandante1Escudo" value="<?= $escudoFinalista1 ?>" />
                    </td>
                    <td class="columnSize2" align="center"><?= $finalista1 ?></td>
                    <td><input class="campoPlacar" type="number" name="mandante1Placar" placeholder="" /></td>
                    <td class="type3" valign="middle" align="center">
                        X
                    </td>
                    <td><input class="campoPlacar" type="number" name="visitante1Placar" placeholder="" /></td>
                    <td class="columnSize2" align="center"><?= $finalista2 ?></td>
                    <td class="columnSize2">
                        <img src="<?= $escudoFinalista2 ?>" />
                        <input hidden="true" name="visitante1Nome" value="ATLETICO-PR" />
                        <input hidden="true" name="visitante1Escudo" value="https://s.glbimg.com/es/sde/f/equipes/2017/11/23/Atletico-Mineiro-escudo65px.png" />
                    </td>
                <tr>
                    <td colspan="7" align="center"><input class="botaoFinalizar" type="submit" value="FINALIZAR"></td>
                </tr>

            </table>


    </form>
</body>

</html>