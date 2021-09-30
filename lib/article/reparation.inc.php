<?php 
$Erreur=$_GET['ErreurRepa'];
$Valid=$_GET['ValidRepa'];
?>

<div id="Reparation" class="ContentBleu">
<div id="Center">

<ARTICLE class="right">
<?php 
if (isset($Erreur)) { echo "<font color='#FF0000'>".$Erreur."</font></p>"; }
if (isset($Valid)) { echo "<font color='#00CC00'>".$Valid."</font></p>"; }
?>

<H1>Réparation</H1></p>

<ul>
<li>Vitre d’écran brisée ( Samsumg, iPhone ) </li>
<li>La caméra qui ne fonctionne plus  </li>
<li>La batterie qui ne tient plus la charge  </li>
<li>Connecteur de charge ( iPhone, Samsung ) </li>
</ul> </p>

<span class="up">VIVRE MOBILE Armentières</span> répare votre téléphone en moins de 48H dans 70% des cas.</p>

<form name="form_devis" id="form_devis" action="<?php echo $Home; ?>lib/script/devis.php" method="POST">

<input type="text" name="marque" placeholder="Préciser la marque*" required="required"/>
<input type="text" name="model" placeholder="Préciser le model*" required="required"/>
</p>
<input type="text" name="nom" placeholder="Nom*" required="required"/>
<input type="text" name="cp" placeholder="Code postal*" required="required"/>
<input type="text" name="tel" placeholder="Téléphone*" required="required"/>
<input type="email" name="email" placeholder="Votre adresse e-mail*" required="required"/>
</p>
<textarea name="descriptif" placeholder="Détail de la réparation"></textarea>
</p>
<input type="submit" name="Valider" value="Demander un devis"/></p>

</form>

<span class="up">*</span> champ de saisie obligatoire </p>
</ARTICLE>

<img class="gauche" src="/lib/img/mobile-iphone-hs.png">

<div id="Retour">
<input type="button" onclick="window.location.href='#Haut'">
</div>
</div>
</div>