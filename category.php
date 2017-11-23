<?php get_header();


$categoria=get_the_category();
$mi_cat=$categoria[0]-> term_id;
$nombre_cat = $categoria[0]->cat_name;
$nombre = $nombre_cat;

?>

<div class="contenedor" >

<div id="labarra2" class="col-md-3 col-sm-4 col-xs-12  sinMargen">
<a href="http://zihuaofertas.com"><img id="logo" src="<?php bloginfo("template_directory"); ?>/img/ZihuaOfertasLogo.svg" alt="Ofertas Ixtapa Zihuatanejo" /></a>
<h1 >
    <?php echo $nombre; ?>
</h1>
<h2 data-step="7" data-intro="Suscribete y y forma parte de la comunidad Zihua Ofertas recibiendo ofertas y descuentos."><img src="<?php bloginfo("template_directory"); ?>/img/ZihuaOfertasNews.svg" /></h2>
<p ><strong>Suscribete y recibe grandes descuentos, ¡ahorra ahora!</strong></p>
<?php echo do_shortcode('[mc4wp_form id="56"]') ?>
<!-- <form action="">
<input type="text" name="fname"  placeholder="Nombre"><br>
<input type="text" name="lname"  placeholder="Email"><br>
<input type="submit" value="Enviar">
</form>
-->
<div id="social">
<p class="bold">SIGUENOS <span class="light">TAMBIEN EN</span></p>
<a href="http://www.facebook.com/zihuaofertas" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/img/facebook.svg" /></a>
<a href="http://www.twitter.com/zihuaofertas" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/img/twitter.svg" /></a>
</div>




</div>
<!--barra------------------------------------->


<div id="principales_contenedor" class="col-md-9 col-sm-8 col-xs-12 sinMargen cruz">

<!-- slider-->
<div id="portada-cat" class=" col-md-12 sinMargen   ">

 <?php
  // image id is stored as term meta
$image_id = get_term_meta($mi_cat, 'image', true );

// image data stored in array, second argument is which image size to retrieve
$image_data = wp_get_attachment_image_src( $image_id, 'full' );

// image url is the first item in the array (aka 0)
$image = $image_data[0];

if ( ! empty( $image ) ) {
    echo '<img src="' . esc_url( $image ) . '" class="cien" />';
}
    ?>
</div>
<!-- fin slider-->

<!--CONTENIDO DE LA OFERTA------------>
<div class="contenido_single col-md-12 col-sm-12 col-xs-12 sinMargen">

<div class="contenedor paddextra">
<h1>Todas las ofertas de <?php echo $nombre; ?></h1>
<p><?php echo category_description( $mi_cat ); ?></p>
<div class="row">
<div class=" col-md-12">
<?php
    /*
    $cuatro=0;
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    */
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array( 'posts_per_page' => 12, 'post_type' => array('post','ofertas_gratis'), 'cat' => $mi_cat, 'paged' => $paged );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

    $cuatro++; ?>

<!--oferta frente -->
     <div class="ofertapagada_f tamaGratis col-md-3 col-sm-6 col-xs-12">

        <a href="<?php the_permalink(); ?>">

              <div class="imaFrente">
              <?php if (has_post_thumbnail()) : ?>
<?php the_post_thumbnail('full', array('class' => '')); ?>
<?php else : ?>
<img src="<?php bloginfo('template_url'); ?>/i/noimage.jpg" width="150" height="150" alt=""/>
<?php endif; ?>
          </div>

          <h3>
            <?php the_title() ?>
          </h3>

        </a>
<!--------------------------------->
           <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="neg-nombre"><?php
the_author_meta( 'first_name', $author_id );
?></a>
     <!--------------------------------->


      </div>

<?php if($cuatro==4){ ?>
       <div class="clearfix"></div>
        <div class="banner-cat"><?php the_ad_placement('categorias'); ?></div>
     <?php }; ?>


<?php

    endwhile; //else: ?>


<?php //endif; ?>
  <!--oferta frente -->



</div><!-- fin col 9 ofertas fernte e inicio con banner-->

<div class="paddextra" >
 <?php previous_posts_link( '« Ofertas anteriores' ); ?>
<span>    </span>
 <?php next_posts_link('Siguiente') ?>
</div>
</div><!--fin row-->




</div>
</div>
<div class="clearfix"></div>


<!--CONTENIDO DE LA OFERTA------------>
<div class="contenido_single col-md-12 ">
     <div class="col-md-7">
      <?php echo do_shortcode('[mashshare]'); ?>
      </div>
      <div class="col-md-4" style="padding-top:0.9em;">
<div class="fb-like" data-href="http://zihuaofertas.com" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
      </div>

           </div>
     <div class="clearfix"></div>



<!--CONTENIDO DE LA OFERTA------------>





</div>

</div>



<div class="clearfix"></div>
<?php get_footer() ?>
