<?php
/**
 * Created by PhpStorm.
 * User: ferry francois
 * Date: 24/11/2015
 * Time: 11:15
 */

session_start();
include '../contr/controller.php';
include '../contr/ChiffresEnLettres.php';

//$a = new chiffreEnLettre();
//echo $a->ConvNumberLetter(3287455,0,0);
if(isset($_POST['qte1']) && isset($_POST['desc']) && isset($_POST['remise'])){
    if($_POST['desc'] != 'Sélectionner un article') {
        $pu = get_pu($_POST['desc']);
        $add = get_ip(); echo $_SESSION['id_client_proforma'];
        $pt = ($pu['prix_vente_ht']*$_POST['remise'])/100; $ptt = $pt+$pu['prix_vente_ht'];
        add_to_prof($_SESSION['proforma'],$pu['description'],$_POST['qte1'],$ptt,$add,$_SESSION['installateur'],$_SESSION['heure'],$_SESSION['id_client_proforma']);
        header('Location:../installateur/elements/proformat.index.php');
        echo $pu['description'];
    } else {
        header('Location:../installateur/elements/proformat.index.php');
    }
} else{
    header('Location:../installateur/elements/proformat.index.php');
}