<?php
/**
 * Created by PhpStorm.
 * User: ferry francois
 * Date: 17/11/2015
 * Time: 09:05
 */

session_start();
include '../contr/controller.php';
$add = get_ip();
$err = "";
if(isset($_POST['art1'])) {
    if ($_POST['art1'] != 'Sélectionner le client'){
        $lui = check_num_compte($_POST['art1']);
        $_SESSION['proforma']=$_POST['num'];
        $_SESSION['id_client_proforma']= $lui['id_client'];
        $_SESSION['nom']= $lui['nom'];
        $_SESSION['adresse']= $lui['adresse'];
        $_SESSION['email']= $lui['email'];
        $_SESSION['ville']= $lui['cp'];
        $_SESSION['pays']= $lui['pays'];
        $_SESSION['telephone']= $lui['telephone'];
        $_SESSION['heure']= date('h').date('i').date('s').$add;
        header('Location:../installateur/elements/proformat.index.php');
    } else {
        header('Location:../installateur/ui.php');
    }
}else {
    header('Location:../installateur/ui.php');
}