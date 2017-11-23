<?php get_header();
wp_footer(); $ruta= get_template_directory_uri(); ?>


<!--
<div id="particles-js">
<div id="well">
  
  <img id="logo" src="<?php echo $ruta; ?>/img/ZihuaOfertasLogo.svg" alt="Ofertas Ixtapa Zihuatanejo" alt="Zihua Ofertas Zihuatanejo Ixtapa" />
  
  <h2 >Bienvenido al espacio para las <strong>ofertas</strong> de los negocios en
   <strong>Ixtapa Zihuatanejo</strong></h2>
  
</div>
</div>

-->

<div id="wellcome">
  
  <img id="logo" src="<?php echo $ruta; ?>/img/ZihuaOfertasLogo.svg" alt="Ofertas Ixtapa Zihuatanejo" alt="Zihua Ofertas Zihuatanejo Ixtapa" />
  
  <h2 >Bienvenido al espacio para <span>las ofertas de </span> <br>los negocios en <span>Ixtapa Zihuatanejo</span></h2>
  
  <img src="<?php echo $ruta; ?>/img/arrow-down-2.gif" class="cien scrollmas " alt="">
</div>

<!---------------------------slider--->

<div class="contenedor resaltadas"><h1>OFERTAS RESALTADAS <i class="fa fa-tags" aria-hidden="true"></i></h1></div>

<div class=" contenedor " >
<!--barra-->
<div id="principales_contenedo" class="col-md-12 sinMargen  ">

<!-- slider-->
<div id="slider-principal" class=" col-md-12 sinMargen owl-carousel owl-theme" data-step="3" data-intro="No te pierdas las ofertas destacadas de Zihua Ofertas.">

<?php //$my_query = new WP_Query('category_name=seleccion del editor&posts_per_page=4');
//$my_query = new WP_Query( 'cat=$mi_cat&tag=sele&posts_per_page=6' );
$my_query = new WP_Query( 'posts_per_page=4&tag=destacado' );
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate[] = $post->ID ?>
              <!--item----------------------->
<div class="itemSlide ">
<div  class="col-md-12  sinMargen ima-principal">

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

    <a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" class="img-responsive" alt="Oferta Destacada Zihua Ofertas" /></a>
<?php endif; ?>
</div>

<!--contenido-->
 <div id="barra2" class="col-md-12 sinMargen">
 <span></span>
 
 <!--
 <div id="titulo" class="col-md-12 col-sm-8 col-xs-12 ">
     <h1> <a href="<?php //the_permalink(); ?>"><?php //the_title() ?></a></h1>
<p><?php //the_excerpt(); ?></p>
     </div>
-->

<!-- descripcion del negocio-->
<div class="logo_nombre">
<?php
//obtengo el meta del "usuario" la id de la imagen
$logo = get_usermeta($post->post_author,'logotipo');
?>
<li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
<img src="<?php
//muestro la url de la imagen con su id
          echo wp_get_attachment_url( $logo ); ?>"  class="img-responsive logo_home_destacado" alt="Negocio destacado Zihua Ofertas"/></a></li>
    
    
<?php array_push($do_not_duplicate,$post->ID);
      $categories = get_the_category();
$cat_name = $categories[0]->cat_name;
      ?>
<li> <div class="centrar"><i class="fa fa-tags" aria-hidden="true"></i> | <?php echo $cat_name ?></div></li>

<!--
<p>Ver más ofertas de:</p>
<?php //the_author_posts_link(); ?>
-->
</div>


</div>

<!--barra-->
</div>
<!--fin item----------------------->
<?php endwhile; wp_reset_postdata(); ?>


</div>
<!-- fin slider-->


</div>




<div class="clearfix"></div>
<!--contenedor princiales-->
</div>

<!---------------------------negocios logos--->

<div id="contenedor_premium" class="contenedor" >

<a href="http://zihuaofertas.com/registra-tu-negocio/">
    <div id="agrega_home">
    <h3>AGREGA AHORA TU NEGOCIO</h3>
    <h4>GRATIS</h4>
</div>
</a>
<!------------NEGOCIOS PREMIUM------>
<div class="col-md-12 sinMargen margenArriba2em" data-step="5" data-intro="Visita los muros de los negocios con mas ofertas.">
<p id="premium" class="col-md-2 col-sm-12 col-xs-12 light letras_chicas">NEGOCIOS<br> <strong class="bold letras_grandes"> POPULARES</strong></p>



<?php
$wp_query = new WP_Query();
$wp_query -> query('post_type=muro_home&showposts=5');
    while ($wp_query->have_posts()) : $wp_query->the_post();


 $ima_id = get_post_meta($post->ID, "_ct_upload_57e545d950e5f", true);
 $logo_muro= wp_get_attachment_url( $ima_id ); ?>


<a href="<?php echo  get_post_meta($post->ID, "_ct_text_57e5461093a85", true); ?>">
<div class="col-md-1 col-sm-2 col-xs-3 sinMargen">
<img class="cien" src="<?php echo $logo_muro; ?> " alt="Negocios de Zihua Ofertas" />
    </div>
