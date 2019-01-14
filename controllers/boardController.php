<?php
require_once('helper.php');

// initialisation de l'instance de base de données

$bdd = dbConnect('splists', 'root','', 3308);


$req = $bdd->query('SELECT * FROM lists');

$lists = [];

while ($donnees = $req->fetch()) {

    $lists[] = $donnees;
    
}


$req->closeCursor();

// cas où je reçois une variable POST de _form_list: je crée une liste
if(!empty($_POST['list-title'])) {


// création d'une nouvelle liste

    $req = $bdd->prepare("INSERT INTO lists(title) VALUES(:title)");
    $req->execute([
        "title"=> $_POST['list-title']
    ]);

    Header('Location: /splists/views/board.php?list=' . $bdd->lastInsertId());
}

// lecture d'une liste

function getLIst($idList) {

    $bdd = dbConnect('splists', 'root', '', 3308);

    $request = ("SELECT * FROM lists WHERE id= " . $idList);

    $response = $bdd->query($request);

    $liste = $response->fetch();

    return $liste;
}