<?php
if (isset($_POST['submit'])) {
    include_once ('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];


    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cep,cidade,estado,endereco,senha) 
        VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cep','$cidade','$estado','$endereco','$senha')");

    
}







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="icone" rel="shortcut icon" href="icon.png" /> 
    <title>Tela de Cadastro</title>
    <style>
        body {
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -30%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }

        #link2 {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: white;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>

<body><br><br><br>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Tela de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label><br><br>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser" required>
                    <label for="cep" class="labelInput">CEP</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>

                <br><br>
                <input type="submit" name="submit" id="submit"><br><br>
                <a id="link2" href="index.php">Já tem um cadastro? Clique aqui para logar</a>
            </fieldset>
        </form>
    </div>
    <script>
        'use strict';

        const limparFormulario = (endereco) => {
            document.getElementById('endereco').value = '';
            document.getElementById('cidade').value = '';
            document.getElementById('estado').value = '';
        }


        const preencherFormulario = (endereco) => {
            document.getElementById('endereco').value = endereco.logradouro;
            document.getElementById('cidade').value = endereco.localidade;
            document.getElementById('estado').value = endereco.uf;
        }


        const eNumero = (numero) => /^[0-9]+$/.test(numero);

        const cepValido = (cep) => cep.length == 8 && eNumero(cep);

        const pesquisarCep = async () => {
            limparFormulario();

            const cep = document.getElementById('cep').value.replace("-", "");
            const url = `https://viacep.com.br/ws/${cep}/json/`;
            if (cepValido(cep)) {
                const dados = await fetch(url);
                const endereco = await dados.json();
                if (endereco.hasOwnProperty('erro')) {
                    document.getElementById('endereco').value = 'CEP não encontrado!';
                } else {
                    preencherFormulario(endereco);
                }
            } else {
                document.getElementById('endereco').value = 'CEP incorreto!';
            }

        }

        document.getElementById('cep')
            .addEventListener('focusout', pesquisarCep);
    </script>
</body>

</html>