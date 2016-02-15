<?php session_start(); require('../../contr/controller.php'); ?>
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
<table style="margin-left: 235px" width="851" border="2" cellspacing="2" cellpadding="2">
  <tr>
    <th colspan="11" style="border:hidden" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td style="border:hidden"  height="49" colspan="11"><img src="LOGO-RODEO.jpg" alt="logo rodeo" width="120" height="60" /></td>
  </tr>
  <tr>
    <td style="border:hidden" colspan="7"><div align="right">Proformat N&deg;</div></td>
    <td colspan="4"><?php echo $_SESSION['proforma']; ?></td>
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
    <td colspan="4"><?php echo $_SESSION['nom']; ?></td>
    <td style="border:hidden" width="13">&nbsp;</td>
    <td colspan="2">Date</td>
    <td colspan="2"><?php echo date('d')."-".date('m')."-".date('Y');?></td>
  </tr>
  <tr>
    <td>ADRESSE</td>
    <td colspan="4"><?php echo $_SESSION['adresse']; ?></td>
    <td style="border:hidden" width="13">&nbsp;</td>
    <td colspan="2">Commande n &deg; </td>
    <td colspan="2"><select name="type"><option>&nbsp;&nbsp;&nbsp;&nbsp;verbale&nbsp;&nbsp;&nbsp;&nbsp;</option><option>&nbsp;&nbsp;&nbsp;&nbsp;site&nbsp;&nbsp;&nbsp;&nbsp;</option></select></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td colspan="4"><?php echo $_SESSION['email']; ?></td>
    <td style="border:hidden" width="13">&nbsp;</td>
    <td colspan="2">Repres</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>PAYS</td>
    <td colspan="4"><?php echo $_SESSION['pays']; ?>&nbsp;&nbsp;&nbsp;&nbsp;Code postal : &nbsp;&nbsp;&nbsp;&nbsp; Ville : <?php echo $_SESSION['ville']; ?></td>
    <td style="border:hidden" width="13">&nbsp;</td>
    <td colspan="2">FAB</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>TELEPHONE</td>
    <td colspan="4"><?php echo $_SESSION['telephone']; ?></td>
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
    <td colspan="2"><div align="center"> </div>Remise(%)</td>
    <td colspan="2"><div align="center">AJOUTER</div></td>
  </tr>
  <form action="../../mod/prod.php" method="post">
      <tr>
        <td>
          <select name="qte1">
            <?php
                for($i = 1; $i<=100; $i++){
                  echo '<option>'.$i.'</option>';
                }
            ?>
          </select>
        </td>
          <td colspan="5">
            <select name="desc" id="" data-rel="chosen">
              <option>Sélectionner un article</option>
              <?php print_r(print_article()); ?>
            </select>
          </td>
          <td colspan="2"><input type="number" name="remise" required/></td>
          <td colspan="2"><input type="submit"></td>
      </tr>
  </form>
  <span>
    <a href="proformat_bon.php"
       style="border-radius: 2px;border: 1px solid #bb1813;text-decoration: none;background-color: #0063DC;font-size:22px;color: #fff0eb">
      Génèrer la PROFORMA
    </a> <br><br>
  </span>