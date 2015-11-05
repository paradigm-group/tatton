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
            }

        };


    $(window).resize(function() {

    });


    $(window).load(function() {
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