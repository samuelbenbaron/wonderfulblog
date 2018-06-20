<?php
require ('model.php');


    function postArticle()
    {
        //if (isset($_POST['ok'])) {
        $titre = $_POST['titre'];
        $article = $_POST['article'];
        $image = $_POST['image'];
        addArticle($titre, $article, $image);
        header('Location: index.php');
        //require ('view.php');


        //if ($article === false) {
        //    die('Impossible d\'ajouter l\'article !');
        //}
    }

    function lireArticle(){
        $articles=readArticle();
        require('view.php');
    }

    function lireComment(){
        $comments=readComment();
        require('view.php');
}