<?php
/**
 * Created by PhpStorm.
 * User: ferry francois
 * Date: 30/08/2015
 * Time: 19:44
 */

/**
 *
 * appel de la base de donnée
 *
 */
include_once ('database.php') ;
/**
 *
 * connection à la base de donnée
 *
 */
//$dbb = new db("root", "", "localhost", "rodeo", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
//$dbb = new db("boutique_wmce", "ferryfrancois", "localhost", "boutique_wmce", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); sur livehost
$dbb = new db("ferry", "logis_network", "mysql.colombe-tn.com", "colombetncom5", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); //sur infomaniac en reel
$errors = array();
/**
 * cette fonction recherche dans la base un membre ayant le meme pass que celui que l'on vient d'entrer
 */
/**
 * @param $pseudo
 * @param $pass
 * @return mixed
 * @throws Exception
 */
function check($pseudo,$pass){
    global $dbb;
    $getrows = $dbb->getRow("SELECT * FROM rodeo_user WHERE login = ? and  mdp = ?", array($pseudo,$pass));
    return $getrows;
}
/**
 *
 *
 * cette fonction nous permettra de redirige
 *
 */
/**
 * @param $pseudo
 * @param $pass
 */
function existe($pseudo,$pass){
    $exi = check($pseudo,$pass);
    if($exi['type_tech'] == 'installateur'){
        setcookie("installateur", $pseudo, time() + (86400 * 30 * 24), "/"); // 86400 = 1 day
        $_SESSION['installateur']= $pseudo;
        $_SESSION['nom_insta']= $exi['nom'].' '.$exi['prenom'];
        $_SESSION['tel_insta'] = $exi['telephone'];
        $_SESSION['id_insta'] = $exi['id_user'];
        header('Location:../installateur');
    } else if($exi['type_tech'] == 'technicien'){
        setcookie("technicien", $pseudo, time() + (86400 * 30 * 24), "/"); // 86400 = 1 day
        $_SESSION['technicien']= $pseudo;
        $_SESSION['nom_tech']= $exi['nom'].' '.$exi['prenom'];
        $_SESSION['tel_tech'] = $exi['telephone'];
        $_SESSION['id_tech'] = $exi['id_user'];
        header('Location:../technicien');
    }else if($exi['type_tech'] == 'boss'){
        setcookie("boss", $pseudo, time() + (86400 * 30 * 24), "/"); // 86400 = 1 day
        $_SESSION['boss']= $pseudo;
        $_SESSION['nom_boss']= $exi['nom'].' '.$exi['prenom'];
        $_SESSION['tel_boss'] = $exi['telephone'];
        $_SESSION['id_boss'] = $exi['id_user'];
        header('Location:../boss');
    }else if($exi['type_tech'] == 'admin'){
        setcookie("admin", $pseudo, time() + (86400 * 30 * 24), "/"); // 86400 = 1 day
        $_SESSION['admin']= $pseudo;
        $_SESSION['nom_admin']= $exi['nom'].' '.$exi['prenom'];
        $_SESSION['admin_tel'] = $exi['telephone'];
        $_SESSION['id_admin'] = $exi['id_user'];
        header('Location:../moi');
    } else {
        header('Location:../');
    }
}
/**
 * Récupérer la véritable adresse IP d'un visiteur
 */
function get_ip() {
    // IP si internet partagé
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    // IP derrière un proxy
    elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // Sinon : IP normale
    else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }
}
/**
 *
 *
 * cette fonction nous permettra d'inserer un produit
 *
 */
/**
 * @param $designation
 * @param $quantite
 * @param $adresse_ip
 * @param $user_se
 * @return bool
 * @throws Exception
 */
