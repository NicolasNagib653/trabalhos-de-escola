<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de cadastro</title>
</head>
<body>
    <form action="#" method="POST">
        Nome do produto:<input type="text" name="nome" value="nome">
        <br>Preço:<input type="number" step="0.01" name="preco" value="preco">
        <br>Descrição:<input type="text" name="descricao" value="descricao">
        <br><input type="submit">
    </form>
</body>
</html>

<?php
    include("conexao.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $nomeup = strtoupper($nome);
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];

        function verificar_produto($nomeup,$descricao){
            $produtos_proibidos = ['DROGA', 
            'MACONHA', 
            'COCAINA', 
            'ARMA', 
            'NARCÓTICO', 
            'ARMA DE FOGO', 
            'EXPLOSIVO', 
            'PIRATARIA',
            'MOEDA FALSIFICADA', 
            'PORNOGRAFIA', 
            'ÓRGÃOS HUMANOS',
            'VENENO', 
            'AGROTÓXICO PROIBIDO', 
            'DOCUMENTO FALSO'];

            foreach($produtos_proibidos as $item){
                if(stripos($item, $nomeup) !== false || stripos($item, $descricao) !== false){
                    return false;
                }
                    
            }
            return true;     

        }

        if(verificar_produto($nome, $descricao)){
            $sql = $conn->prepare("INSERT INTO produtos (nome, descricao, preco) VALUES (?, ?, ?)");

            if ($sql === false) {
                die("Erro na preparação da consulta: " . $conn->error);
            }

            // Bind dos parâmetros
            $sql->bind_param("ssd", $nome, $descricao, $preco); // s = string, d = double        

            if($sql->execute() === true){
                echo"Produto cadastrado com sucesso!";
            }else{
                echo"ERRO! Este produto não pode ser cadastrado!". $conn->error;
            }
        }else{
            echo"ERRO! Este produto não pode ser cadastrado pois é um item proibido!";
        }
        $conn->close();
    }
?>