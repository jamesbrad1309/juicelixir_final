function addMarker( $marker, map ) {
    // var
    var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

    // create marker
    var marker = new google.maps.Marker({
        position    : latlng,
        map         : map
    });

    // add to array
    map.markers.push( marker );

    // if marker contains HTML, add it to an infoWindow
    if( $marker.html() ) {
        // create info window
        var infowindow = new google.maps.InfoWindow({
            content     : $marker.html()
        });

        // show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {

            infowindow.open( map, marker );

        });
    }
}

function centerMap( map ) {
    // vars
    var bounds = new google.maps.LatLngBounds();

    // loop through all markers and create bounds
    $.each( map.markers, function( i, marker ){
        var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
        bounds.extend( latlng );
    });

    // only 1 marker?
    if( map.markers.length == 1 ) {
        // set center of map
        map.setCenter( bounds.getCenter() );
        map.setZoom( 16 );
    }
    else {
        // fit to bounds
        map.fitBounds( bounds );
    }
}

function newMap( $el ) {
    // var
    var $markers = $el.find('.marker');

    // vars
    var args = {
        zoom        : 16,
        center      : new google.maps.LatLng(0, 0),
        mapTypeId   : google.maps.MapTypeId.ROADMAP,
        scrollwheel : false
    };

    // create map
    var map = new google.maps.Map( $el[0], args);

    // add a markers reference
    map.markers = [];
        
    // add markers
    $markers.each(function(){
        addMarker( $(this), map );
    });
    
    // center map
    centerMap( map );
    
    // return
    return map;
}

var map = null;

var site = {
    init: function() {
    	// initalize map
        $('.acf-map').each(function(){
            map = newMap($(this));
        });
                
    	// Parallax
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        });


        // Owl Carousel
        $("#owl-demo").owlCarousel({
         
        autoPlay: 3000,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]
        });

        $("#owl-demo-1").owlCarousel({
         
            navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true

            // "singleItem:true" is a shortcut for:
            // items : 1, 
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
         
        });

        $('.slick-slider').slick({});
    }
};

(function ($) {
    site.init();
})(jQuery);