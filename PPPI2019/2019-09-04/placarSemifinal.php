<html>

<head>
    <TITLE>COPA DO BRASIL - SEMIFINAL</TITLE>
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

        .columnSize1 {
            width: 100px;
            font-size: 25px;
            font-family: arial;
        }

        .columnSize2 {
            width: 200px;
            font-size: 25px;
            font-family: arial;

        }

        .type3 {
            font-size: 45px;
            font-family: arial;

        }
    </style>
</head>

<body>
    <form class="container" name="form" action="http://127.0.0.1/PPPI2019/2019-09-04/placarFinal.php" method="POST" name="incluir">

        <div>
            <table>
                <tr>
                    <td colspan="7" align="center">
                        <h1>COPA DO BRASIL</h1>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" align="center">
                        <h2>Semi-Finais</h2>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td colspan="7" align="center">
                        <h2>2019</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="https://s.glbimg.com/es/sde/f/equipes/2014/04/14/gremio_60x60.png" />
                        <input type="hidden" name="mandante1Nome" value="GREMIO" />
                        <input type="hidden" name="mandante1Escudo" value="https://s.glbimg.com/es/sde/f/equipes/2014/04/14/gremio_60x60.png" />
                    </td>
                    <td class="columnSize2" align="center">GREMIO</td>
                    <td><input class="campoPlacar" type="number" name="mandante1Placar" placeholder="" /></td>
                    <td class="type3" valign="middle" align="center">
                        X
                    </td>
                    <td><input class="campoPlacar" type="number" name="visitante1Placar" placeholder="" /></td>
                    <td class="columnSize2" align="center">ATLETICO-PR</td>
                    <td>
                        <img src="https://s.glbimg.com/es/sde/f/equipes/2017/11/23/Atletico-Mineiro-escudo65px.png" />
                        <input type="hidden" name="visitante1Nome" value="ATLETICO-PR" />
                        <input type="hidden" name="visitante1Escudo" value="https://s.glbimg.com/es/sde/f/equipes/2017/11/23/Atletico-Mineiro-escudo65px.png" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="https://s.glbimg.com/es/sde/f/equipes/2016/05/03/inter65.png" />
                        <input type="hidden" name="mandante2Nome" value="INTERNACIONAL" />
                        <input type="hidden"hidden="true" name="mandante2Escudo" value="https://s.glbimg.com/es/sde/f/equipes/2016/05/03/inter65.png" />

                    </td>
                    <td class="columnSize2" align="center">INTERNACIONAL</td>
                    <td><input class="campoPlacar" type="number" name="mandante2Placar" placeholder="" /></td>
                    <td class="type3" valign="middle" align="center">
                        X
                    </td>
                    <td><input class="campoPlacar" type="number" name="visitante2Placar" placeholder="" /></td>
                    <td class="columnSize2" align="center">CRUZEIRO</td>
                    <td>
                        <img src="https://s.glbimg.com/es/sde/f/equipes/2015/04/29/cruzeiro_65.png" />
                        <input hidden="true" name="visitante2Nome" value="CRUZEIRO" />
                        <input hidden="true" name="visitante2Escudo" value="https://s.glbimg.com/es/sde/f/equipes/2015/04/29/cruzeiro_65.png" />
                    </td>
                </tr>
                <tr>
                    <td colspan="7" align="center"><input class="botaoFinalizar" type="submit" value="FINALIZAR"></td>
                </tr>
            </table>


    </form>
</body>

</html>