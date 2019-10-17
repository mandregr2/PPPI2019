<!DOCTYPE html>
<html>
    <!-- Required meta tags -->
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstdap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<a type="button" class="btn btn-danger" href="http://127.0.0.1/PPPI2019/index.php">VOLTAR</a><br />

    <head>
        <title>Formulários</title>
    </head>
    <body>
        <h1>Formulários</h1>


        <form action='index.php' method='POST'>
            <input type='hidden' value='45' name='id'/>
            <fieldset>
                <legend>
                    Dados Pessoais
                </legend>

                Nome: <input type='text' value='Thyago' name='nome' placeholder='Digite o seu nome'/>
                <br/>
                Sobrenome: <input type='text' value='Salvá' name='sobrenome'/>
                <br/>
                E-mail <input type='email' disabled name='email'/>
                <br/>
                Senha <input type='password' value='' name='senha'/>
                <br/>
                Sexo: 
                <input type='radio' name='sexo' checked value='F'/> Feminino
                <input type='radio' name='sexo' checked  value='M'/> Masculino

            </fieldset>
            <fieldset>
                Número <input type='number' name='numero'/>
                <br/>
                Data de Nascimento <input type='date' name='data'/>
                <br/>
                Cor <input value='#00ff00' type='color' name='cor'/>
                <br/>

            </fieldset>
            <fieldset>
                <input type='checkbox' value='concordo' name='edital'/> Li e concordo com o edital;


                <br/>

                Categorias:<br/>
                <input type='checkbox' name='cat[]' value='CR'/> Carros<br/>

                <input type='checkbox' checked name='cat[]' value='CS'/> Casas<br/>

                <input type='checkbox' checked name='cat[]' value='OU'/> Outra<br/>




                <textarea placeholder='digite aqui' name='texto'></textarea>

            </fieldset>



            Estado: <select name='estado'>
                <option value='-1'>Selecione</option>
                <option value='RS'>Rio Grande do Sul</option>
                <option value='SC'>Santa Catarina</option>
                <option value='PR'>Paraná</option>
            </select>













            <fieldset>




                <input type='reset' value='Limpar'/>
                <input type='submit' value='Salvar'/>
            </fieldset>
        </form>

    </body>
    <a type="button" class="btn btn-danger" href="http://127.0.0.1/PPPI2019/index.php">VOLTAR</a><br />

</html>