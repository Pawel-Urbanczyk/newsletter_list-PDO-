<?php
session_start();
require_once 'database.php';

if(isset($_POST['email'])){

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    if(empty($email)){
        $_SESSION['given_email'] = $_POST['email'];
        header('Location: index.php');
        }else{
            $query = $db->prepare('INSERT INTO USERS VALUES (NULL, :email)');
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query-> execute();
        }

    }else{

        header('Location: index.php');
        exit();
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>

    <meta charset="utf-8">
    <title>Zapisanie się do newslettera</title>
    <meta name="description" content="Używanie PDO - zapis do bazy MySQL">
    <meta name="keywords" content="php, kurs, PDO, połączenie, MySQL">

    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <!--[if lt IE 9]
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>!
    [endif]-->

</head>
<body>
    <div class="container">
        <header>
            <h1>Newsletter</h1>
        </header>
    </div>

    <main>
        <article>
            <p>Pomyślnie twój Email został do listy newslettera!</p>
        </article>
    </main>
</body>
</html>