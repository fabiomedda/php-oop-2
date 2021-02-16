<?php
/*
Istruzioni:
Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati.

Bonus (non tanto facoltativo):
Una volta finita la classe User, pensate a che altre entitá possiamo avere in un sistema di Blogging oltre all'utente.
Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
Create nel diagramma anche le altre entitá e definite per ciascuna le rispettive classi con proprietá e metodi.
*/

include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/Article.php';


$fabio = new User('Fabio', 'crow', 'fabio@gmail.com');
$fabio->setPassword('sdfiuhgi');

$mario = new User('Mario', 'asd', 'mario@gmail.com');
$mario->setPassword('hbdfhfdgh');

$franco = new User('Franco', 'jyff', 'franco@gmail.com');
$franco->setPassword('htwrfzc');

$rodolfo = new User('Rodolfo', 'nyo', 'rodolfo@gmail.com');
$rodolfo->setPassword('vrtweff');

$leopoldo = new User('Leopoldo', 'kryo', 'leopoldo@gmail.com');
$leopoldo->setPassword('jtrertgd');

$users = [$fabio, $mario, $franco, $rodolfo, $leopoldo];

$article1 = new Article('Fabio', 'crow', 'Cyber security, i nuovi rischi e le strategie di difesa', 'tecnologia', '12/05/2020');
$article2 = new Article('Mario', 'asd', 'Oggetti alieni sulla Terra, risultati degli studi Nasa', 'scienza', '11/11/2020');
$article3 = new Article('Franco', 'jyff', 'Microsoft e SpaceX si alleano. Nasce Azure Space, il cloud delle stelle', 'tecnologia', '07/10/2020');
$article4 = new Article('Rodolfo', 'nyo', 'Le notizie di scienza della settimana', 'scienza', '05/03/2020');
$article5 = new Article('Leopoldo', 'kryo', 'Il populismo della Silicon valley', 'tecnologia', '20/01/2020');

$articles = [$article1, $article2, $article3, $article4, $article5];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
    <style>
        body {
            background-color: rgb(100, 100, 100);
        }

        section {
            display: flex;
            flex-wrap: wrap;
        }

        .box {
            padding: 25px;
        }
    </style>
</head>

<body>

    <section>

        <?php
        foreach ($users as $user) {
        ?>
            <div class="box">
                <h2>Name: <?php echo $user->name ?></h2>
                <h2>Surname: <?php echo $user->username ?></h2>
                <h2>Email: <?php echo $user->email ?></h2>
                <h2>Password: <?php echo $user->getPassword() ?></h2>
            </div>
        <?php
        }
        ?>

    </section>

    <section>

        <?php
        foreach ($articles as $article) {
        ?>
            <div class="box">
                <h2><?php echo $article->name ?></h2>
                <h2><?php echo $article->createdBy ?></h2>
                <h2><?php echo $article->title ?></h2>
                <h3><?php echo $article->category ?></h3>
                <h4><?php echo $article->date ?></h4>
            </div>
        <?php
        }
        ?>

    </section>

</body>

</html>