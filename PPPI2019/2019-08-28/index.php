<?php

//var_dump($_GET);
$usuarioLogado = '45';

//print $_GET['nome'].' '. $_GET['sobrenome'];

        
        if($_POST['id'] != '45'){
        die("voce nao tem autorizacao para executar este registro");
        };
        if($_POST['estado'] == '-1'){
            die("voce nao selecionou um estado valido");
        };
        echo "<pre>";
        var_dump($_POST);
        print nl2br($_POST['campo']);
        switch ($_POST['estado']){
        case 'RS': print 'RIO GRANDE DO SUL';            break;
        case 'SC': print 'SANTA CATARINA';            break;
        case 'PR': print 'PARANÁ';            break;
        }
       
        
//$qtde = count($_POST['cat']);

//print "voce selecionou {$qtde} categorias: ". implode(', ', $_POST['cat']);
//print $_GET['nome'].' '. $_POST['sobrenome']


?>