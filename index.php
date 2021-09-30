<?php
$Home="http://vivremobile-armentieres.fr/";
$Destinataire="espace.phonie@orange.fr";
?>

<!DOCTYPE html>

<html>
<head>
<title>Magasin de téléphonie mobile - Vivre mobile - Armentières</title>

<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1">

<meta name="author" content="NeuroSoft Team">
<meta name="publisher" content="Mohamed KHAMMAL">
<meta name="reply-to" content="contact@vivremobile-armentieres.fr">

<meta name="category" content="Accueil">
<meta name="description" content="Vivre mobile Armentières - le spécialiste en téléphonie mobile, déblocage, réparation" >
<meta name="keywords" content="deblocage, debloquer, deverrouiller, code, restriction, unlock, simlock, desimlocker, imei, carte sim, telephone, portable, mobile, operateurs, deverrouillage, deblocage portable, Désimlockage, smartphone, Iphone, code de deblocage, telephone portable nokia, deblocage gsm, reparation, accesoires, gsm, HTC, IPAD, Apple, Lg, Nokia, Samsung, Sony, Ericsson, Sagem, Motorola, LG, BlackBerry, Alcatel">

<meta name="robots" content="index, follow">

<meta name="viewport" content="width=device-width" >
<link rel="alternate" hreflang="fr" href="<?php echo $Home; ?>" />

<link rel="shortcut icon" href="<?php echo $Home; ?>lib/img/icone.ico"/>
<link rel="stylesheet" type="text/css" media="screen AND (max-width: 480px)" href="<?php echo $Home; ?>lib/css/misenpatel.css"/>
<link rel="stylesheet" type="text/css" media="screen AND (min-width: 480px) AND (max-width: 1200px)" href="<?php echo $Home; ?>lib/css/misenpatab.css"/>
<link rel="stylesheet" type="text/css" media="screen AND (min-width: 1201px)" href="<?php echo $Home; ?>lib/css/misenpapc.css"/>
</head>

<body>
<CENTER>

<HEADER id="Haut">
<div id="Center">
<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/script/header.inc.php"); ?>
</div>
</HEADER>

<NAV>
<div id="Center">
<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/script/nav.inc.php"); ?>
</div>
</NAV>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/article/visite.inc.php"); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/article/accueil.inc.php"); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/article/telephone.inc.php"); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/article/abonnement.inc.php"); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/article/reparation.inc.php"); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/article/deblocage.inc.php"); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/article/accessoire.inc.php"); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/article/contact.inc.php"); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/article/plan.inc.php"); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/article/mention.inc.php"); ?>

<FOOTER>
<div id="Center">
<?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/script/footer.inc.php"); ?>
</div>
</FOOTER>

</CENTER>
</body>

</html>