function pro($designation,$quantite,$adresse_ip,$user_se){
    try{
        global $dbb;
        $stmt = $dbb->datab->prepare("INSERT INTO rodeo_temp_prof (designation,quantite,adresse_ip,user_se) VALUES (:designation,:quantite,:adresse_ip,:user_se)");
        $stmt->bindParam(':designation', $designation, PDO::PARAM_STR);
        $stmt->bindParam(':quantite', $quantite, PDO::PARAM_STR);
        $stmt->bindParam(':adresse_ip', $adresse_ip, PDO::PARAM_STR);
        $stmt->bindParam(':user_se', $user_se, PDO::PARAM_STR);
        $stat = $stmt->execute();

        return $stat;
    }catch(PDOException $e){
        throw new Exception($e->getMessage());
    }
}
/**
 *
 * fonction d'affichage des erreurs
 *
 */
function prin_err(){
    if(isset($_GET['code_retour'])){
        echo $_GET['code_retour'];
    }
}
/**
 *
 * function qui permet de recuperer les premiers caracteres
 *
 */
/**
 * @param $string
 * @param $len
 * @return string
 */
function cutString($string, $len)
{
    return substr($string, 0, $len);
}

/**
 * cette fonction recherche dans la base un membre ayant l'id du cookies
 */
/**
 * @param $login
 * @return mixed
 * @throws Exception
 */
function check_id($login){
    global $dbb;
    $getrows = $dbb->getRow("SELECT id_user AS id FROM rodeo_user WHERE login = ? ", array($login));
    return $getrows;
}
function check_info($login){
    global $dbb;
    $getrows = $dbb->getRow("SELECT * FROM rodeo_user WHERE login = ? ", array($login));
    return $getrows;
}
/**
 *
 *
 * cette fonction nous permettra d'inserer un produit
 *
 */
/**
 * @param $num_compte
 * @param $nom
 * @param $abrege
 * @param $qualite
 * @param $adresse
 * @param $complement
 * @param $cp
 * @param $pays
 * @param $contribuable
 * @param $telephone
 * @param $email
 * @param $site
 * @param $id_user_crea
 * @return bool
 * @throws Exception
 */
function cree_client($num_compte,$nom,$abrege,$qualite,$adresse,$complement,$cp,$pays,$contribuable,$telephone,$email,$site,$id_user_crea){
    try{
        global $dbb;
        $stmt = $dbb->datab->prepare("INSERT INTO rodeo_client (num_compte,nom,abrege,qualite,adresse,complement,cp,pays,contribuable,telephone,email,site,id_user_crea)
                                      VALUES (:num_compte,:nom,:abrege,:qualite,:adresse,:complement,:cp,:pays,:contribuable,:telephone,:email,:site,:id_user_crea)");
        $stmt->bindParam(':num_compte', $num_compte, PDO::PARAM_STR);
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':abrege', $abrege, PDO::PARAM_STR);
        $stmt->bindParam(':qualite', $qualite, PDO::PARAM_STR);
        $stmt->bindParam(':adresse', $adresse, PDO::PARAM_STR);
        $stmt->bindParam(':complement', $complement, PDO::PARAM_STR);
        $stmt->bindParam(':cp', $cp, PDO::PARAM_STR);
        $stmt->bindParam(':pays', $pays, PDO::PARAM_STR);
        $stmt->bindParam(':contribuable', $contribuable, PDO::PARAM_STR);
        $stmt->bindParam(':telephone', $telephone, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':site', $site, PDO::PARAM_STR);
        $stmt->bindParam(':id_user_crea', $id_user_crea, PDO::PARAM_STR);
        $stat = $stmt->execute();
        return $stat;
    }catch(PDOException $e){
        throw new Exception($e->getMessage());
    }
}
/**
 *
 * verifions si le client x existe deja
 *
 */
/**
 * @param $email
 * @return mixed
 * @throws Exception
 */
function check_mail($email){
    global $dbb;
    $getrows = $dbb->getRow("SELECT email AS email FROM rodeo_client WHERE email = ? ", array($email));
    return $getrows;
}

/**
 * @param $num_compte
 * @return mixed
 * @throws Exception
 */
