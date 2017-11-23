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



           </div>
           <!--barra------------------------------------->

 <div id="principales_contenedor" class="col-lg-7 col-md-6 col-sm-9 sinMargen cruz">
<div id="formularios" >

   <h1><?php the_title(); ?></h1>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div>
<?php the_content(); ?>
</div>
<?php endwhile; else: ?>
<?php endif; ?>


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
