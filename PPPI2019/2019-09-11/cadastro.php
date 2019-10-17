<html>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0
    }

    li:nth-child(2n) {
        background-color: #dedede
    }
</style>

<body>
    <?php
    $cidades = [];
    if (isset($_POST['cidade'])) {
        $cidades = $_POST['cidade'];
    };
    ?>
    <form action="cadastro.php" method="POST" />

    <?php
    foreach ($cidades as $cidade) {
        if (empty($cidade)) continue;
        print "<input type='hidden' name='cidades[]' value='{$cidade}'/>";
    }
    ?>
    <input type="text" name="cidade[]" />
    <button type="submit">+</button>
    </form>
</body>

</html>