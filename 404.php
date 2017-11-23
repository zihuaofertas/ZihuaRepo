<?php get_header() ?>

       <div class="contenedor" >

           <div id="labarra" class="col-lg-3 col-md-3 col-sm-3 hidden-xs  sinMargen">
              <a href="#">
               <img id="logo" src="<?php bloginfo("template_directory"); ?>/img/ZihuaOfertasLogo.svg" /></a>

<div id="social">
   <p class="bold">SIGUENOS <span class="light">TAMBIEN EN</span></p>
    <a href="http://www.facebook.com/zihuaofertas" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/img/facebook.svg" /></a>
    <a href="http://www.twitter.com/zihuaofertas" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/img/twitter.svg" /></a>
</div>

<!-------panel---------------------->
  <?php if ( is_user_logged_in() ) {?>
<div id="panel">
<h4>Panel de control</h4>
<?php
if(is_user_logged_in() && current_user_can('administrator')) { ?>
<li><a href="<?php echo esc_url( $url ); ?>/zihuaofertas/wp-admin" target="_blank"> Admin</a></li>
<?php } ?>
<p>Hola <?php global $current_user;
get_currentuserinfo();
echo $current_user->user_login
?></p>
<ul>
<a href="<?php echo esc_url( $url ); ?>/zihuaofertas/nueva-oferta"><li>Agrega nueva oferta</li></a>
<a href="<?php echo esc_url( $url ); ?>/zihuaofertas/dashboard"><li>Edita o borrar ofertas</li></a>
<a href="<?php echo esc_url( $url ); ?>/zihuaofertas/edita-los-datos-de-tu-negocio"><li>Edita los datos de tu negocio</li></a>
</ul>

</div>
<?php
} else {?>
<!--aqui algo para los no logeados-->
<?php
}
?>

           </div>
           <!--barra------------------------------------->

 <div id="principales_contenedor" class="col-lg-7 col-md-6 col-sm-9 sinMargen cruz">

<div id="formularios" >

   <h1 class="paddextra">Que pena, parece que la dirección ya no esta disponible, por favor usa el menú principal para ir al inicio de Zihua Ofertas</h1>
<?php wp_footer(); $ruta= get_template_directory_uri(); ?>
   <img src="<?php echo $ruta; ?>/img/404.svg" class="cien paddextra" />


</div>


            </div>




           <!--contenedor CENTRAL-->
           <div class="col-lg-2 col-lg-push-0 col-md-3 col-md-pull-0 col-sm-9 col-sm-push-3 col-xs-12">
               <div class="banner_barra sinMargen col-md-12 col-md-push-0 col-sm-5 col-sm-push-7  col-xs-12">
                    <?php if(function_exists('the_ad')) the_ad(286); ?>
               </div>


          <!--suscribete barra xs escondido-->
              <div id="suscribeteBarra" class="col-md-12 col-md-pull-0 col-sm-7 col-sm-pull-5  col-xs-12">
<img src="<?php bloginfo("template_directory"); ?>/img/ZihuaOfertasNews.svg" />
              <p> <strong>¿Quieres recibir ofertas directamente?</strong> suscribite ahora</p>
       <?php echo do_shortcode('[mc4wp_form id="56"]') ?>
           </div><!--fin suscribete barra-->

           </div>
            <div class="clearfix"></div>
       </div>




<?php get_footer(); ?>
