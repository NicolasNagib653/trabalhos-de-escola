<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartUp</title>
    <link rel="stylesheet" href="CSS/style.css">

    <!-- Links externos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body onload="desativarHamburguer()"> 
    <header>
        <nav>
            <div id="hamburguer" onclick="hamburguer()">
                <span></span> <span></span> <span></span>
            </div>
            <img src="img/Imagem1.png" alt="">
            <div class="logo">
            </div>
            <div class="nome">StartUp Creativity</div>
        </nav>
        <div id="links">
            <a href="#"><div>Home</div></a>
            <a href="paginas/sobre.html"><div>Sobre</div></a>
            <a href="paginas/contato.html"><div>Contato</div></a>
            <a href="paginas/login.html" class="user"><div><i class="bi bi-person-fill"></i></div></a>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="img"></div>
        </div>
        
        
        <h1>Catálogo</h1>

        <div class="produtos">
            <div class="card">
                <div class="img">
                    <img src="img/maracuja.jpg" alt="">
                    <h2>Brigadeiro</h2>
                </div>
                <div class="texto">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium adipisci voluptatum non nam tempore natus repellendus molestias dicta dolores. Quis similique itaque labore unde ut, qui laudantium dolore voluptates repellat? </p>
                    <button>Acessar</button>
                </div>
            </div>

            <div class="card">
                <div class="img">
                    <img src="img/maracuja5.webp" alt="">
                    <h2>Pão</h2>
                </div>
                <div class="texto">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum totam illo mollitia maiores suscipit sapiente. Ipsam facilis perferendis eveniet voluptates, nobis fugit, quae libero dignissimos accusamus, unde dolores laboriosam? Ab? </p>
                    <button>Acessar</button>
                </div>
            </div><div class="card">
                <div class="img">
                    <img src="img/maracuja4.jpg" alt="">
                    <h2>Mousse</h2>
                </div>
                <div class="texto">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum totam illo mollitia maiores suscipit sapiente. Ipsam facilis perferendis eveniet voluptates, nobis fugit, quae libero dignissimos accusamus, unde dolores laboriosam? Ab? </p>
                    <button>Acessar</button>
                </div>
            </div><div class="card">
                <div class="img">
                    <img src="img/maracuja1.jpg" alt="">
                    <h2>Suco</h2>
                </div>
                <div class="texto">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum totam illo mollitia maiores suscipit sapiente. Ipsam facilis perferendis eveniet voluptates, nobis fugit, quae libero dignissimos accusamus, unde dolores laboriosam? Ab? </p>
                    <button>Acessar</button>
                </div>
            </div><div class="card">
                <div class="img">
                    <img src="img/maracuja.jpeg3.avif" alt="">
                    <h2>Torta</h2>
                </div>
                <div class="texto">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum totam illo mollitia maiores suscipit sapiente. Ipsam facilis perferendis eveniet voluptates, nobis fugit, quae libero dignissimos accusamus, unde dolores laboriosam? Ab? </p>
                    <button>Acessar</button>
                </div>
            </div><div class="card">
                <div class="img">
                    <img src="img/maracuja6.jpg" alt="">
                    <h2>Salmão</h2>
                </div>
                <div class="texto">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum totam illo mollitia maiores suscipit sapiente. Ipsam facilis perferendis eveniet voluptates, nobis fugit, quae libero dignissimos accusamus, unde dolores laboriosam? Ab? </p>
                    <button>Acessar</button>
                </div>
            </div>

        </div>

    </main>

    <footer>

    </footer>

    <script src="JS/menu_hamburguer.js"></script>
<?php
    include("site/conexao.php")
?>
</body>
</html>