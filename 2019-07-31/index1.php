<!DOCTIME html>
<html>
<head>
<title><p>TITULO</P></title>
</head>
<body>
<a href="http://127.0.0.1/PPPI2019/aulas/aulas.html">VOLTAR</a><br/>
<p>
<pre>
<?php
echo "o que foi passado em aula <br />";
print "variaveis que serao usadas este semestre <br />";
print "variaveis boolean integer float String array object null resource <br /> ";

//criando variaveis

$cancelado = true;
$idade = 18;
$nome = "Andre";
$resposta = "\Snome" ;
$resposta = "{$nome} idade = {$idade}" ;
print "$resposta \n" ;
//var_dump($resposta);

print "variaveis que sao false<br />";
print " 0 , vazio entre aspas ,  false , arra() vazio null  <br />" ;
var_dump((bool)0);
print "<br />";
var_dump((bool)"0.0");
print "<br />";
var_dump((bool)[]);
print "<br />";
var_dump((bool)"");
print "<br />";
//cria a variavel e da nome a ela
$nome = "cidade";
//pega a variavel nome que recebeu o nome de cidade e passa bento gonçalves como nome da cidade
$$nome = "Bento Gonçalves <br />";
//imprime a cidade
print $cidade;
//print "${$cidade}";//aqui vai dar erro

//aritimetica

$x = 5;
$y  = 7;
$z = $x + $y;
print "{$x} + {$y} = {$z} <br />";

if($x >= 7){
    print "aprovado <br />";
    }else{
        print "reprovado <br />";
    }

    echo " == verifica se as variaveis possuem o mesmo conteudo<br /> ";

    $a = 5 ; 
    $b = 5 ;

    if($a == $b){
        print "são iguais <br />";
    }

    print "verifica o conteudo entao: <br />";
    $a = 5 ; 
    $b = "5" ;

    if($a == $b){
        print "são iguais <br />";
    } else{
        print "NÃO são iguais <br />";
    }
    //==
    //!=   conteudo

    //!==
    //=== conteudo e tipo

    $a = 5 ; 
    $b = "5" ;

    if($a === $b){
        print "são iguais <br />";
    }else{
        print "NÃO são iguais <br />";
    }

    //LOGICOS  IGUAIS AO JAVA   || OU && E

    define("DINHEIRO", '1');
    define("CARTAO", '2');

    $formaPagamento = 1;

    if($formaPagamento == DINHEIRO){
        print "Pagamento em dinheiro <br />";
    }
    else if($formaPagamento == CARTAO){
        print "Pagamento em Cartão<br />";
    }else{
        print "forma de pagamento NÃO DEFINIDA<br />";
    }

    //OUTRA FORMA DE TRABALHAR QUANDO FOREM COPARACAO ENTRE 2 VARIAVEIS

    switch ($formaPagamento) {
        case DINHEIRO: print "PAGAMENTO COM DINHEIRO<br />";break;
        case CARTAO: print "PAGAMENTO EM CARTÃO<br />";break;
        default: print "FORMA DE PAGAMENTO NÃO DEFINIDA";break;  //PODE OU NÃO TER BREAK SÓ SE TIVER NO INICIO.
    }
    //VALOR INTEIRO
    $x = 3;
    
    print $x;
    print var_dump(($x));

    $x = 03;
    
    print $x;
    print var_dump(hexdec($x));
    
    $x = 0x3;
    
    print $x;
    print var_dump(($x));
    //vetores

    $vetor = array(4, 3, 4, 5, 7,  4);
    print_r ($vetor);
    //indica posição no array, apos item 5 os proximos assume 16
    $vetor = array( 3, 4, 5, 7, 15 => 6, 4);
    print_r ($vetor);
    //indica a posicao no array mas com negativo ele começa do zero pois php nao gosta de negativos
    $vetor = array(-5 => 4, 3, 4, 5, 7, 15 => 6, 4);
    print_r ($vetor);
    //substitui a posição 2 que era 5 por 7
    $vetor = array(-5 => 4, 3, 4, 5, 7, 2 => 7, 4);
    print_r ($vetor);


?>
</p>
<a href="http://127.0.0.1/PPPI2019/aulas/aulas.html">VOLTAR</a><br/>
</body>
</html>