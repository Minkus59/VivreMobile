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

<H1>R�paration</H1></p>

<ul>
<li>Vitre d��cran bris�e ( Samsumg, iPhone ) </li>
<li>La cam�ra qui ne fonctionne plus  </li>
<li>La batterie qui ne tient plus la charge  </li>
<li>Connecteur de charge ( iPhone, Samsung ) </li>
</ul> </p>

<span class="up">VIVRE MOBILE Armenti�res</span> r�pare votre t�l�phone en moins de 48H dans 70% des cas.</p>

<form name="form_devis" id="form_devis" action="<?php echo $Home; ?>lib/script/devis.php" method="POST">

<input type="text" name="marque" placeholder="Pr�ciser la marque*" required="required"/>
<input type="text" name="model" placeholder="Pr�ciser le model*" required="required"/>
</p>
<input type="text" name="nom" placeholder="Nom*" required="required"/>
<input type="text" name="cp" placeholder="Code postal*" required="required"/>
<input type="text" name="tel" placeholder="T�l�phone*" required="required"/>
<input type="email" name="email" placeholder="Votre adresse e-mail*" required="required"/>
</p>
<textarea name="descriptif" placeholder="D�tail de la r�paration"></textarea>
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