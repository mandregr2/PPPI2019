<!DOCTYPE html>
<html>
    <a href="http://127.0.0.1/PPPI2019/aulas/aulas.html">VOLTAR</a><br/>

    <head>
        <title>Curriculum Vitade</title>
    </head>
    <body>
        <h1>DADOS CURRICULUM VITAE</h1>


        <form action='impressao.php' method='POST'>
            <fieldset>
                <legend>
                    Dados Pessoais
                </legend>

                Nome e nome do meio: <input type='text' name='nome' placeholder='Digite o seu nome'/>
                <br/>
                Sobrenome do Meio: <input type='text'  name='sobrenomeMeio'/>
                <br/>
                Sobrenome Final: <input type='text'  name='sobrenomeFinal'/>
                <br/>
                Selecione uma imagem: <input name="arquivo" type="file" />
                <br />
                Nome da Rua: <input type='text'  name='rua'/>
                <br/>
                Numero: <input type='text'  name='ruaNumero'/>
                <br/>
                Bairro: <input type='text'  name='bairro'/>
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