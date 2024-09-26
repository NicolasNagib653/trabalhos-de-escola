<?php
include("conexao.php");
$sql = "SELECT * FROM cicted_proibidos WHERE produtos LIKE '%$pesquisa%' OR categoria LIKE '%$pesquisa%'";
$sql_query = $mysqli->query($sql) or die($mysqli->error);
$sql_query->fetch_assoc()
?>