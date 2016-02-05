<?php

/*

 Template Name: Template Contacto

*/
 ?>
<?php global $asteria;?>
<?php get_header(); ?>

<div class="fixed_site">
<!--BIG PAGE HEADER START-->
	<div class="fixed_wrap singlefx">
		<?php if(($asteria['page_type_id']) == '1'){ ?>
            <div class="page_tt">
                <div class="center"><h1 class="postitle"><?php the_title(); ?></h1></div>
            </div> 
        <?php } ?>
	<!--BIG PAGE HEADER END-->
	<div class="center">
		
 <script type="text/javascript">

    var map;

    jQuery(document).ready(function(){

      prettyPrint();

      map = new GMaps({

        div: '#mapz',

        lat: 19.6999425,

        lng: -101.1929714

      });



      GMaps.geolocate({

        success: function(position){

        	//establecer posicion

          map.setCenter(position.coords.latitude, position.coords.longitude);

          //añadir marcador de donde estas

          map.addMarker({

  				lat: position.coords.latitude,

  				lng: position.coords.longitude,

  				title: 'Mi ubicación'

  			});

		map.drawRoute({

			origin: [position.coords.latitude, position.coords.longitude],

			destination: [19.6962161,-101.2586237],

			travelMode: 'driving',

			strokeColor: '#131540',

			strokeOpacity: 0.6,

			strokeWeight: 6

		});

        },

        error: function(error){

          alert('Geolocation failed: '+error.message);

        },

        not_supported: function(){

          alert("Your browser does not support geolocation");

        }

      });

    });

  </script>
		

		</div>
	</div>
</div>
<?php

get_footer();

?>


			