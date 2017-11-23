<!doctype html>
<style>
    *{
        margin-top: 0px!important;
    }
</style>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<?php wp_footer(); $ruta= get_template_directory_uri(); ?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="Zihua Ofertas" content="Ofertas Ixtapa Zihuatanejo">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" href="<?php echo $ruta; ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $ruta; ?>/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo $ruta; ?>/style.css">
<link rel="stylesheet" href="<?php echo $ruta; ?>/js/vendor/owl/owl.carousel.css">
<link rel="stylesheet" href="<?php echo $ruta; ?>/js/vendor/owl/owl.theme.default.css">
<!--<link rel="stylesheet" href="<?php //echo $ruta; ?>/css/owl.transitions.css">-->
<link rel="stylesheet" href="<?php echo $ruta; ?>/css/responsive.css">
<link rel="stylesheet" href="<?php echo $ruta; ?>/js/vendor/intro.js-2.2.0/introjs.css">
<link rel=stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<script src="<?php echo $ruta; ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="<?php echo $ruta; ?>/js/vendor/less.min.js"></script>


</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=1374535182832357";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<header class="col-md-12  sinMargen" >
<!--boton hamburguesa-->
<a id="nav-toggle" href="#"><span data-step="2" data-intro="Navega por las distintas categorias de las ofertas."></span></a>

<ul id="menu_head">

<?php if(!is_home()){ ?>
<li> <a href="<?php echo esc_url( $url ); ?>/" >Inicio</a></li>

<?php } ?>

<li data-step="1" data-intro="Agrega tu negocio y publica las ofertas de tu negocio."><a href="#" id="registrate">
<?php if ( is_user_logged_in() ) { ?>
<a href="<?php echo esc_url( $url ); ?>/nueva-oferta">Crea una oferta nueva</a>
<?php }else { ?>
 <a href="<?php echo esc_url( $url ); ?>/registra-tu-negocio/">Agrega tu negocio</a>
<?php } ?>
</a></li>


<li><a href="#" id="ingresa">
<?php if ( is_user_logged_in() ) { ?>
Salir
<?php }else { ?>
Ingresa
<?php } ?>
</a></li>



<?php if(is_home()){ ?>
<!--
<li class="hidden-xs" ><a href="#Pqts" class="scroll">Paquetes</a></li>
<li class="hidden-xs"> <a id="tour" href="#" >Tour</a></li>
-->
<?php } ?>

</ul>
<!--
<div class="cuadros" style="margin-right:70px;"><a href="#" id="busca"><img src="img/lupa.svg" /></a></div>
-->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '356845018042089'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=356845018042089&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9192129591873728",
    enable_page_level_ads: true
  });
</script>
</header>
<script>
fbq('track', 'ViewContent');
</script>
<!--
<div id="buscador"> <input type="text" name="fname"  placeholder="Busca ofertas aqui"><br>
<input type="submit" value="Buscar">
</div>
-->
<nav id="menu">
<ul>
<h3>CATEGORIAS</h3>
 <?php wp_list_categories('orderby=ID&exclude=1'); ?>

</ul>

</nav>

<div id="log_zihua">
<?php if ( is_user_logged_in() ) { ?>

<a href="<?php echo wp_logout_url(); ?>">Salir de Zihua Ofertas</a>
<?php //do_action( 'wordpress_social_login' ); ?>
<?php //do_action('facebook_disconnect_button');?>

<?php }else { ?>
<!--
<h2>Ingreso para negocios ya agregados </h2>
<a href="#" class="vermasB"><strong>Agregar tu negocio</strong></a>
-->

<h3>Ingresa o registrate rapido y seguro por medio de tu cuenta de facebook </h3>
<p style="font-size:0.8em;">(lo ideal es usar la cuenta de facebook de tu negocio)</p>
<?php //do_action('facebook_login_button');?>
<?php do_action('oa_social_login'); ?>

<h3>o si ya registraste tu negocio:
</h3>
<p style="font-size:0.8em;">(Si al registrar tu negocio usaste el mismo email que tu cuenta de facebook, puedes ingresar con la opción de arriba, "mas fácil".)</p>

<?php wp_login_form( $args ); ?>

<?php } ?>
</div>

<!-------panel---------------------->
  <?php if ( is_user_logged_in() ) {?>
<div id="panel" class="contenedor">
<div class="col-md-4 ">

    </div>

<?php
if(is_user_logged_in() && current_user_can('administrator')) { ?>
<!--
<li><a href="<?php echo esc_url( $url ); ?>/zihuaofertas/wp-admin" target="_blank"> Admin</a></li>-->
<?php } ?>

<div class="col-md-4 panelC">
<div class="col-md-6">
    <img  src="<?php echo get_template_directory_uri();?>/img/panel.svg" class="cien" />
</div>
<div class="col-md-6">
    <h2 >Panel de control</h2>
Hola <?php global $current_user;
get_currentuserinfo();
echo $current_user->user_login
?>
</div>
</div>

<ul class="col-md-4 panelC">
<a href="<?php echo esc_url( $url ); ?>/nueva-oferta"><li>Agrega nueva oferta</li></a>
<a href="<?php echo esc_url( $url ); ?>/dashboard"><li>Edita o borrar ofertas</li></a>
<a href="<?php echo esc_url( $url ); ?>/edita-los-datos-de-tu-negocio"><li>Edita los datos de tu negocio</li></a>
</ul>

<div class="clearfix"></div>
</div>
<?php
} else {?>
<!--aqui algo para los no logeados-->
<?php
}
?>


<?php wp_head();
global $post;
$user_ID = $post->post_author;
?>
