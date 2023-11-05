<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Czipsotronik</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
        <meta name="description" content="Oficjalna strona sieci sklepów Czipsotronik. Informacje o produktach, ofertach promocyjnych, pracownikach i kontach klientów.">
        <meta name="author" content="Aleksy Butja">
        <meta name="keywords" content="Czipsy, Sklep, Tanio">
    </head>
    <body>
        <header>
            <h2>Czipsotronik</h2>
        </header>
        <nav>
            <a href="index.html">Główna</a>
            <a href="index_produkty.html">Produkty</a>
            <a href="index_log.php">Logowanie</a>
            <a class="wybrany" href="index_rej.php">Rejestracja</a>
        </nav>
        <aside>
            
        </aside>
        <main>
        <form method="post" action="phpy/register.php">
                Nazwa użytkownika: <br>
                <input type="text" name="login"><br>
                Hasło: <br>
                <input type="password" name="haslo"><br>
                <input type="submit">
            </form>

            <?php
            include("phpy/register.php");
            ?>

        </main>
    </body>

</html>
