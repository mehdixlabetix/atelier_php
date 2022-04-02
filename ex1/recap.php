<?php
$target_dir='./uploads/';
$temp = explode(".", $_FILES['file']['name']);
$newfilename = uniqid(microtime(true),true) . '.' . end($temp);
move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$newfilename);
$name=$_POST["nom"];
$fname=$_POST["prenom"];
$adresse=$_POST["adresse"];
$nb=$_POST["nb"];
$type=$_POST["typeSandwich"];
$supp=$_POST['supp'];
echo nl2br("Monsieur/Madame :".$name." ".$fname."\r");
echo nl2br("votre adresse :".$adresse."\r");
echo nl2br("Votre ordre est : ".$nb." * ".$type."\r");
if(empty($supp))
{
    echo("vous n'avez pas selectionné de supplements");
}
else
{
    $N = count($supp);

    echo("vous avez choisi $N supplements: ");
    for($i=0; $i < $N; $i++)
    {
        echo($supp[$i] . " ");
    }
}
echo nl2br("<br>");
if($nb<10){
echo nl2br("le prix total est ".(($nb)*4)."\n");}
else   {
    echo nl2br("le prix total est ".(($nb)*4*0.9));
}
?>
