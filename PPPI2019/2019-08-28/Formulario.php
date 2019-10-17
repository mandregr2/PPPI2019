<!doctype <!DOCTYPE html>
<html>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstdap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
</style>

<head>


    <title>Formulários</title>

</head>

<body>
<a type="button" class="btn btn-danger" href="http://127.0.0.1/PPPI2019/index.php">VOLTAR</a><br />
    <h1>Formulários</h1>
    <form action='index.php' method='GET'>
        Nome:<input type="text" name="nome" placeholder="Digite o seu nome" />
        <br />
        Sobrenome:<input type="text" name="sobrenome" placeholder="Digite o seu sobrenome" />
        <br />
        <input type="submit" name="botaoSalvar" value="Salvar" />
        <br />
    </form>
    <form action='index.php' method='POST'>
        <fieldset>
            <legend>USUARIO</legend>
            <input type="text" value="45" name="id" /><br />

            <fieldset>
                <legend>DADOS PESSOAIS</legend>
                Nome:<input type="text" name="nome" placeholder="Digite o seu nome" /><br />
                Sobrenome:<input type="text" name="sobrenome" placeholder="Digite o seu sobrenome" /><br />
            </fieldset>
        </fieldset>
        <fieldset>
            <legend>CONTATO</legend>
            Telefone:<input type="number" name="telefone" placeholder="Digite o seu telefone" /><br />
            Email:<input type="email" name="email" placeholder="Digite o seu email" /><br />
        </fieldset>
        <fieldset>
            <legend>ADICIONAIS</legend>
            data Nascimento:<input type="date" name="nascimento" placeholder="Digite o seu nascimento" /><br />
            Cor:<input type="color" name="cor" placeholder="Digite o seu cor preferida" /><br />
            Senha:<input type="password" name="senha" placeholder="Digite uma senha 6 digitos" /><br />
            Sexo:
            <input type="radio" name="sexo" value="M" /> MASCULINO
            <input type="radio" name="sexo" value="F" />FEMININO<br />
        </fieldset>
        <fieldset>
            <legend>CATEGORIAS</legend>
            CATEGORIAS:<br />
            <input type="checkbox" value="concordo" name="edital" /> LI E CONCORDO COM EDITAL<br />
            CATEGORIAS:<br />
            <input type="checkbox" value="A" name="cat[]" /> CARRO<br />
            <input type="checkbox" value="B" name="cat[]" /> MOTO<br />
            <input type="checkbox" value="C" name="cat[]" /> TRUCK<br />
        </fieldset>
        <fieldset>
            <legend>COMENTARIOS</legend>
            <textarea name="campo"></textarea>
        </fieldset>
        <fieldset>
            <select name="estado">
                <option value="-1">selecione</option>
                <option value="RS">RIO GRANDE DO SUL</option>
                <option value="SC">SANTA CATARINA</option>
                <option value="PR">PARANA</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>FINALIZAR</legend>
            <input type="submit" name="botaoSalvar" value="Salvar" />
            <input type="reset" name="limparFormulario" value="Limpar Formulário" /><br />

        </fieldset>


    </form>
    <form action='index.php' method='POST'>
        <input /><br />
        Nome:<input type="text" name="nome" placeholder="Digite o seu nome" /><br />
        Sobrenome:<input type="text" name="sobrenome" placeholder="Digite o seu sobrenome" /><br />
        Telefone:<input type="number" name="telefone" placeholder="Digite o seu telefone" /><br />
        Email:<input type="email" name="email" placeholder="Digite o seu email" /><br />
        data Nascimento:<input type="date" name="nascimento" placeholder="Digite o seu nascimento" /><br />
        Cor:<input type="color" name="cor" placeholder="Digite o seu cor preferida" /><br />
        Senha:<input type="password" name="senha" placeholder="Digite uma senha 6 digitos" /><br />
        Sexo:
        <input type="radio" name="sexo" value="M" /> MASCULINO
        <input type="radio" name="sexo" value="F" />FEMININO<br />
        CATEGORIAS:<br />
        <input type="checkbox" value="concordo" name="edital" /> LI E CONCORDO COM EDITAL<br />
        <input type="submit" name="botaoSalvar" value="Salvar" />
        <input type="reset" name="limparFormulario" value="Limpar Formulário" /><br />
        CATEGORIAS:<br />
        <input type="checkbox" value="A" name="cat[]" /> CARRO<br />
        <input type="checkbox" value="B" name="cat[]" /> MOTO<br />
        <input type="checkbox" value="C" name="cat[]" /> TRUCK<br />


    </form>
    <a type="button" class="btn btn-danger" href="http://127.0.0.1/PPPI2019/index.php">VOLTAR</a><br />
</body>

</html>