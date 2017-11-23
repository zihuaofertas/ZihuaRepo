<?php get_header();


$categoria=get_the_category();
$mi_cat=$categoria[0]-> term_id;
$nombre_cat = $categoria[0]->cat_name;
$nombre = $nombre_cat;
$slug = $categoria[0]->slug;

$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>
       <div class="contenedor" >

           <div id="labarra" class="col-lg-3 col-md-3 col-sm-3 hidden-xs  sinMargen">


<?php
               //obtengo el meta del "usuario" la id de la imagen
$images = get_usermeta($post->post_author,'logotipo');
?>
<!-- descripcion del negocio-->

<?php if($images){?>
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
<img src="<?php
          //muestro la url de la imagen con su id
          echo wp_get_attachment_url( $images ); ?>"  class="img-responsive pad_catalogo" alt="Ofertas Ixtapa Zihuatanejo" />
               </a>

               <?php }else{ ?>
               <h1 class="h1sinlogo"><?php echo get_the_author_meta('display_name', $user_ID ); ?> </h1>

               <?php if(is_user_logged_in()){echo "Agrega el logotipo de tu negocio en Edita los datos de tu negocio en tu Panel de control";} ?>
               <?php } ?>

<!-- giro del negocio-->
<h3><?php echo get_usermeta($post->post_author,'giro'); ?></h3>

<!-- descripcion del negocio-->
<p><?php echo get_usermeta($post->post_author,'description'); ?></p>

<?php
    $face=get_the_author_meta('facebook', $user_ID );
    $twitter=get_the_author_meta('twitter', $user_ID );
    ?>

<div id="social">
   <p class="bold" style="text-transform:uppercase;">SIGUE A <?php echo get_the_author_meta('first_name', $user_ID ); ?> <span class="light">TAMBIEN EN</span></p>

<?php if(!$face && !$twitter){echo "Sin redes sociales";} ?>

<?php if ($face){?>
<a href="http://<?php echo $face; ?>" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/img/facebook.svg" alt="Facebook Zihua ofertas"/></a>

<?php }?>
<?php if ($twitter){?>
<a href="http://<?php echo $twitter; ?>" target="_blank">
<img src="<?php bloginfo("template_directory"); ?>/img/twitter.svg" alt="twitter zihua ofertas" />
</a>
<?php }?>
</div>

<p><h3>Esta oferta se público gratis</h3> <a href="http://zihuaofertas.com/registra-tu-negocio/">registra tu negocio</a> y pública tus ofertas<p>



           </div>
           <!--barra------------------------------------->
 <div id="principales_contenedor" class="col-lg-7 col-md-6 col-sm-9 sinMargen cruz">

         <!-- slider-->
         <div id="single-gal" class=" col-md-12 sinMargen owl-carousel owl-theme">

 <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
                <?php
                    $args = array(
                        'post_type' => 'attachment',
                        'orderby' => 'menu_order',
                        'order' => ASC,
                        'numberposts' => -1,
                        'post_status' => null,
                        'post_parent' => $post->ID,
                        'exclude' => get_post_thumbnail_id(),
                        'class'    => "attachment-full"
                    );
                    $attachments = get_posts($args);
                    if ( $attachments ):
                    ?>
                    <?php foreach ( $attachments as $attachment ):?>

    <?php echo wp_get_attachment_image($attachment->ID, "gale-single");?>


                            <?php endforeach; endif;?>
                              <?php endwhile;?>
                            <?php endif; ?>


     </div>
          <!-- fin slider-->

            <!--CONTENIDO DE LA OFERTA------------>
  <div class="contenido_single col-md-12 col-sm-12 col-xs-12 sinMargen">


<h1><?php the_title(); ?></h1>



 <div id="el_conte" class="col-md-9 col-md-push-3"><?php the_content(); ?></div>


     <div class="col-md-3 col-md-pull-9  barra-precio">
<?php
$precio= get_post_meta($post->ID, "precio", true);
$descuento= get_post_meta($post->ID, "descuento", true);
if($precio){
?>
<div class="precio">
Precio: <br>
<?php echo $precio; ?>
</div>
<?php }?>

<?php
if($descuento){
?>
<div class="precio">
Descuentos: <br>
<?php echo $descuento; ?>
</div>
<?php }?>

     <!---------------------------------------------------------------->
     <div class="precio">
Categoría: <br>
<?php echo $nombre; ?>
</div>

<p>
Fecha de publicación: <br>
<?php the_date(); ?>
</p>

     <div class="vigencia col-md-12">
          <?php echo apply_filters('the_title', get_post_meta($post->ID, "terminos_y_condiciones_de_esta_oferta", true)); ?>
      </div>

      <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
      </div>




      <div class="clearfix"></div>
           <!-- <a href="
                    <?php /* $args = array(
    'post_mime_type' => 'application/pdf',
    'post_type' => 'attachment',
    'posts_per_page' => -1,
    'post_parent' => $post->ID
);

$attachments = get_posts( $args );
if ( $attachments ) {foreach ( $attachments as $attachment ) { echo wp_get_attachment_url( $attachment->ID ); }} */ ?>
                    " class="todaslasofertas" >Ver nuestro catalogo</a>-->
           </div>
 <div class="clearfix"></div>
           <div class="pan">
