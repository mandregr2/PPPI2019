<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="formatacao.css" media="screen" />

</head>

<body>
    <div class="container">
        <fieldset class="box3">
            <Legend class="LegendPresente">Upload de Arquivos</Legend>
            <form method="POST" action="formulario2.php" enctype="multipart/form-data">

                Nome<input class="box" type="text" name="nome">
                Arquivo<input class="botao1" type="file" name="arquivo">
                <button class="botao1" type="submit" name="ENVIAR">ENVIAR</button>
            </form>

        </fieldset>
    </div>
    <div class="divCenter">
        <fieldset class="box3">
            <Legend class="LegendPresente">FOTOS</Legend>
            <?php
            ?>
            <pre><?php
                    //  var_dump($_FILES);
                    $file = $_FILES['arquivo'];

                    $destino = dirname(__FILE__) . "/arquivos/";
                    switch ($file['error']) {
                        case 0:
                            print "nenhum erro!</br>";
                            break;
                        case 1:
                            print "Maior que o maximo permitido</br>";
                            break;
                        case 3:
                            print "Envio parcial do arquivo</br>";
                            break;
                        case 4:
                            print "Nenhum arquivo foi selecionado</br>";
                            break;
                    };
                    if ($file['error'] === 0)
                        if (move_uploaded_file($file['tmp_name'], $destino . $file['name']))
                            print "Arquivo Salvo!</br>";
                        else
                            print "Arquivo não salvo!</br>";

                    if (is_dir($destino)) {
                        $diretorio = dir($destino);
                        $diretorio->read();
                        $diretorio->read();
                        while ($arquivo = $diretorio->read()) {
                            print "<img src='/PPPI2019/2019-09-25/arquivos/{$arquivo}'/></br>";
                        }
                        $diretorio->close();
                    } else {
                        print "Diretorio não existe</br>";
                    }



                    echo "<form  method='POST' action='formulario2.php'>";
                    echo "</br></br><button class='botao1' type='submit' name='VOLTAR'>VOLTAR</button></form>";


                    ?>
        </pre>
        </fieldset>


    </div>
</body>

</html>