function check_num_compte($num_compte){
    global $dbb;
    $getrows = $dbb->getRow("SELECT * FROM rodeo_client WHERE num_compte = ? ", array($num_compte));
    return $getrows;
}

/**
 * @param $num_compte
 * @return mixed
 * @throws Exception
 */
function check_client_compte($num_compte){
    global $dbb;
    $getrows = $dbb->getRow("SELECT * FROM rodeo_client WHERE num_compte = ? ", array($num_compte));
    return $getrows;
}

/**
 * @param $email
 * @return mixed
 * @throws Exception
 */

function check_mail1($email){
    global $dbb;
    $getrows = $dbb->getRow("SELECT email AS email FROM rodeo_user WHERE email = ? ", array($email));
    return $getrows;
}
/**
 *
 *
 * cette fonction nous permettra d'inserer un techmicirn ou installatteur
 *
 */
/**
 * @param $nom
 * @param $prenom
 * @param $email
 * @param $telephone
 * @param $adresse
 * @param $pays
 * @param $ville
 * @param $login
 * @param $mdp
 * @param $type_tech
 * @param $id_user_crea
 * @return bool
 * @throws Exception
 */
function cree_tech($nom,$prenom,$email,$telephone,$adresse,$pays,$ville,$login,$mdp,$type_tech,$id_user_crea)
{
    try {
        global $dbb;
        $stmt = $dbb->datab->prepare("INSERT INTO rodeo_user (nom,prenom,email,telephone,adresse,pays,ville,login,mdp,type_tech,id_user_crea)
                                      VALUES (:nom,:prenom,:email,:telephone,:adresse,:pays,:ville,:login,:mdp,:type_tech,:id_user_crea)");
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':telephone', $telephone, PDO::PARAM_STR);
        $stmt->bindParam(':adresse', $adresse, PDO::PARAM_STR);
        $stmt->bindParam(':pays', $pays, PDO::PARAM_STR);
        $stmt->bindParam(':ville', $ville, PDO::PARAM_STR);
        $stmt->bindParam(':login', $login, PDO::PARAM_STR);
        $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $stmt->bindParam(':type_tech', $type_tech, PDO::PARAM_STR);
        $stmt->bindParam(':id_user_crea', $id_user_crea, PDO::PARAM_STR);
        $stat = $stmt->execute();
        return $stat;
    } catch (PDOException $e) {
        throw new Exception($e->getMessage());
    }
}
/**
 *
 * fonction qui permet de recuperer un membre
 *
 */
function check_clien(){
    global $dbb;
    $getrows = $dbb->getRows("SELECT * FROM rodeo_client ", array());
    return $getrows;
}

function check_user($user_session_id){
    global $dbb;
    $getrows = $dbb->getRows("SELECT * FROM rodeo_client WHERE id_user_crea = ?", array($user_session_id));
    return $getrows;
}

/**
 * @return array
 * @throws Exception
 *
 */
function check_clien2(){
    global $dbb;
    $getrows = $dbb->getRows("SELECT * FROM rodeo_client ", array());
    return $getrows;
}

/**
 * @param $id_client
 * @return mixed
 * @throws Exception
 */
function check_clien3($id_client){
    global $dbb;
    $getrows = $dbb->getRow("SELECT * FROM rodeo_client WHERE id_client = ?", array($id_client));
    return $getrows;
}
/**
 *
 * fomction qui va nous permettre d'affiche les clients
 *
 */
function print_client(){
    $clients = check_clien();
    foreach($clients AS $client){
        $code = $client['num_compte'] .'  '.$client['nom'];
        echo '<option value="'.$client['num_compte'].'">'.$code.'</option>';
    }
}
function print_client4($user_session_id){
    $clientss = check_user($user_session_id);
    foreach($clientss AS $cliente){
        $codee = $cliente['num_compte'] .'  '.$cliente['nom'];
        echo '<option value="'.$cliente['num_compte'].'">'.$codee.'</option>';
    }
}
/**
 *
 * fomction qui va nous permettre d'affiche les clients genereaux
 *
 */
