<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>login</title>
</head>

<body onload="mostrar()" class="active">
    <main>
        <div class="logo">
            <img src="../img/Imagem1.png" alt="" style="width: 70px;">
            <h1>StartUP Creativity</h1>
        </div>
        <div class="flipper-container">
            <div class="flipper">
                <div id="login">
                    <div class="rotate-bg"></div>
                    <form action="javaScript:alert('Login Realizado com sucesso!'); location.href='../index.html'">
                        <h2>Login</h2>
                        <div class="campo">
                            <input type="email" id="emalog" required>
                            <label for="emalog"> <span class="material-symbols-outlined icon">mail</span> Email</label>
                        </div>
                        <div class="campo">
                            <input type="password" id="senhlog" required>
                            <label for="senhlog"><span class="material-symbols-outlined icon">lock</span> Senha</label>
                        </div>
                        <button  id="botaoLogin">
                            <div class="rotate-bg"></div>
                            <span>Enviar</span>
                        </button>
                        <p>Não tem uma conta ainda? <span onclick="cadastro()">Crie uma!</span></p>
                    </form>
                    <div class="texto">
                        <h2>Bem-vindo de volta!</h2>
                    </div>
                </div>
                <div id="cadastro">
                    <div class="rotate-bg"></div>
                    <form action="javaScript:alert(`Cadastro Realizado com sucesso! bem-vindo ${nomcad.value}`); location.href='../index.html'">
                        <h2>Cadastro</h2>
                        <div class="campo">
                            <input type="text" id="nomcad" required>
                            <label for="nomcad"><i class="bi bi-person"></i> Nome de Usuário</label>
                        </div>
                        <div class="campo">
                            <input type="telcad" id="telcad" required>
                            <label for="telcad"><i class="bi bi-telephone"></i> Número de telefone</label>
                        </div>
                        <div class="campo">
                            <input type="email" id="emacad" required>
                            <label for="emacad"> <span class="material-symbols-outlined icon">mail</span> Email</label>
                        </div>
                        <div class="campo">
                            <input type="password" id="senhcad" required>
                            <label for="senhcad"><span class="material-symbols-outlined icon">lock</span> Senha</label>
                            <i class="bi bi-eye sen" onclick="mostrarSenha()" id="mosCad"></i>
                        </div>
                        <div class="campo">
                            <input id="esccad" list="escolas" required>
                            <label for="esccad"><span class="material-symbols-outlined icon">school</span> Instituição
                                de ensino</label>
                            <datalist id="escolas">
                            </datalist>
                        </div>
                        <button type="submit" id="botaoCadastro">
                            <div class="rotate-bg"></div>
                            <span>Cadastrar</span>
                        </button>
                        <p>Já tem uma conta? <span onclick="cadastro()">Acesse já</span></p>
                    </form>
                </div>
                <footer></footer>
            </div>
        </div>

    </main>

    <script src="../JS/trocar.js"></script>
    <script src="../JS/escolas.js"></script>
    <script>
       
    </script>

</body>

</html>

<?php
     include("conexao.php");


     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nomcad'];
        $telefone = $_POST['telcad'];
        $email = $_POST['emacad'];
        $instituicao_de_ensino = $_POST['esccad'];
        $senha = $_POST['senhcad'];

    //  $sql = "INSERT INTO usuario (nome, telefone, email, instituicao_de_ensino) VALUES";
    //  $sql_query = $conn->query($sql) or die("ERRO ao pesquisar!" . $conn->error);

        $sql = $conn->prepare("INSERT INTO usuario (nome, telefone, email, instituicao_de_ensino)VALUES (?, ?, ?, ?, ?)");

        if ($sql === false) {
            die("Erro na preparação da consulta: " . $conn->error);
        }

        // Bind dos parâmetros
        $sql->bind_param("ssd", $nome, $telefone, $email, $instituicao_de_ensino, $senha);

        if($sql->execute() === true){
            echo"Cadastro realizado com sucesso!";
        }else{
            echo"ERRO! Erro ao cadastrar!". $conn->error;
        }

        $conn->close;
    }
?>