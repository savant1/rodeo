<?php
    session_start();
    require('../../contr/controller.php');
    $ferry = get_pro2($_GET['code_retour']);
    $francois = check_clien3($_GET['code']);
    $bako = check_info($ferry['user_session']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="ferry francois bakongo">
    <title>Proformat rodéo</title>
    <style type="text/css">
        <!--
        .Style2 {
            font-family: "Times New Roman", Times, serif;
            font-style: italic;
        }
        -->
    </style>
</head>

<body>
<table  width="851" border="2" cellspacing="2" cellpadding="2">
    <tr>
        <th colspan="11" style="border:hidden" scope="col"></th>
    </tr>
    <tr>
        <td style="border:hidden"  height="49" colspan="11">
            <img src="LOGORODEO.jpg" alt="logo rodeo" width="120" height="120" />
            <span style="text-align: center;font-size: 1.2em;float: right;border: 1px solid black;">installateur :<?php echo $bako['nom'];?>
                <br>Télèphone : <?php echo $bako['telephone'];?>
            </span>
        </td>
    </tr>
    <tr>
        <td style="border:hidden" colspan="7"><div align="right">Proformat N&deg;</div></td>
        <td colspan="4"><?php echo $ferry['num_proforma']; ?></td>
    </tr>
    <tr>
        <td style="border:hidden" height="25">CLIENT</td>
        <td style="border:hidden" colspan="4">&nbsp;</td>
        <td style="border:hidden" width="13">&nbsp;</td>
        <td style="border:hidden" colspan="2">Divers</td>
        <td style="border:hidden" colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td style="border:hidden">&nbsp;</td>
        <td style="border:hidden" colspan="4">&nbsp;</td>
        <td style="border:hidden" width="13">&nbsp;</td>
        <td style="border:hidden" colspan="2">&nbsp;</td>
        <td style="border:hidden" colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td>NOM</td>
        <td colspan="4"><?php echo $francois['nom']; ?></td>
        <td style="border:hidden" width="13">&nbsp;</td>
        <td colspan="2">Date</td>
        <td colspan="2"><?php echo date('d')."-".date('m')."-".date('Y');?></td>
    </tr>
    <tr>
        <td>ADRESSE</td>
        <td colspan="4"><?php echo $francois['adresse']; ?></td>
        <td style="border:hidden" width="13">&nbsp;</td>
        <td colspan="2">Commande n &deg; </td>
        <td colspan="2"><select name="type"><option>&nbsp;&nbsp;&nbsp;&nbsp;verbale&nbsp;&nbsp;&nbsp;&nbsp;</option><option>&nbsp;&nbsp;&nbsp;&nbsp;site&nbsp;&nbsp;&nbsp;&nbsp;</option></select></td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td colspan="4"><?php echo $francois['email']; ?></td>
        <td style="border:hidden" width="13">&nbsp;</td>
        <td colspan="2">Repres</td>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td>PAYS</td>
        <td colspan="4"><?php echo $francois['pays']; ?>&nbsp;&nbsp;&nbsp;&nbsp;Code postal : &nbsp;&nbsp;&nbsp;&nbsp; Ville : <?php echo $francois['cp']; ?></td>
        <td style="border:hidden" width="13">&nbsp;</td>
        <td colspan="2">FAB</td>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td>TELEPHONE</td>
        <td colspan="4"><?php echo $francois['telephone']; ?></td>
        <td style="border:hidden" width="13">&nbsp;</td>
        <td style="border:hidden" colspan="2">&nbsp;</td>
        <td style="border:hidden" colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td style="border:hidden" colspan="11">&nbsp;</td>
    </tr>
    <tr>
        <td><div align="center">Qte</div></td>
        <td colspan="5"><div align="center">Description</div></td>
        <td colspan="2"><div align="center">Prix Unitaire </div></td>
        <td colspan="2"><div align="center">TOTAL</div></td>
    </tr>