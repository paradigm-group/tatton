/**
 * @fileoverview Script module for The Pride theme
 * @author Jonny Frodsham
 */

(function($) {

    var tatton = {

            /**
             * Initialise module
             */
            init: function() {
                // bind events to ui elements
                this.bindEvents();

                //
                this.setServiceIconHeight();
            },


            /**
             * Bind events to ui elements
             */
            bindEvents: function() {

            },

            /**
             * set the icon heights to squares
             */
            setServiceIconHeight: function() {
                if ($('.services').length) {
                    var iconWidth = $('.services__icon').width();

                    $('.services__icon').height(iconWidth);
                }
            },

            /**
             * Initialise google map
             */
            googleMaps: {

                init: function() {
                    var mapCanvas = document.getElementById('map'),
                        myLatLng = {
                            lat: 51.514695,
                            lng: -0.086219701
                        },
                            mapOptions = {
                            center: myLatLng,
                            zoom: 16,
                            disableDefaultUI: true,
                            scrollwheel: false,
                            zoomControl: false,
                            streetViewControl: false,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        },
                        map = new google.maps.Map(mapCanvas, mapOptions);

                    map.set('styles', [
                        {
                            featureType: 'all',
                            elementType: 'geometry',
                            stylers: [
                                { saturation: -100 }
                            ]
                        },
                        {
                            featureType: 'road',
                            elementType: 'labels',
                            stylers: [
                              { saturation: -100 },
                            ]
                        }
                    ]);

                    if ($(document).width() > 767) {
                        map.panBy(0,80);
                    }

                    var currentLocation = window.location.hostname,
                        marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            url : 'https://www.google.co.uk/maps/place/326+City+Rd,+London+EC1V/@51.5308505,-0.1040674,17z/data=!3m1!4b1!4m2!3m1!1s0x48761b5c7e763753:0x7827043c00dfbce7'
                        });

                    google.maps.event.addListener(marker, 'click', function() {
                        window.open(this.url, '_blank');
                    });
                }
            }

        };


    $(window).resize(function() {

    });


    $(window).load(function() {
        if ($('#map').length) {
            //
            tatton.googleMaps.init();
        }

        // move this
        if ($('.icon').length) {
            var iconWidth = $('.icon').width();
            $('.icon').height(iconWidth);
        }
    });


    $(window).scroll(function() {

    });


    // call initialise
    tatton.init();


})(jQuery);