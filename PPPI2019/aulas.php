 <?php
    $saldoValor = 0.0;
    $saldoQuantidade = 0.0;


    ?>

 <!doctype html>
 <html lang="PT-BR">

 <head>
     <title>PONTO</title>
     <style>
         tr {
             transition: .4s
         }

         tr:hover {
             background-color: orange !important;
             transition: .9s
         }

         @charset "UTF-8";

         html,
         body {
             margin: 0;
             padding: 0;
         }

         :before,
         :after {
             -webkit-box-sizing: border-box;
             -moz-box-sizing: border-box;
             box-sizing: border-box;
         }

         /* regra para o clear float */
         .cf:before,
         .cf:after {
             content: " ";
             display: table;
         }

         .cf:after {
             clear: both;
         }

         .cf {
             *zoom: 1;
         }

         body {
             margin-left: 5px;
             /* espaço à esquerda para a barra vertical vísivel do menu */
             font: 62.5%/1.2 Verdana, Helvetica, Arial, sans-serif;
         }

         #lateral {
             padding: 0 100px 0 0;
             -moz-transition: all 0.2s ease;
             -webkit-transition: all 0.8s ease;
             -o-transition: all 0.5s ease;
             transition: all 0.5s ease;
             font-size: 1.2em;
             background: rgb(44, 62, 80);
             background-image: -moz-linear-gradient(135deg, rgb(3, 8, 12), rgb(16, 57, 79));
             background-image: -webkit-linear-gradient(135deg, rgb(3, 8, 12), rgb(16, 57, 79));
             background-image: -o-linear-gradient(135deg, rgb(3, 8, 12), rgb(16, 57, 79));
             background-image: -ms-linear-gradient(135deg, rgb(3, 8, 12), rgb(16, 57, 79));
             background-image: linear-gradient(135deg, rgb(3, 8, 12), rgb(16, 57, 79));
             height: 100%;
             overflow: hidden;
             width: 330px;
             position: fixed;
             top: 0;
             left: -320px;
         }

         #lateral:before {
             z-index: 1000;

             font-size: 4em;
             color: white;
             position: fixed;
             left: 4px;
             top: 45px;
         }

         #lateral:hover:before,
         #lateral:focus:before {
             left: -500px
         }

         #lateral:hover,
         #lateral:focus,
         #lateral:active {
             overflow-y: auto;
             -moz-transform: translate(320px, 0);
             -webkit-transform: translate(320px, 0);
             -o-transform: translate(320px, 0);
             transform: translate(320px, 0);
             padding-right: 0;
         }

         #lateral .box {
             list-style-type: none;
             margin-bottom: 1em;
             ;
             padding-bottom: 1em;
         }

         #lateral h3 {
             display: inline-block;
             font-weight: bold;
             font-size: 1.6em;
             font-style: normal;
             padding-bottom: 0.2em;
             margin: 2em 0 2em 0.81em;
             color: rgb(255, 255, 255);
             border-bottom: 4px solid rgb(155, 155, 155);
         }

         #menu {
             font-style: italic;
             position: relative;
             font-size: 1.0em;
             margin: 1em 0 1em -1em;
             padding: 0;
         }

         #menu li {
             padding: 10;
             margin: 10;
         }

         #menu li a,
         #menu li a:link {
             font-size: 1.2em;
             color: rgb(255, 255, 255);
             text-decoration: none;
             padding: 0.8em 0 0.8em 1em;
             display: block;
             -moz-transition: all 1.2s ease;
             -webkit-transition: all 1.2s ease;
             -o-transition: all 1.2s ease;
             transition: all 1.2s ease;
         }

         #menu li a:hover {
             color: rgb(255, 255, 255);
             background-color: rgba(255, 255, 255, 0.2);
             -moz-transition: all 0.5s ease;
             -webkit-transition: all 0.5s ease;
             -o-transition: all 0.5s ease;
             transition: all 0.5s ease;
         }

         @media (max-width: 500px) {
             body {
                 margin-left: 0px;
                 background-size: 70% 28em !important;
             }

             #lateral {
                 padding: 0;
                 -moz-transition: all 0.5s ease;
                 -webkit-transition: all 0.5s ease;
                 -o-transition: all 0.5s ease;
                 transition: all 0.5s ease;
                 font-size: 1.2em;
                 height: 100%;
                 overflow: auto;
                 width: 100%;
                 position: static;
                 top: 0;
                 left: 0;
             }

             #lateral:before {
                 z-index: 1000;
                 width: 0;
                 text-align: center;
                 content: "";
                 font-size: 0;
                 color: white;
                 position: static;
                 top: 0;
                 left: 0;
                 display: inline-block;
             }

             #lateral:hover,
             #lateral:focus {
                 overflow: scroll;
                 -moz-transform: none;
                 -webkit-transform: none;
                 -o-transform: none;
                 transform: none;
             }

             #menu li a {
                 border-bottom: 1px solid #ccc;
             }

             #menu li:first-child a {
                 border-top: 1px solid #ccc;
             }

             .header {
                 margin-left: 10%;
             }
         }
     </style>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstdap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 </head>

 <body>
     <div class="container-fluid" align="center">
         <img src="\aula\ifrs.png" width="360" height="120" align="middle" />
     </div>
     <div>

         <h5 align="center">Princípios de Programação para Internet 2019</h5>
         <h5 align="center">Professor Thyago Salvá</h5>
         <h5 align="center">email: @bento.ifrs.edu.br</h5>
     </div>
     <div class="container-fluid" align="center">
         <a>INTRANET LOCAL - CONTROLE DE AULAS</a></br>
         <a>Desenvolvedor: Mário André Gonzalez Rodriguez - (54) 99116-4151</a></br>
     </div>

     <div id="lateral">

         <div id="menu">
             <h3 class="link-titulo">Aulas</h3>
             <div>
                 <h3 class="link-titulo">Julho 2019</h3>
                 <ul align="center">

                     <a class="badge badge-pill badge-warning">10-07-2019</a></br>
                     <a class="badge badge-pill badge-warning">24-10-2019</a></br>
                     <a class="badge badge-pill badge-success">31-07-2019</a></br>
                     <a href="http://127.0.0.1/PPPI2019/2019-07-31/index1.php" class='btn btn-primary btn-block'>variáveis que serão usadas durante o semestre</a>
                     <a href="http://127.0.0.1/PPPI2019/2019-07-31/index2.php" class='btn btn-primary btn-block'>variáveis que serão usadas durante o semestre</a>
                     <a href="http://127.0.0.1/PPPI2019/2019-07-31/index3.php" class='btn btn-primary btn-block'>construindo tabelas</a>
                     <ul>

             </div>
             <div>
                 <h3 class="link-titulo">Agosto 2019</h3>

                 <ul align="center">
                     <a class="badge badge-pill badge-success">07-08-2019</a></br>
                     <a href="http://127.0.0.1/PPPI2019/2019-08-07/htmlpadrao.php" class='btn btn-primary btn-block'>montando tabela</a>
                     <a href="http://127.0.0.1/PPPI2019/2019-08-07/index.php" class='btn btn-primary btn-block'>diferentes layouts</a>
                     <a class="badge badge-pill badge-success">21-08-2019</a></br>
                     <a href="http://127.0.0.1/PPPI2019/2019-08-21/boletim.php" class='btn btn-primary btn-block'>BOLETIM - PERSISTENCIA DE DADOS</a><br />
                     <a class="badge badge-pill badge-success">28-08-2019</a></br>
                     <a href="http://127.0.0.1/PPPI2019/2019-08-28/formulario.php" class='btn btn-primary btn-block'>FORMULARIOS</a><br />
                     <a href="http://127.0.0.1/PPPI2019/2019-08-28/modeloProfessor.php" class='btn btn-primary btn-block'>FORMULARIOS - modelo do professor</a>
                     <a href="http://127.0.0.1/PPPI2019/2019-08-28/lista1/formularioCV.php" class='btn btn-primary btn-block'>LISTA 1 - CURRICULO</a>
                 </ul>
             </div>
             <div>
                 <h3 class="link-titulo">SETEMBRO 2019</h3>
                 <ul align="center">
                     <a class="badge badge-pill badge-success">04-09-2019</a></br>
                     <a href="http://127.0.0.1/PPPI2019/2019-09-04/placarSemifinal.php" class='btn btn-primary btn-block'>PLACAR</a><br />
                     <a class="badge badge-pill badge-success">11-09-2019</a></br>
                     <a href="http://127.0.0.1/PPPI2019/2019-09-11/cartola/index.php" class='btn btn-primary btn-block'>cartola</a><br />
                     <a href="http://127.0.0.1/PPPI2019/2019-09-11/cadastro.php" class='btn btn-primary btn-block'>estilos</a><br />
                     <a class="badge badge-pill badge-success">18-09-2019</a></br>
                     <a href="http://127.0.0.1/PPPI2019/aulas/aulas.html" class='btn btn-primary btn-block'>SEMANA ACADEMICA</a><br />
                     <a class="badge badge-pill badge-success">25-09-2019</a></br>
                     <a href="http://127.0.0.1/PPPI2019/2019-09-25/formulario.php" class='btn btn-primary btn-block'>UPLOAD DE ARQUIVOS</a></br>
                     <a href="http://127.0.0.1/PPPI2019/2019-09-25/formulario2.php" class='btn btn-primary btn-block'>UPLOAD DE ARQUIVOS 2nd MANEIRA</a></br>
                 </ul>
             </div>
             <div>
                 <h3 class="link-titulo">OUTUBRO 2019</h3>
                 <ul align="center">
                     <a class="badge badge-pill badge-danger">02-10-2019</a></br>
                     <a class="badge badge-pill badge-success">09-10-2019</a></br>
                     <a href="http://127.0.0.1/PPPI2019/2019-10-09/index.php" class='btn btn-primary btn-block'>UPLOAD DE ARQUIVOS CSV - READ</a></br>
                     <a href="http://127.0.0.1/PPPI2019/2019-10-09/boletim.php" class='btn btn-primary btn-block'>LISTA 2 - UPLOAD DE ARQUIVOS BOLETIM</a></br>
                     <a class="badge badge-pill badge-success">16-10-2019</a></br>
                     <a href="http://127.0.0.1/PPPI2019/2019-10-16/cadastro.html" class='btn btn-primary btn-block'>UPLOAD DE ARQUIVOS CSV - WRITE</a></br>
                     <a class="badge badge-pill badge-secondary">23-10-2019</a></br>
                     <a class="badge badge-pill badge-secondary">30-10-2019</a></br>
                 </ul>
                 <div>
                     <h3 class="link-titulo">NOVEMBRO 2019</h3>
                     <ul align="center">
                         <a class="badge badge-pill badge-secondary">06-11-2019</a></br>
                         <a class="badge badge-pill badge-secondary">13-11-2019</a></br>
                         <a class="badge badge-pill badge-secondary">20-11-2019</a></br>
                         <a class="badge badge-pill badge-secondary">27-11-2019</a></br>
                     </ul>
                 </div>
                 <div>
                     <h3 class="link-titulo">DEZEMBRO 2019</h3>
                     <ul align="center">
                         <a class="badge badge-pill badge-secondary">04-12-2019</a></br>
                         <a class="badge badge-pill badge-secondary">11-12-2019</a></br>
                         <a class='btn btn-danger btn-block' href="http://127.0.0.1/PPPI2019/aulas/aulas.html">EXAME FINAL</a><br />
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="table-responsive-sm" align='center'>
        </br>
         <h2>MURAL:</h2></br>
         LISTA 1 - CURRICULO 15/09/2019 <a class="badge badge-success">OK </a></BR>
         LISTA 2 - BOLETIM  13/10/2019 <a class="badge badge-success">OK </a></BR>
        
         TRABALHO DE LABORATORIO PARA DOMINGO  <a class="badge badge-danger">PENDENTE </a></BR>
        
     </div>
 </body>

 </html>