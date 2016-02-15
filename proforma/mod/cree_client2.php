<?php
/**
 * Created by PhpStorm.
 * User: ferry francois
 * Date: 27/11/2015
 * Time: 01:59
 */
session_start();
include '../contr/controller.php';
$err = ""; $num_compte = ""; $i = 4;
$un = cutString(htmlspecialchars($_POST['nom']),$i); $creat = check_id($_COOKIE['installateur']);$check = check_mail ($_POST['email']);
$num_compte .= '411'.$un; $check1 = check_num_compte($num_compte);

if($num_compte == $check1['num_compte']){
    $i = $i+1;$num_compte = "";
    $num_compte .= '411'.cutString(htmlspecialchars($_POST['nom']),$i);
}
if($check['email'] == $_POST['email']){
    $err .="<li class='btn btn-warning'>Votre client exite deja</li>";
    header('Location:../installateur/cree_client.php?code_retour='.$err);
} else if(cree_client($num_compte,htmlspecialchars($_POST['nom']),$un,htmlspecialchars($_POST['qualite']),htmlspecialchars($_POST['adres']),htmlspecialchars($_POST['compl']),htmlspecialchars($_POST['cpv']),htmlspecialchars($_POST['pays']),htmlspecialchars($_POST['id']),htmlspecialchars($_POST['tel']),htmlspecialchars($_POST['email']),htmlspecialchars($_POST['site']),$creat['id'])){
    $err .="<li class='btn btn-success'>Votre client est bien crée</li>";
    header('Location:../installateur/cree_client.php?code_retour='.$err);
} else {
    header('Location:../installateur/cree_client.php?code_retour='.$err);
}