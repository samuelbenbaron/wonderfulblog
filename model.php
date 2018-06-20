<?php
function dbConnect() {
    try{
        $db = new PDO('mysql:host=localhost;dbname=exoblog;charset=utf8', 'root', 'root');
        return $db;
    }
    catch (Exception $e) {
        die('Erreur :' .$e->getMessage());
    }
}


function addArticle($titre, $article, $image){
    $db=dbConnect();
    $req = $db->prepare('INSERT INTO article (titre, contenu, date_creation, image) VALUES (:titre, :article, NOW(), :image)');
    $req -> execute(array('titre' => $titre, 'article' => $article, 'image' => $image));
}

 function readArticle(){
    $db=dbConnect();
    $req=$db->query('SELECT * FROM article');
    return $req;
}

function readComment(){
    $db=dbConnect();
    $read=$db->query('SELECT * FROM commentaire');
    return $read;
}