<?php if ( function_exists('yoast_breadcrumb') )
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

     </div>
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


     <div class="datos_single">
                       <!--<h3 >Datos de <?php //echo get_the_author_meta('first_name', $user_ID ); ?></h3>-->
                       </div>
                        <div id="datos_single">

                        <div class="col-md-4 col-sm-4"><img class="centrarIcono" src="<?php bloginfo("template_directory"); ?>/img/cel.svg" alt="telefono" />
                        <p> <?php echo get_the_author_meta('telef_no', $user_ID ); ?> </p>
                        </div>

                          <div class="col-md-4 col-sm-4 "><img class="centrarIcono" src="<?php bloginfo("template_directory"); ?>/img/pin.svg" alt="ubicacion" />
                        <p> <?php echo get_usermeta($post->post_author,'direcci_n_'); ?></p>
                        </div>

                          <div class="col-md-4 col-sm-4"><img class="centrarIcono" src="<?php bloginfo("template_directory"); ?>/img/web.svg" alt="pagina web" />
                        <p> <?php echo get_usermeta($post->post_author,'user_url'); ?></p>
                        </div>
<div class="clearfix"></div>

</div>


           <div id="mapa">


<!-- ya lo agrego el plugin de wp.user <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

AIzaSyDmUFEdUzIpaULGnm3_ZV7OUm1OfCvNGYI

-->


     <script>
         var myLatlng = new google.maps.LatLng(<?php echo get_the_author_meta('mapa', $user_ID ); ?>);
      function initialize() {
        var mapCanvas = document.getElementById('mapa');
        var mapOptions = {
          center: myLatlng,
        scrollwheel: false,
            draggable: false,
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }


        var map = new google.maps.Map(mapCanvas, mapOptions)
        var marker = new google.maps.Marker({
    position:myLatlng,
    title: 'Hello World!'
  });
          marker.setMap(map);
      }


      google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</div>


           </div>

            </div>




           <!--contenedor CENTRAL-->
           <div class="col-lg-2 col-lg-push-0 col-md-3 col-md-pull-0 col-sm-9 col-sm-push-3 col-xs-12">
               <div class="banner_barra sinMargen col-md-12 col-md-push-0 col-sm-5 col-sm-push-7  col-xs-12">
                 <?php the_ad_placement('single'); ?>
               </div>


          <!--suscribete barra xs escondido-->
              <div id="suscribeteBarra" class="col-md-12 col-md-pull-0 col-sm-7 col-sm-pull-5  col-xs-12">
<img src="<?php bloginfo("template_directory"); ?>/img/ZihuaOfertasNews.svg" alt="Suscribete a Zihua Ofertas" />
              <p> <strong>¿Quieres recibir ofertas como estas directamente?</strong> suscribite ahora</p>
       <?php echo do_shortcode('[mc4wp_form id="56"]') ?>
           </div><!--fin suscribete barra-->

           </div>
            <div class="clearfix"></div>
       </div>


        <!-- fin header principal e inicio del resto de contenido-->
   <div class="contenedor" style="clear:both; background:#fff; padding:2em; margin-top:2em;">
              <h1>Más ofertas</h1>
              <p>Tenemos más para ti</p>
              <div class="row">
                  <div class="col-md-9 col-sm-9 col-xs-12">

<?php
if ( is_single()) {
$categories = get_the_category();
if ($categories) {
foreach ($categories as $category) {
$cat = $category->cat_ID;
$args=array(
'cat' => $cat,
'order' =>DESC,
'orderby' => rand,
'post__not_in' => array($post->ID),
'posts_per_page'=>3,
'caller_get_posts'=>1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <!--oferta frente -->
                      <div class="ofertaFrente_author col-md-3 col-sm-6 col-xs-12">
                          <div class="imaFrente">
       <?php if (has_post_thumbnail()) : ?>
  <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
  <?php else : ?>
  <img src="<?php bloginfo('template_url'); ?>/i/noimage.jpg" width="150" height="150" alt=""/>
  <?php endif; ?>
                          </div>
                          <h3><p><?php the_title() ?></p></h3>
                          <p class="nombre_neg"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php
the_author_meta( 'user_nicename', $author_id );
?></a> </p>
                          <div class="contengo">
                          <a href="<?php the_permalink() ?>" class="vermasB">Ver más</a>
                          </div>
                      </div>
 <?php
endwhile;
}}} wp_reset_query(); }
?>


                  </div><!-- fin col 9 ofertas fernte e inicio con banner-->


                  <div class="col-md-3 col-sm-3 col-xs-12"><!--banner aqui --></div>

              </div><!--fin row-->

           </div>

<?php get_footer(); ?>
