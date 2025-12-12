<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookwise</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            padding: 20px 40px;
        }

        header {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #c3c3c3;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        /* sessão explorar livro */
        #explorar-livro {
            display: flex;
            justify-content: space-between;
        }

        /* sessão lista livros */
        #lista-livros {
            margin-top: 40px;
            display: grid;
            grid-template-columns: auto;
            gap: 20px;
        }

        .card-livro {
            display: flex;
            gap: 40px;
            margin-bottom: 20px;
        }

        .card-livro-conteudo {
            border: 1px solid #c3c3c3;
        }   

        /* layout responsivo */
        @media (min-width: 576px) {
            #lista-livros {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (min-width: 768px) {
            #lista-livros {
                grid-template-columns: 1fr 1fr 1fr;
            }
        }
    </style>
</head>
<body>
    <header class="container">
        <div>Bookwise</div>
        <nav>
            <ul>
                <li>
                    <a href="/">Explorar</a>
                </li>
                <li>
                    <a href="/meus-livros.php">Meus Livros</a>
                </li>
            </ul>
        </nav>
        <div>
            <a href="/login.php">Login</a>
        </div>
    </header>
    <main class="container">
        <?php require "views/{$view}.view.php"; ?>
    </main>
</body>
</html>