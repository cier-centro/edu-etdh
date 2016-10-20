<!--Exceptuar para FAQ EDTH-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
	jQuery(function () {
	    if (isUrlEndsWithETDH("/etdh")) {
					$( ".etdh-panel .main-menu .menu li a" ).first().addClass("active");
			}
			else {
					$( ".etdh-panel .main-menu .menu li a" ).first().removeClass("active");
			}
	});
	function isUrlEndsWithETDH(finalWord) {
			return window.location.href.endsWith(finalWord);
	}
</script>

<!--Enlaces de todas las páginas-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://dl.dropboxusercontent.com/u/575652037/edu-etdh/css/condensed-fix.css">
<link rel="stylesheet" href="https://dl.dropboxusercontent.com/u/575652037/edu-etdh/css/ETDHBaseStyle.css">

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!--Enlaces de acceso rápido-->
<a href="/etdh/92424">
	Consulta Nuestro FAQ
</a>
<a href="http://siacet.mineducacion.gov.co/siacet/">
	SIACET
</a>
<div>
	SIET
</div>
<a href="http://siet.mineducacion.gov.co/consultasiet/institucion/index.jsp">
	Consulta Instituciones
</a>
<a href="http://siet.mineducacion.gov.co/consultasiet/programa/index.jsp">
	Consulta Programas
</a>

<!--Scripts y estilos de la página principal-->
<style>
   .etdh-panel .carousel-links {
      display: none!important;
    }

    @media (max-width: 767px) {
       .etdh-panel .carousel-links {
          display: block!important;
      }
    }
</style>

<!--Scripts de todas las páginas-->
<script>
jQuery(function () {
    plusIcon = "plus_accordion_icon";
    $('.accordion-content').css('display','none');
    $(".accordion-title").first().addClass( "active" );
    $('.accordion-content').first().css('display','block');
    jQuery(".accordion-title").on("click",function(){
        jQuery(this).next('.accordion-content').slideToggle("slow");
         if (jQuery(this).children().css('background-image').includes(plusIcon) ) {
                  jQuery(this).addClass( "active" );
         }
         else {
                 jQuery(this).removeClass( "active" );
         }
    });
		if ($(".etdh-panel .etdh-container .views-field-field-imagen-del-articulo img").length) {
				var imageNews = '<div class="inner-image news-image"></div>';
				var imageNewsUrl = $(".etdh-panel .etdh-container .views-field-field-imagen-del-articulo img").attr("src");
				$(imageNews).insertBefore( $( ".etdh-panel .etdh-container .news-content" ) );
				$('.news-image').css('background-image', "url(" + imageNewsUrl +")");
				if ($( ".etdh-panel .etdh-container .news-content" ).length) {
						$( ".etdh-container .views-field-body .field-content" ).addClass("news-container");
				}
		}
});
</script>

<!--Script para asignar links a las imágenes en vista de boletín ETDH-->
<script>
jQuery(function () {
    setUrl($('.bulletin-etdh .enrollment-image') , $('.bulletin-etdh .enrollment-image a'));
    setUrl($('.bulletin-etdh .certificate-image') , $('.bulletin-etdh .certificate-image a'));
});

function setUrl(image, anchor) {
    var backgroundUrl = /^url\((['"]?)(.*)\1\)$/.exec( image.css('background-image') );
    backgroundUrl = backgroundUrl ? backgroundUrl[2] : "";
    anchor.attr( "href", backgroundUrl );
}
</script>
<!--Estilo de links de acceso rápido y carrusel en FAQ ETDH-->
<style>
@media (min-width: 992px) {
	.etdh-panel .quick-access-links, .etdh-panel .carousel-links {
		position: absolute;
		right: 0;
	}

	.etdh-panel .carousel-links {
		margin-top: 310px;
	}
}
</style>
