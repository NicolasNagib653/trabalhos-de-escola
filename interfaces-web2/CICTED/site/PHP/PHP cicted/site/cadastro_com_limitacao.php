<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste de login</title>
</head>
<body>
    <form action="cadastro_com_limitacao.php" method="post">
        <h1>Cadastrar produto:</h1>
        nome do produto<input type="text" name="nome" value="nome"><br>
        Preço do produto<input type="text" name="preco" value="preco"><br>
        descrição de pproduto<input type="text" name="descricao" value="descricao"><br><input type="submit">
    </form>
</body>
</html>

<?php
    include("conexao.php");
    
    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
    $preco = trim($_POST['preco']);

    function verificar_produto($nome,$descricao){
        $produtos_proibidos = ['droga', 'maconha', 'cocaina', 'arma', 'narcótico', 'arma de fogo', 'explosivo', 'pirataria',
        'moeda falsificada', 'pornografia', 'órgãos humanos',
        'veneno', 'agrotóxico proibido', 'documento falso'];

        foreach($produtos_proibidos as $item){
            if(stripos($nome, $item) !== false || stripos($descricao, $item) !== false){
                return false;
            }
             
        }
        return true;     
    
    }

    if(verificar_produto($nome, $descricao)){
        $sql = $conexao->prepare("INSERT INTO produtos (nome, descricao, preco) VALUES (?, ?, ?)");

        if ($sql === false) {
            die("Erro na preparação da consulta: " . $conexao->error);
        }

        // Bind dos parâmetros
        $sql->bind_param("ssd", $nome, $descricao, $preco); // s = string, d = double        

        if($sql->execute() === true){
            echo"Produto cadastrado com sucesso!";
        }else{
            echo"ERRO! Este produto não pode ser cadastrado!". $conexao->error;
        }
    }else{
        echo"ERRO! Este produto não pode ser cadastrado pois é um item pribido!";
    }
    $conexao->close();
?>