<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <form action="" method="post">
        pesquise aqui:<input type="text">
        <input type="submit">
    </form>
</body>
</html>

<?php
include("conexao.php");

    if(!isset($_POST['busca'])){
        echo"Nenhum resultado encontrado";        
    }else{
        $pesquisa = $mysqli->real_escape_string($_POST['busca']);
        $sql = "SELECT * FROM cicted WHERE produtos LIKE '%$pesquisa%' OR categoria LIKE '%$pesquisa%'";
        $sql_query = $mysqli->query($sql) or die("ERRO ao pesquisar!" . $mysqli->error);
    

        if($sql_query->num_rows == 0){
            echo"Nenhum resultado encontrado!";
        }else{
            while($dados = $sql_query->fetch_assoc()){
                echo$dados['produtos']. "<br>";
                echo$dados['categoria'];
            }
        }
    }
?>



