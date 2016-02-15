<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
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
<table width="851" border="2" cellspacing="2" cellpadding="2">
  <tr>
    <th colspan="11" style="border:hidden" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td style="border:hidden"  height="49" colspan="11"><img src="LOGORODEO.jpg" alt="logo rodeo" width="127" height="46" /></td>
  </tr>
  <tr>
    <td style="border:hidden" colspan="7"><div align="right">Proformat N&deg;</div></td>
    <td colspan="4"><?php echo date('d').date('s').date('h').date('i')."/".date('Y');?><input type="hidden" value="<?php echo date('d').date('s').date('h').date('i')."/".date('Y');?>" /></td>
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
    <td colspan="4">&nbsp;</td>
    <td style="border:hidden" width="13">&nbsp;</td>
    <td colspan="2">Date</td>
    <td colspan="2"><?php echo date('d')."-".date('m')."-".date('Y');?></td>
  </tr>
  <tr>
    <td>ADRESSE</td>
    <td colspan="4">&nbsp;</td>
    <td style="border:hidden" width="13">&nbsp;</td>
    <td colspan="2">Commande n &deg; </td>
    <td colspan="2"><select name="type"><option>&nbsp;&nbsp;&nbsp;&nbsp;verbale&nbsp;&nbsp;&nbsp;&nbsp;</option><option>&nbsp;&nbsp;&nbsp;&nbsp;site&nbsp;&nbsp;&nbsp;&nbsp;</option></select></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td colspan="4">&nbsp;</td>
    <td style="border:hidden" width="13">&nbsp;</td>
    <td colspan="2">Repres</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>PAYS</td>
    <td colspan="4">&nbsp;</td>
    <td style="border:hidden" width="13">&nbsp;</td>
    <td colspan="2">FAB</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>TELEPHONE</td>
    <td colspan="4">&nbsp;</td>
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
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><select name="qte2">
			<?php 
				for($i = 1; $i<=100; $i++){
					echo '<option>'.$i.'</option>';
				}
			?>
		</select></td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
   
 
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>

  <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="border:hidden">&nbsp;</td>
    <td style="border:hidden" colspan="5">&nbsp;</td>
    <td colspan="2">Sous Total </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="border:hidden">&nbsp;</td>
    <td style="border:hidden" colspan="5">&nbsp;</td>
    <td colspan="2">Transport</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="border:hidden">&nbsp;</td>
    <td style="border:hidden" colspan="5"><div align="right">Taux de TVA</div></td>
    <td colspan="2">19,25%</td>
    <td colspan="2">&nbsp;</td>
  </tr>

  <tr>
    <td style="border:hidden">&nbsp;</td>
    <td style="border:hidden" colspan="5">&nbsp;</td>
    <td colspan="2"><div align="right"><strong>TOTAL TTC. </strong></div></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="border-top:hidden;border-left:hidden;border-bottom:hidden" >&nbsp;</td>
    <td style="border-right:hidden;border-left:hidden;border-bottom:hidden" colspan="5">Conditions: 100 % &agrave; la commande </td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="border-top:hidden;border-left:hidden;border-bottom:hidden" >&nbsp;</td>
    <td style="border:hidden" colspan="5">Garantie : 1 an</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="border-top:hidden;border-left:hidden;border-bottom:hidden" >&nbsp;</td>
    <td style="border:hidden" colspan="5">D&eacute;lai de livraison: 05 jours, apr&egrave;s r&eacute;ception du paiement</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="border-top:hidden;border-left:hidden;" >Paiement</td>
    <td style="border:hidden" colspan="5">Dur&eacute;e d'execution: 02 jours</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="border:hidden" >&nbsp;</td>
    <td style="border:hidden" colspan="5">Ch&egrave;que &agrave; l'ordre de : invest logistic</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="border:hidden" >&nbsp;</td>
    <td style="border:hidden" colspan="5">ou esp&egrave;ce contre re&ccedil;u rev&ecirc;tu de la </td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="border:hidden" >&nbsp;</td>
    <td style="border:hidden" colspan="5">signature et du cachet de la soci&eacute;t&eacute;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="border:hidden" >&nbsp;</td>
    <td style="border:hidden" colspan="5">signature et du cachet de la soci&eacute;t&eacute;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
  </tr>
   <tr>
    <td style="border:hidden" >&nbsp;</td>
    <td style="border:hidden" colspan="5">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="border:hidden" >&nbsp;</td>
    <td style="border:hidden" colspan="5"><strong><u>Arr&ecirc;t&eacute;e la pr&eacute;sente PROFORMA &agrave; la somme de </u></strong></td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
  </tr>
  <td style="border:hidden" >&nbsp;</td>
    <td style="border:hidden" colspan="5">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
    <td style="border:hidden" colspan="2">&nbsp;</td>
  <tr>
    <td style="border:hidden" colspan="11"><span class="Style2">Invest Logistic Sarl au capital de 1 000 000 FCFA,  RC n&deg; DLA/2008/B/717, NIU : M040000024807P  BP 567 DOUALA,  si&egrave;ge Douala,     1270, rue Gallieni Akwa.  www.invest-logistic.net  e.mail : yemba@invest-logistic.net   . T&eacute;l. : / 33 11 33 00 / 33 16 34 34</span></td>
  </tr>
</table>
<input name="test" type="button" onClick="window.print()" value="imprimer" />
</body>
</html>