function print_client2(){
    $clientsgene = check_clien2();
    foreach($clientsgene AS $clientgene){
        echo'
                        <tr>
                            <td>'.$clientgene['nom'].'</td>
                            <td class="center">'.$clientgene['num_compte'].'</td>
                            <td class="center">'.$clientgene['pays'].'</td>
                            <td class="center">';
                                    if($clientgene['statut'] == 1){
                                        echo '
                                        <span class="label-success label label-default">Activé</span>';
                                    } elseif ($clientgene['statut'] == 2){
                                        echo '
                                             <span class="label-warning label label-default">Désactivé</span>';
                                    } else{
                                        echo'
                                              <span class="label-danger label label-default">Supprimé</span>';
                                    }
                          echo'  </td>
                            <td class="center">
                                <a class="btn btn-success" href="detail.php?code_retour='.$clientgene['id_client'].'">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    Voir
                                </a>
                               <!-- <a class="btn btn-info" href="edit.php?code_retour='.$clientgene['id_client'].'">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="supp.php?code_retour='.$clientgene['id_client'].'">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Supprimé
                                </a>-->
                            </td>
                        </tr>
        ';
    }
}
/**
 *
 * fomction qui va nous permettre d'affiche les clients d'un tech ou insta
 *
 */
function print_clientf($user_session_id){
    $clientspart = check_user($user_session_id);
    foreach($clientspart AS $clientpart){
        echo'
                        <tr>
                            <td>'.$clientpart['nom'].'</td>
                            <td class="center">'.$clientpart['num_compte'].'</td>
                            <td class="center">'.$clientpart['pays'].'</td>
                            <td class="center">';
                                    if($clientpart['statut'] == 1){
                                        echo '
                                        <span class="label-success label label-default">Activé</span>';
                                    } elseif ($clientpart['statut'] == 2){
                                        echo '
                                             <span class="label-warning label label-default">Désactivé</span>';
                                    } else{
                                        echo'
                                              <span class="label-danger label label-default">Supprimé</span>';
                                    }
                          echo'  </td>
                            <td class="center">
                                <a class="btn btn-success" href="detail.php?code_retour='.$clientpart['id_client'].'">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    Voir
                                </a>
                               <!-- <a class="btn btn-info" href="edit.php?code_retour='.$clientpart['id_client'].'">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="supp.php?code_retour='.$clientpart['id_client'].'">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Supprimé
                                </a>-->
                            </td>
                        </tr>
        ';
    }
}

/**
 * @param $id_client
 * fomction qui va nous permettre d'affiche les informations d'un client
 */
function print_client3($id_client){
    $clientunik = check_clien3($id_client);
    echo'
                        <span> NOM COMPLET DU CLIENT :</span> <span>'.$clientunik['nom'].'</span> <br><br>
                        <span> NUMERO DE COMPTE DU CLIENT :</span> <span>'.$clientunik['num_compte'].'</span> <br><br>
                        <span> QUALITE DU CLIENT :</span> <span>'.$clientunik['qualite'].'</span> <br><br>
                        <span> ABREGE DU CLIENT :</span> <span>'.$clientunik['abrege'].'</span> <br><br>
                        <span> ADRESSE DU CLIENT :</span> <span>'.$clientunik['adresse'].'</span> <br><br>
                        <span> PAYS DU CLIENT :</span> <span>'.$clientunik['pays'].'</span> <br><br>
                        <span> VILLE DU CLIENT :</span> <span>'.$clientunik['cp'].'</span> <br><br>
                        <span> TELEPHONE DU CLIENT :</span> <span>'.$clientunik['telephone'].'</span> <br><br>
                        <span> EMAIL DU CLIENT :</span> <span>'.$clientunik['email'].'</span> <br><br>
                        <span> SITE DU CLIENT :</span> <span>'.$clientunik['site'].'</span> <br><br>
    ';
}
/**
 *
 * fonction qui permet de recuperer un produit
 *
 */
