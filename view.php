<!DOCTYPE html>
<html>
<head>
    <title>Wonderful Blog</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8">
    <title>360&deg; Image</title>
    <meta name="description" content="360&deg; Image - A-Frame">
    <script src="aframe-master.js"></script>
    <style>
        table {
            background-color: #d0e9c6;
        }
        body {
            background-attachment: fixed;
        }

    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <img src="https://cdn1.iconfinder.com/data/icons/softwaredemo/PNG/256x256/Pencil3.png" class="img-responsive center-block" alt="">
        </div>
        <div class="col-md-8">
            <h3>Ecrivez votre article !</h3>
            <form name="articleform" method="post" action="index.php?action=ajouter" >
                <label>Titre:</label>
                <input type="text" name="titre" class="form-control" placeholder="Titre">
                <br>
                <label>Votre Article:</label>
                <textarea name="article" class="form-control" placeholder="Ecrivez votre article"></textarea>
                <br>
                <label>URL IMAGE:</label>
                <input type="text" name="image" class="form-control" placeholder="URL Image">
                <br>
                <button name='ok' type="submit" class="btn btn-info">Valider</button>
            </form>
        </div>
    </div>
</div>

<div class="container">

    <h3>List des derniers articles : </h3>

</div>

<div class="container">
<table class="table table-bordered table-striped carousel-inner">
    <thead>
    <th>ID</th>
    <th>Titre</th>
    <th>Contenu</th>
    <th>Illustration</th>
    </thead>
<?php
while($lire=$articles->fetch()){ ?>

            <tr>
            <td><?php echo $lire['id'];?> </td>
            <td><a href="?action=voirArticle&id=<?=$lire['id']?>"><?php echo $lire['titre'];?></a></td>
            <td><?php echo $lire['contenu'];?> </td>
            <td> <img class="col-md-6" src="<?php echo $lire['image']?>";> </td>
            </tr>
<?php }
$articles->closeCursor();


    echo $comments['commentaire'];
?>

</table>


    <!--
    <iframe>
    <div>
        <a-scene>
            <a-sky class="col-md-4" src="image360.jpg" rotation="0 -130 0"></a-sky>

            <a-text font="kelsonsans" value="Jte KIFF ASHEM !!!!" width="6" position="-2.5 0.25 -1.5"
                    rotation="0 15 0"></a-text>
        </a-scene>
    </div>
    </iframe>

    <!--rentre dans le tableau lire, va chercher la clef 'titre' et affiche (ca c le echo) la valeur de la clef-->


</body>

</html>
