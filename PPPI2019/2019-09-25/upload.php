<html>

<head>
    <link rel="stylesheet" type="text/css" href="formatacao.css" media="screen" />

<body class="container">
    <?php
    ?>
    <pre><?php
            var_dump($_FILES);
            $file = $_FILES['arquivo'];

            $destino = dirname(__FILE__) . "/arquivos/*";
            switch ($file['error']) {
                case 0:
                    print "nenhum erro!";
                    break;
                case 1:
                    print "Maior que o maximo permitido";
                    break;
                case 3:
                    print "Envio parcial do arquivo";
                    break;
                case 4:
                    print "Nenhum arquivo foi selecionado";
                    break;
            };
            if ($file['error'] === 0)
                if (move_uploaded_file($file['tmp_name'], $destino . $file['name']))
                    print "Arquivo Salvo!";
                else
                    print "Arquivo não salvo!";

if(is_dir($destino)){
    $diretorio = dir($destino);
    $diretorio->read();
    $diretorio->read();
    while($arquivo = $diretorio->read()){
        print $arquivo."</br>";
    }$diretorio->close();
}else{
    print "Diretorio não existe";
}



            echo "<form  method='POST' action='formulario.php'>";
            echo "</br></br><button class='botao1' type='submit' name='VOLTAR'>VOLTAR</button></form>";


            ?>
            
</body>

   </head>
</html>