</a>


 <?php
endwhile;
       ?>

</div>


</div>
<!--negocios / banner -->

<div class="clearfix"></div>

<!-- fin header principal e inicio del resto de contenido-->

<div class="contenedor caja_blanca" >
<h1>Ofertas destacadas</h1>
<p style="padding-bottom:1.5em;">Las mejores ofertas de Ixtapa Zihuatanejo.</p>
<div class="row">
  <div class="col-md-9 col-sm-9 col-xs-12">

<?php
query_posts($query_string . '&posts_per_page=8&tag=principales');
if (have_posts()) : while (have_posts()) : the_post();
if (in_array($post->ID, $do_not_duplicate)) continue; ?>

<?php array_push($do_not_duplicate,$post->ID);
      $categories = get_the_category();
$cat_name = $categories[0]->cat_name;
      ?>

      <!--oferta frente -->


      <!------------------------------------>

      <div class="ofertapagada_f col-md-3 col-sm-6 col-xs-12">

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
      <p><i class="fa fa-tags" aria-hidden="true"></i> | <?php echo $cat_name ?></p>

      </div>


<?php endwhile;  endif; ?>




  </div><!-- fin col 9 ofertas fernte e inicio con banner-->
  <div class="col-md-3 col-sm-3 col-xs-12 banner">

<?php if(function_exists('the_ad')) the_ad(259); ?>
     

     <!-- <img src="http://localhost/zihuaofertas/wp-content/uploads/2016/07/banner.jpg" class="img-responsive" />-->
  </div>

</div><!--fin row-->

</div>

<!--fin contenedor-->


<!---newslatter-->
<div id="labarra" class="contenedor  sinMargen ">

<div class=" flex margenArriba2em">
    <div class="col-md-4 col-sm-4 txt-der cruz padd2em">
    <h2 data-step="7" data-intro="Suscribete y y forma parte de la comunidad Zihua Ofertas recibiendo ofertas y descuentos."><img src="<?php echo $ruta; ?>/img/ZihuaOfertasNews.svg" alt="Suscribete a Zihua Ofertas" /></h2>
    
    <p ><strong>Suscribete ahora</strong> y se parte <br> de los que reciben las ofertas y promociones primero.</p>
    
    </div>
    
    <div class="col-md-4 col-sm-4 cruz padd2em">
    <?php echo do_shortcode('[mc4wp_form id="56"]') ?>
      </div> 

<div class="col-md-4 col-sm-4  padd2em" id="social">

<div class="centrar ">
    <p class="bold">SIGUENOS <span class="light">TAMBIEN EN</span></p>
<a href="http://www.facebook.com/zihuaofertas" target="_blank"><img src="<?php echo $ruta; ?>/img/facebook.svg" alt="Facebook Zihua Ofertas" /></a>
<a href="http://www.twitter.com/zihuaofertas" target="_blank"><img src="<?php echo $ruta; ?>/img/twitter.svg" alt="Twitter Zihua Ofertas" /></a>
</div>

      </div> 
</div>

</div>

<div class="clearfix"></div>




<div class="container-fluid fondoAma">
    <div class="contenedor">
        <div class="row">
            <div class="col-md-4 col-sm-4">
               <img src="<?php echo $ruta; ?>/img/tienda.svg" class="cien">
               <h3>Agrega tu negocio</h3>
               <p>Al ser parte de Zihua Ofertas tu negocio tendrá su espacio donde anunciar fácil y rápido sus ofertas.</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <img src="<?php echo $ruta; ?>/img/oferta.svg" class="cien">
                 <h3>Publica tus ofertas</h3>
                 <p>Zihua Ofertas tiene las herramientas para anunciar todas las ofertas de tu negocio y estarán en linea hasta por *6 meses.</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <img src="<?php echo $ruta; ?>/img/caja.svg" class="cien">
                 <h3>Que se entere Ixtapa-Zihuatanejo</h3>
                    <p>*Aparte podrán seguirte tus clientes para recibir notificaciones y por si fuera poco se publicarán en nuestras redes sociales a mas de 18,000 personas.</p>
            </div>
<!-- <p class="minitexto">*No aplica en ofertas gratis</p> -->
        </div>
    </div>
</div>
<div class="contenedor paquetes">
<div class="row">


<div class="col-md-8"  style="border:solid 1px #ccc; border-right:solid 1px transparent; padding:1em;" id="pqt">
<h1>Pública ahora las ofertas de tu negocio</h1>
<h2 class="light">Zihua Ofertas es el espacio para mostrar las ofertas de tu negocio, <strong>es sencillo, efectivo y gratis</strong>
</h2>

</div>

<div class="col-md-4 col-sm-12 " style="border:solid 1px #ccc; border-left:solid 1px transparent; padding:1em;"> <strong ><a href="http://zihuaofertas.com/nueva-oferta/" class="textoamarillo">Publica ahora tus ofertas</a></strong> <!-- eligiendo el paquete ideal para tu negocio--> y <strong>llega a mas de 18,000 clientes potenciales que siguen la comunidad Zihua Ofertas.</strong></div>
<div class="clearfix"></div>
<div class="col-md-12">
<p style="display:none;"> <a href="#" class="linkpqt center-block" id="verPqts" data-step="6" data-intro="Tenemos soluciones para publicar las ofertas de tu negocio.">SABER MÁS</a></p>
</div>

