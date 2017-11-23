$( document ).ready(function() {

    var wi = $(window).width();
var al = $(window).height();



$("#nav-toggle").click(

function(e){
    e.preventDefault();

if($(this).hasClass("active")){

$("#menu").animate({
 right:"-400",
    height:"toggle"
},1000, "easeOutCubic")

}else{

    $("#menu").animate({
 right:"0px",
    height:"toggle"
},500, "easeOutCubic")

    }

    $(this).toggleClass("active")
}
)



//scroll header
var previousScroll = 350;

    $(window).scroll(function(){
       var currentScroll = $(this).scrollTop();
       if(currentScroll == "0"){
          $('header').removeClass("fixed");
           $('header').removeClass("opa0");
       }

        if (currentScroll > "50"){
           $('header').addClass("opa0");
       }

        if (currentScroll > previousScroll){
          $('header').addClass("fixed");
           $('header').removeClass("opa0");
       }

       //previousScroll = currentScroll;
    });

    $(".scroll").click(function(e){
        e.preventDefault();
        //var eldiv ="#pqt"
        var destino = $(this).attr("href");

          $("#Pqts").animate({
    height:"toggle"
},1000, "easeOutCubic")

    ira(destino)
    }
    )

    function ira(eldiv){
 $('html,body').animate({scrollTop: $( eldiv ).offset().top});
    }


$("#verPqts").click(function(e){
    e.preventDefault();
    $("#Pqts").animate({
    height:"toggle"
},1000, "easeOutCubic")
})
//buscador
$("#busca").click(function(e){
    e.preventDefault();
    $("#buscador").slideToggle();
})

// tour
 $("#tour").click(function() {

    var tour = introJs()
            tour.setOption('tooltipPosition', 'auto');
            tour.setOption('positionPrecedence', ['left', 'right', 'bottom', 'top'])
            tour.start()
  });

//elipsis

$('.ofertapagada_f h3, .ofertaFrente_author h3').succinct({
            size: 50
        });

    $('.ofertapagada_f p').succinct({
            size: 100
        });

//slide principal

    
     var gale_home= $("#slider-principal");

    gale_home.owlCarousel({
        loop:true,
        mouseDrag:true,
        touchDrag:true,
        smartSpeed:1000,
    margin:0,
    dots:true,
    items:1,
           stagePadding: 30,
         autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,

    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            dots:true,
            loop:true
        },
        600:{
            items:1,
            dots:false,
            stagePadding: 50

        },
        1000:{
            items:2

        }
    }
    })
    
    /* slid interior*/
    
         var gale_int= $("#single-gal");

    gale_int.owlCarousel({
        loop:true,
        mouseDrag:true,
        touchDrag:true,
        smartSpeed:1000,
    margin:0,
    dots:true,
    items:1,
    stagePadding: 30,
    autoplay:true,
    autoplayTimeout:7000,
    autoplayHoverPause:true,
    responsiveClass:true,
    autoHeight:true,
    responsive:{
        0:{
            items:1,
            dots:true,
            loop:true,
            stagePadding: 40,
             autoplay:false
        },
        600:{
            items:1

        }
    }

    })
    
    
    
    /*
$("#slider-principal").owlCarousel({

      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
  mouseDrag:true,
    touchDrag:true,
    pagination:true,
    stopOnHover : true,
    autoHeight : true,
    transitionStyle:"fade",
    autoPlay : 4000
  });


    $("#single-gal").owlCarousel({

      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
  mouseDrag:true,
    touchDrag:true,
    pagination:true,
    stopOnHover : true,
    autoHeight : true,
    transitionStyle:"fade",
  });
*/
    $("#irpqt").click(
    function(){
        //var eldiv ="#pqt"
    ira("#pqt")
    }
    )

    //submit paquetes home
    $("gform_submit_button_1").click(function(e){e.preventDefault()})
    function ira(eldiv){
 $('html,body').animate({scrollTop: $( eldiv ).offset().top});
    }

    // ingresa

     $('body').click(function(event){
        if ( event.target.id == 'ingresa'){
            $("#log_zihua").slideToggle();
        }
        else if (event.target.id == 'log_zihua' ||
                    $(event.target).parents('#log_zihua').length > 0)
        {
            return true;
        } else {
           $("#log_zihua").slideUp();
        }


    });
   /* 
    
    particlesJS("particles-js", {
"particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      }
    },
    "opacity": {
      "value": 1,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.5,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 2,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": true,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "repulse"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
*/

});
