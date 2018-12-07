(function($) {
    /**
     *
     * @param config = {
     *          links: 'a.prj-view-link',
     *          close: 'a.prj-view-close',
     *          box: '.projects__big',
     *      };
     * @constructor
     */
    $.fn.ProjectView = function(config) {


        var links = $(this).find(config.links);
        var $_box = $(config.box);
        var close = $(config.close);//$_box.find(config.close);


        close.click(function (e) {
            $_box.slideUp(500);
            return false
        });

        links.click(function (e) {
            var $_this = $(this);

            $('html,body').animate({
                scrollTop: $_box.prev().offset().top
            }, 1000);

            if ($_box.is(":visible") ) {
                $_box.slideUp(500);
            }

            var address = $_this.attr('href');

            $_this.append('<span class="prj-loading">loading...</span>');
            $.get( address, function( data ) {
                $('.prj-loading').remove();
                $_box.find('.row').html( data );

                $_box.slideDown(500);
            });

            return false;
        });
    };
})(jQuery);