<div class="col-md-12 col-sm-12" id="Pqts">
 <div class="col-md-3 col-sm-4 caja2">
  <h2>ESTANDAR $0</h2>
  <h3>Publica tus ofertas con:</h3>
  <ul>
      <li class="expo">Exposición Normal</li>
      <li>3 fotos</li>
      <li>Mapa de ubicación</li>
      <!--
      <li class="tache">Sin publicidad de otros negocios</li>
      <li class="tache">Enlace a todas tus ofertas alacenadas</li>
      <li class="tache">Contacto con tus clientes</li>
      <li class="tache">Se publica en nuestras redes</li>
      <li class="tache">Oferta principal en este sitio</li>
      <li class="tache">Banner destacado</li>
      <li class="tache">Espacio en boletín impreso 1/8</li>
      <li class="tache">Micro sitio para tu negocio</li>
      -->
  </ul>
<p> <a href="http://zihuaofertas.com/ofertas-gratis/" class="linkpqt">Gratis</a></p>

</div>
<!-------------------------->

<div class="col-md-3 col-sm-4 caja3">
  <h2>1 x $150</h2>
  <h3>Paquete básico</h3>
  <ul>
      <li class="expo">Exposición Alta</li>
      <li>Pública una oferta</li>
      <li>Hasta 5 fotos por oferta</li>
      <li>Mapa de ubicación</li>
      <li>Sin publicidad de otros negocios</li>
      <li>Alertas de tus ofertas a clientes interesados</li>
      <li>Página con todas tus ofertas</li>
      <li>Se publica en nuestras redes (18 mil usuarios)</li>
      <li>Oferta principal en el sitio</li>

      <!--
      <li class="tache">Banner destacado</li>
      <li class="tache">Espacio en boletín impreso 1/8</li>
      <li class="tache">Micro sitio para tu negocio</li>
      -->
  </ul>
<p> <a href="http://zihuaofertas.com/paquetes-2/" class="linkpqt">Comprar paquete</a></p>

</div>
<!-------------------------->

<div class="col-md-3 col-sm-4 caja4">
  <h2>3 x $299</h2>
  <h3>Ahorra dinero </h3>
 <ul>
      <li class="expo">Exposición Máxima</li>
      <li>Pública una oferta</li>
      <li>Hasta 5 fotos por oferta</li>
      <li>Mapa de ubicación</li>
      <li>Sin publicidad de otros negocios</li>
      <li>Alertas de tus ofertas a clientes interesados</li>
      <li>Página con todas tus ofertas</li>
      <li>Se publica en nuestras redes (18 mil usuarios)</li>
      <li>Oferta principal en el sitio</li>
      <!--
      <li>Banner destacado</li>
      <li>Espacio en boletín impreso 1/8</li>
      -->
  </ul>
<p> <a href="http://zihuaofertas.com/paquetes-2/" class="linkpqt">Comprar paquete</a></p>

</div>
<!-------------------------->

<div class="col-md-3 col-sm-12  caja1">
  <h2>¿Necesitas mas información?</h2>
  <h3>Contactanos para asesorarte</h3>
  <p> <a href="http://negocios.zihuaofertas.com/" class="linkpqt">Saber más</a></p>
 <?php //gravity_form( 1, $display_title = false, $display_description = false, $ajax = true );

    ?>




 <!-- <p>O llamanos al <br>(755) Numero nuevo<br> si lo prefieres contactanos por <strong>whatsapp</strong> al mismo numero.</p>-->



</div>
<!-------------------------->
</div>


</div><!-- fin row-->
</div>


 <div class="contenedor caja_blanca">
<h1> Todas las ofertas</h1>
<p style="padding-bottom:1.5em;">Ofertas recientes y variadas</p>
<div class="row">

  <div class="col-md-9 col-sm-9 col-xs-12">
<?php //query_posts( 'category_name=special_cat&posts_per_page=8' ); ?>
<?php
$args = array( 'posts_per_page' => 24, 'post_type' => array('post','ofertas_gratis'));
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
setup_postdata( $post );
      if (in_array($post->ID, $do_not_duplicate)) continue;
       $categories = get_the_category();
$cat_name = $categories[0]->cat_name;
      ?>

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

      <p><i class="fa fa-tags" aria-hidden="true"></i> | <?php echo $cat_name ?></p>

      </div>

   <?php
endforeach;
wp_reset_postdata();
?>

  </div><!-- fin col 9 ofertas fernte e inicio con banner-->


  <div class="col-md-3 col-sm-3 col-xs-12 banner">
<!--banner sec-->
 <?php if(function_exists('the_ad')) the_ad(270); ?>

 </div>

</div><!--fin row-->

</div>
<!--fin contenedor-->
<?php get_footer(); ?>
