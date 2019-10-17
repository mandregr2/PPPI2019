<!DOCTYPE html>
<html>
    
<a href="http://127.0.0.1/PPPI2019/INDEX.PHP">VOLTAR</a><br />

<head>
    <title>Curriculum Vitade</title>
</head>
<style>
    .layoutTable1 {
        width: 100%;
        border-size: 5px;
        border-spacing: 2;
        border-collapse: discollapse;
        z-index: 6;
        height: 35px;
        justify-content: center;
        align-items: center -webkit-print-color-adjust: exact;
    }

    .container {
        background: #6C7A89;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center -webkit-print-color-adjust: exact;
    }
</style>

<body>
    <h2>DADOS CURRICULUM VITAE</h2>


    <form action='impressao.php' method='POST'>
        <fieldset>
            <legend>
                DADOS PESSOAIS
            </legend>
            <table class="layoutTable1">
                <thead>
                    <tr>
                        <td>Nome e nome do meio: </br><input type='text' size="70" name='nome' placeholder='Digite o seu nome' /></br></td>
                        <td>Sobrenome do Meio:</br> <input type='text' size="40" name='sobrenomeMeio' /></br></td>
                        <td>Sobrenome Final:</br> <input type='text' size="40" name='sobrenomeFinal' /></br></td>
                    </tr>
                    <tr>
                        <td>Data de Nascimento:</br> <input type='date' name='data' /></br></td>
                        <td colspan="2">Sexo:</br>
                            <input type='radio' name='sexo' checked value='F' /> Feminino
                            <input type='radio' name='sexo' checked value='M' /> Masculino</br></td>
                    </tr>
                </thead>
            </table>
        </fieldset>
        <fieldset>
            <legend>
                RESIDÊNCIA
            </legend>
            <table class="layoutTable1">
                <thead>
                    <tr>
                        <td colspan="2">Nome da Rua:</br> <input type='text' size="80" name='rua' /></br></td>
                        <td>Numero: </br><input type='text' name='ruaNumero' /></br></td>
                        <td>Complemento: </br><input type='text' size="40" name='ruaComplemento' /></br></td>
                    </tr>
                    <tr>
                        <td>Bairro:</br> <input type='text' name='bairro' /></br></td>
                        <td>Cidade:</br> <input type='text' name='cidade' /></br></td>
                        <td>Estado: </br><select name='estado'>
                                <option value=" ">Selecione</option>
                                <option value='RS'>RS</option>
                                <option value='SC'>SC</option>
                                <option value='PR'>PR</option>
                            </select></td>
                        <td>CEP:</br> <input type='number' maxlength="9" name='cep' /></br></td>
                    </tr>
                </thead>
            </table>
        </fieldset>
        <fieldset>
            <legend>
                DADOS DE CONTATO
            </legend>
            <table class="layoutTable1">
                <thead>
                    <tr>
                        <td>Telefone Fixo:</br> <input type='text' name='telefoneFixo' />
                        <td>Celular:</br> <input type='text' name='telefoneMovel' /></td>
                        <td>Telefone de Recado:</br> <input type='text' name='telefoneContato' /></td>
                        <td>Pessoa para Contato:</br> <input type='text' name='pessoaContato' />
                        </td>

                    </tr>
                    <tr>
                        <td colspan="4">E-mail:</br> <input type='email' name='email' /></td>
                    </tr>
                </thead>
            </table>
        </fieldset>
        <fieldset>
            <legend>
                DOCUMENTOS
            </legend>
            <table class="layoutTable1">
                <thead>
                    <tr>
                        <td>Carteira de Identidade:</br> <input type='text' name='rg' />
                        <td>CPF:</br> <input type='text' name='cpf' /></td>
                        <td>Carteira de Trabalho nº/Série/UF:</br> <input type='text' name='ctps' /></td>
                        <td>Número do PIS/PASEP:</br> <input type='text' name='pis' /></td>
                        <td>Título de Eleitor:</br> <input type='text' name='titulo' /></td>

                    </tr>
                    <tr>
                        <td>Carteira de Reservista:</br> <input type='text' name='reservista' /></td>
                        <td>CNH</br> <input type='text' name='cnh' /></td>
                        <td> Categoria da CNH:</br> <select name='cnhCat'>
                                <option value='-1'>Selecione</option>
                                <option value='A'> A</option>
                                <option value='B'>B</option>
                                <option value='AB'>AB</option>
                                <option value='C'>C</option>
                                <option value='AC'>AC</option>
                                <option value='D'>D</option>
                                <option value='AD'>AD</option>
                                <option value='E'>E</option>
                                <option value='AE'>AE</option>

                            </select>
                        </td>
                    </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>
                FORMAÇÃO
            </legend>
            <table class="layoutTable1">
                <thead>
                    <tr>
                        <td rowspan="3">Ano Inicio</br> <input size="5" type='text' name='formacaoAno1' /></td>
                        <td rowspan="3">Instituição</br> <input size="40" type='text' name='formacaoInstituicao1' /></td>
                        <td rowspan="3">Curso</br> <input size="60" type='text' name='FormacaoCurso1' /></td>
                    </tr>
                    <tr>
                        <td><input type='radio' name='FormacaoConclusao1' checked value='sim' /> concluido</td>
                    </tr>
                    <tr>
                        <td> <input type='radio' name='FormacaoConclusao1' checked value='nao' /> não concluido</br></td>
                    </tr>
                    <tr>

                    <tr>
                        <td rowspan="3">Ano Inicio</br> <input size="5" type='text' name='FormacaoAno2' /></td>
                        <td rowspan="3">Instituição</br> <input size="40" type='text' name='FormacaoInstituicao2' /></td>
                        <td rowspan="3">Curso</br> <input size="60" type='text' name='FormacaoCurso2' /></td>
                    </tr>
                    <tr>
                        <td><input type='radio' name='FormacaoConclusao2' checked value='sim' /> concluido</td>
                    </tr>
                    <tr>
                        <td> <input type='radio' name='FormacaoConclusao2' checked value='nao' /> não concluido</br></td>
                    </tr>
                    <tr>

                    <tr>
                        <td rowspan="3">Ano Inicio</br> <input size="5" type='text' name='FormacaoAno3' /></td>
                        <td rowspan="3">Instituição</br> <input size="40" type='text' name='FormacaoInstituicao3' /></td>
                        <td rowspan="3">Curso</br> <input size="60" type='text' name='FormacaoCurso3' /></td>
                    </tr>
                    <tr>
                        <td><input type='radio' name='FormacaoConclusao3' checked value='sim' /> concluido</td>
                    </tr>
                    <tr>
                        <td> <input type='radio' name='FormacaoConclusao3' checked value='nao' /> não concluido</br></td>
                    </tr>
                    <tr>

            </table>
        </fieldset>
        <fieldset>
            <legend>
                EXPERIÊNCIA PROFISSIONAL - ÚLTIMAS TRÊS
            </legend>
            <table class="layoutTable1">
                <thead>
                    <tr>
                        <td>Ano Inicio</br> <input size="5" type='text' name='ExperienciaAnoInicio1' /></td>
                        <td>Ano Fim</br> <input size="5" type='text' name='ExperienciaAnoFim1' /></td>
                        <td>Empresa</br> <input size="40" type='text' name='Experienciaempresa1' /></td>
                        <td>Função</br> <input size="60" type='text' name='ExperienciaFuncao1' /></td>
                    </tr>
                    <tr>
                        <td colspan="4"><textarea  cols="149" placeholder='Digite aqui as atividades exercidas:' name='ExperienciaAtividades1'></textarea>
                    </tr>
                    </tr>

                    <tr>
                        <td>Ano Inicio</br> <input size="5" type='text' name='ExperienciaAnoInicio2' /></td>
                        <td>Ano Fim</br> <input size="5" type='text' name='ExperienciaAnoFim2' /></td>
                        <td>Empresa</br> <input size="40" type='text' name='Experienciaempresa2' /></td>
                        <td>Função</br> <input size="60" type='text' name='ExperienciaFuncao2' /></td>
                    </tr>
                    <tr>
                        <td colspan="4"><textarea  cols="149" placeholder='Digite aqui as atividades exercidas:' name='ExperienciaAtividades2'></textarea>
                    </tr>
                    </tr>

                    <tr>
                        <td>Ano Inicio</br> <input size="5" type='text' name='ExperienciaAnoInicio3' /></td>
                        <td>Ano Fim</br> <input size="5" type='text' name='ExperienciaAnoFim3' /></td>
                        <td>Empresa</br> <input size="40" type='text' name='Experienciaempresa3' /></td>
                        <td>Função</br> <input size="60" type='text' name='ExperienciaFuncao3' /></td>
                    </tr>
                    <tr>
                        <td colspan="4"><textarea  cols="149" placeholder='Digite aqui as atividades exercidas:' name='ExperienciaAtividades3'></textarea>
                    </tr>
                    </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>
                PERFIL
            </legend>
            <table class="layoutTable1">
                <thead>
                    <tr>
                        <td colspan="4"><textarea rows='10' cols="149" placeholder='Digite aqui seu perfil Profissional:' name='perfil'></textarea>
                    </tr>

            </table>
        </fieldset>
        <fieldset>
            <legend>
                OBJETIVOS
            </legend>
            <table class="layoutTable1">
                <thead>
                    <tr>
                        <td colspan="4"><textarea rows='10' cols="149" placeholder='Digite aqui seus Objetivos:' name='objetivos'></textarea>
                    </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>
                CONFIRMAÇÃO
            </legend>
            <input type='checkbox' value='concordo' name='edital' /> As informações
            aqui prestadas são a expressão da verdade as quais sou responsável</br>
            <br />
            <input type='reset' value='Limpar' />
            <input type='submit' value='Salvar' />
        </fieldset>
    </form>

</body>
<a href="http://127.0.0.1/PPPI2019/INDEX.PHP">VOLTAR</a><br />

</html>