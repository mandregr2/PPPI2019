

<html>
<head>
 <TITLE>login</TITLE>
<style>
.container{
with: 100vw;
height: 100vh;
background: #6C7A89;
display: flex;
flex-direction:row;
justify-content: center;
align-items:center
}
.box{
justify-content: center;
align-items:center;
widht:500px;
heigt:500px;
background:#fff;
}
.box1{
justify-content: center;
align-items:center;
widht:200px;
heigt:200px;
background:rgb(239,228,176);
}
.box2{
justify-content: center;
align-items:center;
widht:400px;
heigt:200px;
background:rgb(239,228,176);
}
body{
margin: 0px;
}
.botaoLogin{
width: 350px;
    padding: 15px 20px;
    border: 1px solid #eee;
    border-radius: 6px;
    background-color: #FCC302;
    font-size: 18px;
    }
.campoPlacar{
width: 100px;
    padding: 15px 20px;
    border: 1px solid #eee;
    border-radius: 6px;
    background-color: #FCC302;
    font-size: 18px;
    }
    .text1{
    }
    .type3{
                font-size:25px;
                font-family: arial;

                }
</style>
</head>
<body>
       <form class="container" name="form" action="http://127.0.0.1/kinox/kinox.php" method="POST" name="incluir">

                            <div>
                            <table>
                            <tr>
                            <td colspan="7" align="center"><h1>COPA DO BRASIL</h1></td>
                            </tr>
                            <tr>
                            <td colspan="7" align="center"><h2>Semi-Finais</h2></td>
                            </tr>
                            <tr>
                             <tr>
                            <td colspan="7" align="center"><h2>2019</h2></td>
                            </tr>
                            <tr>
                            <td><img src="https://s.glbimg.com/es/sde/f/equipes/2014/04/14/gremio_60x60.png"/></td>
                            <td class="type3">GREMIO</td>
                            <td><input  class="campoPlacar" type="number"  name="mandante1" placeholder=""/></td>
                            <td class="type3" horizontal-align="center"><h1>X</h1></td>
                            <td><input  class="campoPlacar" type="number"  name="visitante2" placeholder=""/></td>
                            <td class="type3">ATLETICO</td>
                            <td><img src="https://s.glbimg.com/es/sde/f/equipes/2014/04/14/gremio_60x60.png"/></td>
                            </tr>
                               <tr>
                            <td><img src="https://s.glbimg.com/es/sde/f/equipes/2014/04/14/gremio_60x60.png"/></td>
                            <td class="type3">GREMIO</td>
                            <td><input  class="campoPlacar" type="number"  name="mandante1" placeholder=""/></td>
                            <td class="type3" horizontal-align="center"><h1>X</h1></td>
                            <td><input  class="campoPlacar" type="number"  name="visitante2" placeholder=""/></td>
                            <td class="type3">ATLETICO</td>
                            <td><img src="https://s.glbimg.com/es/sde/f/equipes/2014/04/14/gremio_60x60.png"/></td>
                            </tr>
                            </table>


        </form>
</body>
</html>
