Convertir un chiffre en lettre (php)------------------------------------
Url     : http://codes-sources.commentcamarche.net/source/43095-convertir-un-chiffre-en-lettre-phpAuteur  : cs_taheDate    : 01/08/2013
Licence :
=========

Ce document intitulé « Convertir un chiffre en lettre (php) » issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis à disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fixées par la licence, tant que cette note
apparaît clairement.

Description :
=============

L'id&eacute;e de cette classe m'est venue pendant la gestion d'une facture.je g&
eacute;re des factures qui doivent afficher le montant total en chiffre et en le
ttre en vue d'indiquer clairement au client ce qu'il a pay&eacute; ou doit payer
. comme je n'ai trouv&eacute; nulle part un code source de ce genre j'ai d&eacut
e;cid&eacute; de m'en confectionner.la classe ChiffreEnLettre en est le r&eacute
;sultat.
<br />................................................................
...C'est moi qui vous remercie!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
<br /><a name='conc
lusion'></a><h2> Conclusion : </h2>
<br />apr&egrave;s avoir copier la fichier
 ChiffreEnLettre dans votre dossier contenant vos fichiers faites:
<br />&lt;?p
hp
<br />include('ChiffreEnLettre.php');
<br />?&gt;
<br />au lieu o&ugrave; 
vous voulez l'afficher faites:
<br />&lt;?php
<br />$lettre=new ChiffreEnLettr
e();
<br />$lettre-&gt;Conversion($chiffre);
<br />?&gt;
<br />$lettre est un
e instance de la classe ChiffreEnLettre
<br />$chiffre est la variable qui stoc
ke le chiffre que nous devons traduire en lettre
<br />Conversion() est la fonc
tion qui g&eacute;n&egrave;re la conversion du chiffre en lettre.
<br />
<br /
>pour le moment je n'ai pas g&eacute;r&eacute; les trucs du genre 200 =&gt; deux
 cents avec s &agrave; cent.ma classe elle affichera deux cent sans s le final.t
out cela sera corrig&eacute; dans moins d'un moi si le temps me le permet.Mon in
tention &eacute;tant tr&egrave;s loin de vous &eacute;nerver d'avantages dans vo
tre apprentissage de la programmation ou dans vos recherches, souffrez que je vo
us souhaite une bonne utilisation de ce bout de code.
<br />un mail a meandok@g
mail.com pour dire que avez utiliser mon code me ferait beaucoup honneur je vous
 assure.
<br />..............................................C'est moi qui vous
 remercie.Quoi qu'on dise,moi je crois en Dieu!!!!!!!!!!
