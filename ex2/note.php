<!doctype html>
<?php if (isset($_POST["note"])&&!isset($_COOKIE["note"])){
    setcookie ("note", $_POST["note"], time()+60*2 );}
?>
<html lang="en">
<head>
    <link   rel="stylesheet" href="./bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOTE</title>
</head>
<body>
<?php
if (isset($_COOKIE["note"]))
{?><div class="alert alert-danger" role="alert">
    vous avez deja repondu à la question et
<?php
    echo "votre note est   " . $_COOKIE["note"];
}
?></div>
<form class="container" action="<?=$_SERVER['PHP_SELF']?>" method="POST" >
    <label>Quel était votre impression du cours PHP</label>
<div class="form-check">
    <input class="form-check-input" type="radio" name="note" id="bon" value="bon">
    <label class="form-check-label" for="bon">
        Bon
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="note" id="moyen" value="moyen">
    <label class="form-check-label" for="moyen">
        Moyen
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="note" id="mauvais" value="mauvais" >
    <label class="form-check-label" for="mauvais">
        Mauvais
    </label>
</div>
   <div class="col-12" ><button class="btn btn-primary" type="submit" name="myb">Submit</button></div>
</form>
</body>

</html>