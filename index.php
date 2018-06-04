<?php
require ('controller.php');

if(isset($_GET['action'])){
    if($_GET['action'] == 'ajouter') {
        postArticle();
    }
}

lireArticle();
//lindex.php appel tout le temps lireArticle, sans aucune condition
//puis lireArticle appel readArticle et cette derniere require la VIEW
// donc je vais forcement, sans condition avoir la VIEW

