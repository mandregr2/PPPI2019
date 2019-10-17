<?php

if ($_POST['mandante1Placar'] > $_POST['visitante1Placar']) {
    $campeaoNome = $_POST['mandante1Nome'];
    $campeaoEscudo = $_POST['mandante1Escudo'];
};
if ($_POST['mandante1Placar'] < $_POST['visitante1Placar']) {
    $campeaoNome = $_POST['visitante1Nome'];
    $campeaoEscudo = $_POST['visitante1Escudo'];
};
?>

<html>

<head>
    <TITLE>COPA DO BRASIL - CAMPEAO</TITLE>
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
                        <h2>CAMPEAO</h2>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td colspan="7" align="center">
                        <h2>2019</h2>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <img src="<?= $campeaoEscudo ?>" />
                    </td>
                </tr>
                <tr>
                    <td class="columnSize2" align="center"><h1><?= $campeaoNome ?></h1></td>
                </tr>
            </table>


    </form>
</body>

</html>