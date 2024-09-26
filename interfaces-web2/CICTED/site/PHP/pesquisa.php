<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <form action="#" method="post">
        pesquise aqui:<input type="text" name="busca">
        <input type="submit">
    </form>
</body>
</html>

<?php
include("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!isset($_POST['busca'])){
        echo"Nenhum resultado encontrado";        
    }else{
        $pesquisa = $conn->real_escape_string($_POST['busca']);
        $sql = "SELECT * FROM produtos WHERE nome LIKE '%$pesquisa%'";
        $sql_query = $conn->query($sql) or die("ERRO ao pesquisar!" . $conn->error);
    

        if($sql_query->num_rows == 0){
            echo"Nenhum resultado encontrado!";
        }else{
            while($dados = $sql_query->fetch_assoc()){
                echo$dados['nome']. "<br>";
            }
        }
    }
}
?>



