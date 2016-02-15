<?php
/**
 * Created by PhpStorm.
 * User: ferry francois
 * Date: 18/11/2015
 * Time: 09:13
 */

session_start();
include '../contr/controller.php';
$err = "";
 $creat = check_id($_COOKIE['admin']);$check = check_mail1 ($_POST['email']);
if($check['email'] == $_POST['email']){
    $err .="<li class='btn btn-warning'>". htmlspecialchars($_POST['type'])."  exite deja</li>";
    header('Location:../moi/cree_tech.php?code_retour='.$err);
} else if(
cree_tech(htmlspecialchars($_POST['nom'])
    ,htmlspecialchars($_POST['prenom'])
    ,htmlspecialchars($_POST['email'])
    ,htmlspecialchars($_POST['tel'])
    ,htmlspecialchars($_POST['adres'])
    ,htmlspecialchars($_POST['pays'])
    ,htmlspecialchars($_POST['cpv'])
    ,htmlspecialchars($_POST['id'])
    ,htmlspecialchars($_POST['mdp'])
    ,htmlspecialchars($_POST['type'])
    ,$creat['id'])){
    $err .="<li class='btn btn-success'>". htmlspecialchars($_POST['type'])."  est bien crée</li>";
    header('Location:../moi/cree_tech.php?code_retour='.$err);
} else {
    header('Location:../moi/cree_tech.php?code_retour='.$err);
}