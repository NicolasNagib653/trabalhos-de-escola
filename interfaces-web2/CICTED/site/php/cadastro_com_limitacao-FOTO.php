<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de cadastro</title>
</head>
<body>
    <form action="cadastro_com_limitacao-FOTO.php" method="post" enctype="multipart/form-data">
        <h1>Insira seu produto abaixo:</h1>
        Nome do produto:<input type="text" name="nome" value="">
        <br>Preço:<input type="number" step="0.01" name="preco" value="">
        <br>Descrição:<input type="text" name="descricao" value="">
        <h3>Coloque a foto do seu produto:</h3>
        <input type="file" name="imagem"><br>
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>

<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['enviar']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK){

        $nome = $_POST['nome'];
        $nomeup = strtoupper($nome);
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];

    function verificar_produto($nomeup,$descricao){
        $produtos_proibidos = ['DROGA', 
        'MACONHA', 
        'COCAINA', 
        'ARMA', 
        'ANÃO',
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
            if(stripos($nomeup, $item) !== false || stripos($descricao, $item) !== false){
                return false;
            }
                
        }
        return true;     

    }

    //verificação do produto
    if(verificar_produto($nomeup, $descricao)){
        $sql = $conn->prepare("INSERT INTO produtos (nome, descricao, preco) VALUES (?, ?, ?)");

        if ($sql === false) {
            die("Erro na preparação da consulta: " . $conn->error);
        }

        // segurança SQL
        $sql->bind_param("ssd", $nome, $descricao, $preco); # s = string, d = double        

        if($sql->execute() === true){
            echo"$nome, R$$preco<br> $descricao<br>";
            echo"Produto cadastrado com sucesso!<br>";
        }else{
            echo"ERRO! Este produto não pode ser cadastrado!". $conn->error;
        }
    }else{
        echo"ERRO! Este produto não pode ser cadastrado pois é um item proibido!";
    }

    // FOTO
        // Tipo
        $tipo_foto = ['image/jpeg', 'image/png', 'image/webp'];
        $tipo_arquivo = mime_content_type($_FILES['imagem']['tmp_name']);

        if(!in_array($tipo_arquivo, $tipo_foto)){
            echo"ERRO: Apenas arquivos JPEG, PNG ou WEBP são permitidos.";
            exit();
        }
        // Tamanho
        $tam_max = 1024 * 1024 * 2; #2MB

        if($_FILES['imagem']['size'] > $tam_max){
            echo"Tamanho limite ultrapassado! Tamanho máximo de arquivos até 2MB.";
            exit();
        }
        // Pasta 
        $pasta_foto = "foto/";
        if(!is_dir($pasta_foto)){
                mkdir($pasta_foto, 0775, true);
        }

        $caminho_imagem = $pasta_foto . uniqid() . "-" . basename($_FILES['imagem']['name']);
        #foto/1-exemplo.png

        // mover arquivo
        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_imagem)){

        // segurança        
        $sql = $conn->prepare("INSERT INTO foto (caminho_imagem) VALUES (?)");

        if ($sql === false) {
            die("Erro na preparação da consulta: " . $conn->error);
        }

        $sql->bind_param("s", $caminho_imagem);       
    
        if($sql->execute() === true){      
            echo"Produto cadastrado com sucesso!";
        }else{
                echo"ERRO! Erro ao cadastrar imagem." .$conn->error;
            }

            $sql->close();

        }else{
            echo"ERRO!". $conn->error;
        }

    //exibir as fotos
        $resultado = $conn->query("SELECT * FROM foto");
        if($resultado->num_rows > 0){
            while ($row = $resultado->fetch_assoc()) {
                echo'<img src="'. $row['caminho_imagem'] .'" alt="Foto Carregada"style="width: 200px; height; 200px;"></img> ';
            } 
        }else{
            echo'Nenhuma foto encontrada!';
            }
}


$conn->close();
}
?>