<!DOCTYPE html>
<html>
<head>
    <title>Wonderful Blog</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <img src="https://cdn1.iconfinder.com/data/icons/softwaredemo/PNG/256x256/Pencil3.png" class="img-responsive center-block" alt="">
        </div><!--.col -->
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
                <button name=ok type="submit" class="btn btn-info" onclick="writeComment()">Valider</button>
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
    <th>Titre</th>
    <th>Contenu</th>
    <th>Illustration</th>
    </thead>
<?php
while($lire=$articles->fetch()){ ?>

            <tr>
            <td><?php echo $lire['titre'];?> </td>
            <td><?php echo $lire['contenu'];?> </td>
            <td> <img class="col-md-8" src="<?php echo $lire['image']?>";> </td>
            </tr>
<?php }
$articles->closeCursor();

?>
</table>
</div>
<!--rentre dans le tableau lire, va chercher la clef 'titre' et affiche (ca c le echo) la valeur de la clef-->


</body>

</html>
