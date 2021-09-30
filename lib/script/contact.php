<?php 
require($_SERVER['DOCUMENT_ROOT']."/lib/script/fonction_perso.inc.php"); 
$Destinataire="espace.phonie@orange.fr";
$Home="http://vivremobile-armentieres.fr/";

if ((isset($_POST['Envoyer']))&&($_POST['Envoyer']=="Envoyer")) {

$Tel=FiltreTel('tel');
$Message=FiltreText('message');
$Email=FiltreEmail('email');

session_start();

  if ($Tel[0]===false) {
    $Erreur=$Tel[1]; 
  }  
  else {
    $_SESSION['tel']=$Tel;
  } 

  if ($Message[0]===false) {
    $Erreur=$Message[1];
  }  
  else {
    $_SESSION['message']=$Message;
  }  
         
  if ($Email[0]===false) {
    $Erreur=$Email[1]; 
  }    
  else {
    $_SESSION['email']=$Email;
  }  
  
  if (!isset($Erreur)) { 
    $boundary = md5(uniqid(mt_rand()));
    
    $Entete = "MIME-Version: 1.0\n";
    $Entete .= "Content-Type:multipart/mixed; boundary=\"$boundary\"\n";
    $Entete .= "From: \"Vivre Mobile Armentières\"<postmaster@vivremobile-armentieres.fr>\n";
    $Entete .= "Reply-to: \"Vivre Mobile Armentières\"<espace.phonie@orange.fr>\n";
    $Entete .= "\n";
    
    $Message_mail="Ce message est au format MIME.\n";
    
    $Message_mail.="--$boundary\n";
    $Message_mail.= "content-type: text/html; charset=iso-8859-1\n";
  
    $Message_mail.="\n";
    $Message_mail.="<html><head><title>Question ?</title></head>                        
    <body>Message de : ".$Email."<BR />
    Tel :".$Tel."<BR />
    <BR />
    Message : ".$Message."</ body></html>";
    $Message_mail.="\n\n";
  
    $Message_mail.="--$boundary\n";
      
    if (!mail($Destinataire, "Question ?", $Message_mail, $Entete)) {
        $Erreur.="L'e-mail n'a pu être envoyé, vérifiez que vous l'avez entré correctement !"; 
      header("location:".$Home."?ErreurContact=".$Erreur."#Contact");
    }
    else {
      session_unset();
      session_destroy();
      $Erreur.="Votre message à bien été enregistré, il sera traité dans les meilleurs délais";
      header("location:".$Home."?ValidContact=".$Erreur."#Contact");
    }
  }
  else {
      header("location:".$Home."?ErreurContact=".$Erreur."#Contact");
  }
}   
?>