function check_article(){
    global $dbb;
    $getrows = $dbb->getRows("SELECT * FROM rodeo_article ", array());
    return $getrows;
}

/**
 *fomction qui va nous permettre d'affiche les articles
 */
function print_article(){
    $articles = check_article();
    foreach($articles AS $article){
        echo '<option value="'.$article['reference'].'">'.$article['description'].'</option>';
    }
}

/**
 * @param $reference
 * @return mixed
 * @throws Exception
 * fonction qui va permetre de recupere le pu d'un article
 */
function get_pu($reference){
    global $dbb;
    $getrows = $dbb->getRow("SELECT prix_vente_ht AS prix_vente_ht ,description AS description FROM rodeo_article WHERE reference = ?", array($reference));
    return $getrows;
}

/**
 * @param $num_proforma
 * @param $designation
 * @param $quantite
 * @param $prix_unitaire
 * @param $adresse_ip
 * @param $user_session
 * @param $session_temps
 * @param $id_client_pro
 * @return bool
 * @throws Exception
 * cette fonction nous permettra d'inserer un articles a la proformat
 */

function add_to_prof($num_proforma,$designation,$quantite,$prix_unitaire,$adresse_ip,$user_session,$session_temps,$id_client_pro)
{
    try {
        global $dbb;
        $stmt = $dbb->datab->prepare("INSERT INTO rodeo_temp_prof (num_proforma,designation,quantite,prix_unitaire,adresse_ip,user_session,session_temps,id_client_pro)
                                      VALUES (:num_proforma,:designation,:quantite,:prix_unitaire,:adresse_ip,:user_session,:session_temps,:id_client_pro)");
        $stmt->bindParam(':num_proforma', $num_proforma, PDO::PARAM_STR);
        $stmt->bindParam(':designation', $designation, PDO::PARAM_STR);
        $stmt->bindParam(':quantite', $quantite, PDO::PARAM_STR);
        $stmt->bindParam(':prix_unitaire', $prix_unitaire, PDO::PARAM_STR);
        $stmt->bindParam(':adresse_ip', $adresse_ip, PDO::PARAM_STR);
        $stmt->bindParam(':user_session', $user_session, PDO::PARAM_STR);
        $stmt->bindParam(':session_temps', $session_temps, PDO::PARAM_STR);
        $stmt->bindParam(':id_client_pro', $id_client_pro, PDO::PARAM_STR);
        $stat = $stmt->execute();
        return $stat;
    } catch (PDOException $e) {
        throw new Exception($e->getMessage());
    }
}

/**
 * @param $num_proforma
 * @return array
 * @throws Exception
 *fonction qui permet de recuperer la proforma
 */
function get_pro($num_proforma){
    global $dbb;
    $getrows = $dbb->getRows("SELECT * FROM rodeo_temp_prof WHERE num_proforma = ? ", array($num_proforma));
    return $getrows;
}

/**
 * @param $num_proforma
 * @return array
 * @throws Exception
 */
function get_pro2($num_proforma){
    global $dbb;
    $getrows = $dbb->getRow("SELECT * FROM rodeo_temp_prof WHERE num_proforma = ? ", array($num_proforma));
    return $getrows;
}
/**
 * @param $num_proforma
 * fonction qui va generer le corps de la proforma
 */
function print_corps($num_proforma){
    $items = get_pro($num_proforma);$t = 0.0; $st = 0.0;
    foreach($items AS $item){
        $t = $item['quantite']*$item['prix_unitaire']; $st = $st + $t;
        echo '
            <tr>
                <td style="text-align: center;">'.$item['quantite'].'</td>
                <td colspan="5">'.$item['designation'].'</td>
                <td  style="text-align: center;" colspan="2">'.number_format($item['prix_unitaire'], 2, ',', '').'</td>
                <td  style="text-align: center;" colspan="2">'.$t.'</td>
            </tr>
        ';
        $_SESSION['stt'] = $st;
        $_SESSION['tvat'] = $st*0.1925;
        $_SESSION['ttct'] = $st+$_SESSION['tvat'];
    }
}

/**
 * @param $num_proforma
 * @return array
 * @throws Exception
 * function qui trie les proforma
 */
function tri_pro(){
    global $dbb;
    $getrows = $dbb->getRows("SELECT DISTINCT rodeo_client.nom AS nc,rodeo_user.nom AS un,id_client,user_session,num_proforma
                                FROM rodeo_temp_prof,rodeo_client,rodeo_user
                                 WHERE id_client_pro = id_client AND user_session = login  ",
                                array());
    return $getrows;
}

function tri_pro2($id_session_en_cour){
    global $dbb;
    $getrows = $dbb->getRows("SELECT DISTINCT rodeo_client.nom AS ncc,rodeo_user.nom AS unc,id_client,user_session,num_proforma
                               FROM rodeo_temp_prof,rodeo_client,rodeo_user
                                WHERE id_client_pro = id_client AND user_session = login AND rodeo_user.id_user = ?",
                                 array($id_session_en_cour));
    return $getrows;
}

function print_all_prof(){
    $proformas = tri_pro();
    foreach($proformas AS $proformat){
        echo'
        <tr>
                            <td>'.$proformat['num_proforma'].'</td>
                            <td class="center">'.$proformat['nc'].'</td>
                            <td class="center">'.$proformat['un'].'</td>
                            <td class="center">
                                <a class="btn btn-success" href="next/proformat_bon.php?code_retour='.$proformat['num_proforma'].'&code='.$proformat['id_client'].'">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    Voir
                                </a>
                              <!-- <a class="btn btn-info" href="edit.php?code_retour='.$proformat['id_client'].'">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="supp.php?code_retour='.$proformat['id_client'].'">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Supprimé
                                </a>-->
                            </td>
                        </tr>
    ';
    }
}
function print_all_prof2($id_session_en_cour){
    $proformass = tri_pro2($id_session_en_cour);
    foreach($proformass AS $proformas){
        echo'
        <tr>
                            <td>'.$proformas['num_proforma'].'</td>
                            <td class="center">'.$proformas['ncc'].'</td>
                            <td class="center">'.$proformas['unc'].'</td>
                            <td class="center">
                                <a class="btn btn-success" href="next/proformat_bon.php?code_retour='.$proformas['num_proforma'].'&code='.$proformas['id_client'].'">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    Voir
                                </a>
                              <!-- <a class="btn btn-info" href="edit.php?code_retour='.$proformas['id_client'].'">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="supp.php?code_retour='.$proformas['id_client'].'">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Supprimé
                                </a>-->
                            </td>
                        </tr>
    ';
    }
}

/**
 * @return mixed
 * @throws Exception
 * function qui permet de compter le nmbre de clients
 */
function count_client(){
    global $dbb;
    $getrows = $dbb->getRow("SELECT COUNT(*) AS client FROM rodeo_client ", array());
    return $getrows;
}
/**
 * @return mixed
 * @throws Exception
 * function qui compte les proforma
 */
function count_proforma(){
    global $dbb;
    $getrows = $dbb->getRow("SELECT COUNT(DISTINCT num_proforma) AS profor FROM rodeo_temp_prof ", array());
    return $getrows;
}
/**
 * @param $param
 * @return mixed
 * @throws Exception
 * function qui compte les tech et les installateurs
 */
function count_tech_insta($param){
    global $dbb;
    $getrows = $dbb->getRow("SELECT COUNT(*) AS tech FROM rodeo_user WHERE type_tech = ?", array($param));
    return $getrows;
}























?>