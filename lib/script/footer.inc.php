<div id="BoutonBas">

</div>

<div id="Cadre">
<H1>Les services</H1></p>
<li><a href="<?php echo $Home; ?>Telephone-reconditionne-armentieres/#Telephone">Téléphone</a></li>
<li><a href="<?php echo $Home; ?>Forfait-mobile-armentieres/#Abonnement">Abonnement</a></li>
<li><a href="<?php echo $Home; ?>Reparation-telephone-armentieres/#Reparation">Réparation</a></li>
<li><a href="<?php echo $Home; ?>Deblocage-telephone-Armentieres/#Deblocage">Déblocage</a></li>
<li><a href="<?php echo $Home; ?>Accessoires-telephone-nieppe/#Accessoire">Accessoire</a></li>
</div>

<div id="Cadre">
<H1>La boutique</H1></p>
<li><a href="#Contact">Contact</a></li>
<li><a href="#Plandacces">Plan d'accès</a></li>
<li><a href="#Mentions-Legales">Mentions-légales</a></li>
</div>

<div id="Cadre">
<H1>La société</H1></p>
<a href="<?php echo $Home; ?>"><img src="<?php echo $Home; ?>lib/img/vivre_mobile_armentieres.png"></a>

<li>53 rue de dunkerque,</li>
<li>59280 Armentières</li>
<li>Face au café tabac</li></p>
</div>


<div id="NeuroSoft">
<a href="http://neuro-soft.fr/" target="_blank"><img src="http://neuro-soft.fr/lib/img/En-tete.png"></a>
</div>

<!--[if !IE]><!-->
<script type="text/javascript" src="indexdata/lib/jquery-2.0.3.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8]>
<script type="text/javascript" src="indexdata/lib/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gt IE 8]>
<script type="text/javascript" src="indexdata/lib/jquery-2.0.3.min.js"></script>
<![endif]-->

<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'fr'}
</script>
      
<script type="text/javascript" language="javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57493378-14', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript" language="javascript">
var larg = (document.body.clientWidth);

if (larg >= 1200 ) {
   $("footer").addClass("fixed");
}
$("#BoutonBas").addClass("BoutonFix");

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll == 0) {
       if (larg >= 1200 ) {
          $("footer").addClass("fixed");
          $("footer").removeClass("relativ");
          $("#BoutonBas").addClass("BoutonFix");
          $("#BoutonBas").removeClass("relative");
       }
    $("nav").addClass("relativ");
    $("nav").removeClass("fixedTop");
    }
    else {
    if (larg >= 1200 ) {
       $("footer").removeClass("fixed");
       $("footer").addClass("relativ");
       $("#BoutonBas").removeClass("BoutonFix");
       $("#BoutonBas").addClass("relative");
    }
    $("nav").removeClass("relativ");
    $("nav").addClass("fixedTop");
    }
});
</script>

 <script type="text/javascript" language="javascript">
$('a[href^="#"]').click(function(){
  var the_id = $(this).attr("href");

  $('html, body').animate({
    scrollTop:$(the_id).offset().top
  }, 'slow');
  return false;
});
</script>

<script type="text/javascript">
jQuery( document ).ready(function( jQuery ) {
    if (/(iphone|ipod|ipad|android|iemobile|webos|fennec|blackberry|kindle|series60|playbook|opera\smini|opera\smobi|opera\stablet|symbianos|palmsource|palmos|blazer|windows\sce|windows\sphone|wp7|bolt|doris|dorothy|gobrowser|iris|maemo|minimo|netfront|semc-browser|skyfire|teashark|teleca|uzardweb|avantgo|docomo|kddi|ddipocket|polaris|eudoraweb|opwv|plink|plucker|pie|xiino|benq|playbook|bb|cricket|dell|bb10|nintendo|up.browser|playstation|tear|mib|obigo|midp|mobile|tablet)/.test(navigator.userAgent.toLowerCase())) {
        // add event listener on resize event (for orientation change)
        jQuery(window).resize(function() {
            readDeviceOrientation();
        });
        // initial execution
        readDeviceOrientation();
    }
});
</script>

