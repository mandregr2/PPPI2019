<pre>
    <?php


    $destino = dirname(__FILE__) . "/arquivos/*";

    if (array_key_exists('simbolo', $_FILES)) {

        $file = $_FILES['simbolo'];

        $linhas = [];

        if (($arquivo = fopen("../2019-10-09/tabela.csv", "r")) !== false) {
            while (($linha = fgetcsv($arquivo, 50, ',')) !== false) {
                $linhas[] = $linha;
            }
            fclose($arquivo);
            $nome = uniqid(time()) . '-' . $file['name'];
            $novo = $_POST;
            $novo[] = $nome;

            $linhas[] = $_POST;

            if (($arquivo = fopen("../2019-10-09/tabela.csv", "w")) !== false) {
                if ($file['error'] !== 0) {
                    switch ($file['error']) {
                        case 1: $msg = "arquivo maior que o permitido.";
                            break;
                        case 3: $msg = "erro eo enviar arquivo. ";
                            break;
                        case 4: $msg = "nenhum arquivo selecionado. ";
                            break;
                    }
                } else {
                    if ($file['type'] === 'image/jpeg' || $file['type'] === 'image/png') {
                        if (move_uploaded_file($file['tmp_name'], $destino . $nome)) {
                            //$msg = "arquivo salvo. ";
                        } else {
                            $msg = "arquivo não salvo. ";
                        }
                    } else {
                        $msg = "arquivo não é uma imagem. ";
                    }
                }
                }
                foreach ($linhas as $linha) {
                    $linha = join(',', $linha) . PHP_EOL;
                    fwrite($arquivo, $linha, strlen($linha));
                }
                fclose($arquivo);

                //var_dump($linhas);
            }
        }
    }

    header('location: \PPPI2019\2019-10-09\index.php');
    ?>