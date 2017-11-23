  <?php wp_footer(); $ruta= get_template_directory_uri(); ?>
      <footer class="col-md-12  sinMargen">
       <div class="contenedor">

           <div class="col-md-4 col-sm-6 col-xs-12  pie">
              <img style="width: 8em;" src="<?php echo $ruta; ?>/img/ZihuaOfertasLogoFoot.svg" />

           </div>
           <div class="col-md-4 col-sm-6 col-xs-12 pie light">

   <ul id="menu_pie">
              <li><a href="http://zihuaofertas.com/">Inicio</a></li>
               <li><a href="http://zihuaofertas.com/registra-tu-negocio/">Registra tu negocio</a></li>
               <li><a href="http://zihuaofertas.com/nueva-oferta//">Publica tus ofertas</a></li>
               <li><a href="http://zihuaofertas.com/terminos/">Terminos y condiciones</a></li>
               </ul>
               <li><a href="https://www.facebook.com/groups/280062582148295" target="_blank" class="bold"><span class="light">Zihua Ofertas</span> Segunda mano</a></li>
           </div>
           <div class="col-md-4 col-sm-12 col-xs-12 pie">

    <p class="bold" style="padding-bottom:1em;">SIGUENOS <span class="light">TAMBIEN EN</span></p>
<a href="https://twitter.com/ZihuaOfertas" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @ZihuaOfertas</a>
<br>
     <div class="fb-page" data-href="https://www.facebook.com/zihuaofertas" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/zihuaofertas"><a href="https://www.facebook.com/zihuaofertas">Zihua Ofertas</a></blockquote></div></div>



<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!--
    <a href="http://www.facebook.com/zihuaofertas" target="_blank"><img src="img/facebook.svg" /></a>
    <a href="http://www.twitter.com/zihuaofertas" target="_blank"><img src="img/twitter.svg" /></a>
-->
           </div>

<!--
           <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center">
               <img style="width: 5em;" src="img/ZihuaOfertasLogoFoot.svg" />
           </div>
-->
           </div>
           <div style="clear:both;"></div>
       </footer>
        <!--[if lt IE 8]>
            <p amarilloclass="browserupgrade">Esyas usando un navegador <strong>desactualizado</strong>. Por favor <a href="http://browsehappy.com/">visita este enlace</a> para actualizarlo.</p>
        <![endif]-->

     <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
     <?php if(!(is_page("edita-los-datos-de-tu-negocio"))){ ?>

      <script src="<?php echo $ruta; ?>/js/vendor/jquery-3.0.0.min.js"></script>
      <?php } ?>
<script src="<?php echo $ruta; ?>/js/vendor/ease.js"></script>
        <script src="<?php echo $ruta; ?>/js/vendor/bootstrap.min.js"></script>
         <script src="<?php echo $ruta; ?>/js/vendor/owl.carousel.min.js"></script>
          <script src="<?php echo $ruta; ?>/js/vendor/jQuery.succinct.min.js"></script>
          <script src="<?php echo $ruta; ?>/js/vendor/particles.min.js"></script>
          <script src="<?php echo $ruta; ?>/js/vendor/intro.js-2.2.0/intro.js"></script>
         <script src="<?php echo $ruta; ?>/js/accion.js"></script>


        <!-- Googgrisle Analytics: cambiar UA-XXXXX-X sitio ID. -->
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90194936-1', 'auto');
  ga('send', 'pageview');

</script>

        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=1374535182832357";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    </body>
</html>
<?php wp_footer(); ?>
