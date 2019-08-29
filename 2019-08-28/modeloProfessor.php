<!DOCTYPE html>
<html>
    <a href="http://127.0.0.1/PPPI2019/aulas/aulas.html">VOLTAR</a><br/>

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
    <a href="http://127.0.0.1/PPPI2019/aulas/aulas.html">VOLTAR</a><br/>

</html>