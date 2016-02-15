<?php
/**
 * Created by PhpStorm.
 * User: ferry francois
 * Date: 21/12/2015
 * Time: 11:31
 */


$erreurs = "";
$err = '#^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,}$#';
if(isset($_POST['contact'])){
    $regex_tel='#[0-9]{9,30}$#';
    if(preg_match("$regex_tel",$_POST['your-tel'])){
        if (preg_match($err,$_POST['email'] ) ){
            $mois = date('m'); $jour = date('d'); $an = date('Y'); $dat = $an.'-'.$mois.'-'.$jour; $heure=date('H:i:s');
            if(isset($_POST['name']) && isset($_POST['pays']) && isset($_POST['email']) && isset($_POST['your-tel']) && isset($_POST['your-subject'])
                && isset($_POST['message']) && isset($_POST['captcha-742'])){
                if($_POST['captcha-742'] == 'ZN4Z'){
                    $message ='
                        <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <title></title>
                            </head>
                            <body>
                                 <div>
                                     <span>NOM :</span> <span>'.$_POST['name'].'</span><br>
                                     <span>PAYS :</span> <span>'.$_POST['pays'].'</span><br>
                                     <span>ADRESSE EMAIL :</span> <span>'.$_POST['email'].'</span><br>
                                     <span>TELEPHONE :</span> <span>'.$_POST['your-tel'].'</span><br>
                                     <span>SUJECT DDE LA DEMANDE :</span> <span>'.$_POST['your-subject'].'</span><br>
                                     <span>DESCRIPTION DETAILLE :</span> <span>'.$_POST['message'].'</span><br>
                                 </div>
                            </body>
                            </html>
                    ';
                    // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
                    $message = wordwrap($message, 70, "\r\n");
                    // Envoi du mail
                    mail('technique@rodeo.cm', 'Contact venant de: '.$_POST['email'], $message);
                    $erreurs.="votre demande à étè transmisse vous serez contacter dqns les deux jours)";
                    header('Location:../cotation.php?video='.$erreurs);
                } else{
                    $erreurs.="le code saissie n'est pas valide";
                    header('Location:../cotation.php?video='.$erreurs);
                }
            } else{
                $erreurs.="bien voulloir remplir tous les champs";
                header('Location:../cotation.php?video='.$erreurs);
            }
        }else {
            $erreurs.="votre addresse email n'est pas valide";
            header('Location:../cotation.php?video='.$erreurs);
        }
    } else{
        $erreurs.="votre numero de telephone n'est pas valide";
        header('Location:../cotation.php?video='.$erreurs);
    }
}