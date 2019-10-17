<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
    .layout_geral_fixo {
        width: 100%;
        border-size: 5px;
        border-spacing: 2;
        border-collapse: collapse;
        z-index: 6;
        height: 15px;
        justify-content: center;
        align-items: center -webkit-print-color-adjust: exact;
    }

    .type3 {
        font-size: 17px;
        font-family: courier new;
        color: black;
        -webkit-print-color-adjust: exact;
    }

    .type3ent {
        font-size: 17px;
        font-family: courier new;
        color: blue;
        -webkit-print-color-adjust: exact;
    }

    .type3sai {
        font-size: 17px;
        font-family: courier new;
        color: red;
        -webkit-print-color-adjust: exact;
    }
</style>

<body>
    <div>
        <table class="layout_geral_fixo" border="1">
            <tr>
                <th align="center" colspan="19">
                    <font face="arial narrow" size="6">TESTE</font>
                </th>
            </tr>

            <tr class="type3">
                <th class="cab">DATA</th>
                <th class="cab">COD</th>
                <th class="cab">DESCRIÇÃO</th>
                <th class="cab">UN</th>
                <th class="cab">OPERAÇÃO</th>
                <th class="cab">QTD ENTRADA</th>
                <th class="cab">UNIT ENTR</th>
                <th size="15">TOT ENTRADA</th>
                <th class="cab">QTD SAIDA</th>
                <th class="cab">UNIT SAIDA</th>
                <th size="15">TOT SAIDA</th>
                
                <th size="15">SALDO GERAL</th>
                </font>
            </tr>
            <?php
            $saldo = 0.0;
            $link = mysqli_connect("127.0.0.1", "teste1", "admin", "lista_view");
            if (!$link) {
                echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
            // conecta ao banco de dados
            $sql = 
            "SELECT evento, cod, descricao, unidade, operacao, qt_e, vl_e, e_tot, qt_s, vl_s, s_tot, sum(e_tot) - sum(s_tot) as saldo_total
                FROM 
                    (select i.evento, i.cod, p.descricao, p.unidade,  i.operacao, i.qt_e, i.vl_e, sum(i.qt_e * i.vl_e) as e_tot, i.qt_s, i.vl_s, sum(i.qt_s*i.vl_s) as s_tot
                        FROM produto AS p 
                        INNER JOIN 
                        industrializacao AS i 
                        ON p.cod = i.cod 
                            GROUP BY i.evento, i.cod, p.descricao, p.unidade,  i.operacao, i.qt_e, i.vl_e
                                ORDER BY i.evento)
                                    AS T
                                        WHERE evento <= evento 
                                            GROUP BY evento, cod
                                                ORDER BY evento;";
            //echo $sql;
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_array($result);
            $totalDados = mysqli_num_rows($result);
            if ($totalDados > 0) {
                do {

                    $saldo = $saldo + number_format($row['saldo_total'], 2);
                    
                    ?>
                    <tr class="type3ent">


                        <td class="type3" align="left"><?php echo $row['evento']; ?></td>
                        <td class="type3" align="left"><?php echo $row['cod']; ?> </td>
                        <td class="type3" align="center"><?php echo $row['descricao']; ?> </td>
                        <td class="type3" align="left"><?php echo $row['unidade']; ?> </td>
                        <td class="type3" align="center"><?php echo $row['operacao']; ?> </td>
                        <?php if($row['qt_e'] > 0.0){?>
                        <td size="15" class="type3ent" align="right"><?php echo number_format($row['qt_e'], 2); ?> </td>
                        <td size="15" class="type3ent" align="right"><?php echo number_format($row['vl_e'], 2); ?> </td>
                        <td size="15" class="type3ent" align="right"><?php echo number_format($row['e_tot'], 2); ?> </td>
                        <td size="15" class="type3ent" align="center"></td>
                        <td size="15" class="type3ent" align="center"></td>
                        <td size="15" class="type3ent" align="center"></td>
                        <?php } if($row['qt_s'] > 0.0){ ?>
                        <td size="15" class="type3ent" align="center"></td>
                        <td size="15" class="type3ent" align="center"></td>
                        <td size="15" class="type3ent" align="center"></td>
                        <td size="15" class="type3sai" align="right"><?php echo number_format($row['qt_s'], 2); ?> </td>
                        <td size="15" class="type3sai" align="right"><?php echo number_format($row['vl_s'], 2); ?> </td>
                        <td size="15" class="type3sai" align="right"><?php echo number_format($row['s_tot'], 2); ?> </td>
                        <?php }; if($saldo >= 0.0){?>
                        <td size="15" class="type3ent" align="right"><?php echo number_format($saldo, 2); ?> </td>
                        <?php } if($saldo < 0.0){?>
                        <td size="15" class="type3sai" align="right"><?php echo number_format($saldo, 2); ?> </td>
                            <?php }; ?>
                    </tr>
            <?php
                } while ($row = mysqli_fetch_assoc($result));
            };
            ?>
            </thead>
        </table>

</body>

</html>