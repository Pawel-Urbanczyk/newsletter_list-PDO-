<?php
session_start();

if(isset($_SESSION['logged_id'])){
    header('Location: list.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Panel administracyjny</title>
    <meta name="description" content="Używanie PDO - odczyt z bazy MySQL">
    <meta name="keywords" content="php, kurs, PDO, połączenie, MySQL">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <!--[if lt IE 9]
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    ![endif]-->
</head>
<body>
    <header>
        <h1>Admin</h1>
    </header>

    <main>
        <article>
            <form method="post" action="list.php">
                <div>
                    <label>Login: </label>
                    <input type="text" name="login">
                </div>
                <div>
                    <label>Hasło: </label>
                    <input type="password" name="pass">
                </div>
                <div>
                    <input type="submit" value="Zaloguj się!">
                </div>

                <?php
                if(isset($_SESSION['bad_attempt'])){
                    echo'
                        <p>Niepoprawne dane logowania!</p>  
                        ';
                    unset($_SESSION['bad_attempt']);
                }

                ?>

            </form>
        </article>
    </main>
</body>
</html>