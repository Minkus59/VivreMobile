<?php 
$Erreur=$_GET['ErreurContact'];
$Valid=$_GET['ValidContact'];
?>

<div id="Contact" class="contact">
<div id="Center">
<ARTICLE class="left">

<?php 
if (isset($Erreur)) { echo "<font color='#FF0000'>".$Erreur."</font></p>"; }
if (isset($Valid)) { echo "<font color='#00CC00'>".$Valid."</font></p>"; }
?>

<H1>Contact</H1></p>

<H2>Horaires d'ouverture</H2></p>

<table>
<TR><TH>Lundi</TH><TD><b>Fermé</b></TD><TR>
<TR><TH>Mardi</TH><TD>10h00 - 12h30</TD><TD>14h30 - 19h00</TD><TR>
<TR><TH>Mercredi</TH><TD>10h00 - 12h30</TD><TD>14h30 - 19h00</TD><TR>
<TR><TH>Jeudi</TH><TD>10h00 - 12h30</TD><TD>14h30 - 19h00</TD><TR>
<TR><TH>Vendredi</TH><TD>10h00 - 12h30</TD><TD>14h30 - 19h00</TD><TR>
<TR><TH>Samedi</TH><TD>10h00 - 12h30</TD><TD>14h30 - 19h00</TD><TR>
<TR><TH>Dimanche</TH><TD><b>Fermé</b></TD><TR>
</table>   </p>

Pour toutes questions <b>03 20 86 12 25</b> ou via le <b>formulaire ci-dessous</b> </p>

<form name="form_contact" id="form_contact" action="<?php echo $Home; ?>lib/script/contact.php" method="POST">

<textarea cols="40" rows="10" name="message" placeholder="Message *" required="required"><?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; } ?></textarea></p>
<input type="email" value="<?php if (isset($_SESSION['email'])) { echo $_SESSION['email']; } ?>" name="email" placeholder="Votre adresse e-mail *" required="required"/></p>
<input type="text" value="<?php if (isset($_SESSION['tel'])) { echo $_SESSION['tel']; } ?>" name="tel" placeholder="Numéro de téléphone *" required="required"/></p>
<input type="submit" name="Envoyer" value="Envoyer"/>

</form></p>

<font color='#FF0000'>*</font> : Informations requises</p>

</ARTICLE>

<img src="/lib/img/Magasin-VivreMobile-Armentieres.png"></p>

<!-- Placez cette balise où vous souhaitez faire apparaître le gadget widget. -->
<div class="g-page" data-width="200" data-href="https://plus.google.com/104641519761902340397" data-rel="publisher"></div>

 
<div id="Retour">
<input type="button" onclick="window.location.href='#Haut'">
</div>
</div>
</div>