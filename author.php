<?php get_header();


$categoria=get_the_category();
$mi_cat=$categoria[0]-> term_id;
$nombre_cat = $categoria[0]->cat_name;
$nombre = $nombre_cat;
$slug = $categoria[0]->slug;

$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>

<div class="contenedor" >

<div id="labarra2" class="col-lg-3 col-md-3 col-sm-4 col-sm-12 col-xs-12  sinMargen">
<div class="row">
<div class=" col-md-12">

<?php
               //obtengo el meta del "usuario" la id de la imagen
$images = get_usermeta($post->post_author,'logotipo');
?>

<?php if($images){?>

<img src="<?php
          //muestro la url de la imagen con su id
          echo wp_get_attachment_url( $images ); ?>"  class="img-responsive pad_catalogo" />


               <?php }else{ ?>
               <h1 class="h1sinlogo"><?php echo get_the_author_meta('first_name', $user_ID ); ?> </h1>

               <?php if(is_user_logged_in()){echo "Agrega el logotipo de tu negocio en Edita los datos de tu negocio en tu Panel de control";} ?>
               <?php } ?>

<!-- giro del negocio-->
<h3><?php echo get_usermeta($post->post_author,'giro'); ?></h3>


</div>

<?php
    $face=get_the_author_meta('facebook', $user_ID );
    $twitter=get_the_author_meta('twitter', $user_ID );
    ?>


<div id="socialPortada" class=" col-md-12 col-sm-6">
<p class="bold" style="text-transform:uppercase;">SIGUE A <?php echo get_the_author_meta('first_name', $user_ID ); ?> <span class="light">TAMBIEN EN</span></p>

<?php if(!$face && !$twitter){echo "Sin redes sociales";} ?>

<?php if ($face){?>
<a href="http://<?php echo $face; ?>" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/img/facebook.svg" /></a>

<?php }?>
<?php if ($twitter){?>
<a href="http://<?php echo $twitter; ?>" target="_blank">
<img src="<?php bloginfo("template_directory"); ?>/img/twitter.svg" />
</a>
<?php }?>
</div>


</div>

<p>Se el primero en recibir las ofertas de este negocio, siguelo ingresando tu email:</p>
<?php echo do_shortcode('[subscribe-author-button]') ?>
<?php echo do_shortcode('[favourite-author-posts]') ?>
</div>
<!--barra------------------------------------->


<div id="principales_contenedor" class="col-md-9 col-sm-8 col-xs-12 sinMargen cruz">

<!-- slider-->
<div id="portada" class=" col-md-12 sinMargen  ">

      <?php
//obtengo el meta del "usuario" la id de la imagen
$portada = get_usermeta($post->post_author,'portada');

if($portada){
?>
<!-- descripcion del negocio-->

<img src="<?php
//muestro la url de la imagen con su id
echo wp_get_attachment_url( $portada ); ?>"  class="responsive cien" />

<?php }else{?>
<div class="sinportada">

<h1><?php echo get_the_author_meta('first_name', $user_ID ); ?></h1>
<p>PORTADA</p>
<?php
if(is_user_logged_in()){ ?>
<a href="http://zihuaofertas.com/zihuaofertas/edita-los-datos-de-tu-negocio">Cambia la imagen de portada</a>
  <?php }; ?>



</div>
<?php } ?>
</div>
<!-- fin slider-->

<!--CONTENIDO DE LA OFERTA------------>


<div class="contenido_single col-md-12 col-sm-12 col-xs-12 sinMargen">

<div class="contenedor int_clear">
<h1>Todas las ofertas de <?php echo get_the_author_meta('first_name', $user_ID ); ?></h1>
<p><?php echo get_usermeta($post->post_author,'description'); ?></p>
<div class="row">
<div class=" col-md-12">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
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
<!--------------------------------->

     <!--------------------------------->
      <p><i class="fa fa-tags" aria-hidden="true"></i> | <?php echo $cat_name ?></p>

      </div>


    <?php endwhile; else: ?>
<p><?php _e('No posts by this author.'); ?></p>

<?php endif; ?>
      <!--oferta frente -->



</div><!-- fin col 9 ofertas fernte e inicio con banner-->


</div><!--fin row-->

 <?php previous_posts_link( '« Ofertas anteriores' ); ?>
 <?php next_posts_link('Siguiente') ?>


</div>
</div>
<div class="clearfix"></div>
                          <div id="datos_single">

    <div class="col-md-4 col-sm-6"><img class="centrarIcono" src="<?php bloginfo("template_directory"); ?>/img/cel.svg" />
    <p> <?php echo get_the_author_meta('telef_no', $user_ID ); ?> </p>
    </div>

      <div class="col-md-4 col-sm-6 "><img class="centrarIcono" src="<?php bloginfo("template_directory"); ?>/img/pin.svg" />
    <p> <?php echo get_usermeta($post->post_author,'direcci_n_'); ?></p>
    </div>

      <div class="col-md-4 col-sm-6"><img class="centrarIcono" src="<?php bloginfo("template_directory"); ?>/img/web.svg" />
    <p> <?php echo get_usermeta($post->post_author,'user_url'); ?></p>
    </div>
<div class="clearfix"></div>

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

    <!--CONTENIDO DE LA OFERTA------------>


</div>

</div>



<div class="clearfix"></div>
<?php get_footer() ?>
