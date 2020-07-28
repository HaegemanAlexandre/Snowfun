var app = {
    init: function () {
        console.log('init');
        if ($(window).width() > 600) {

        $('.wrapper-home > section').each(function () {

            var id = $(this).attr('id');

            $(this).scrollex({

                mode: 'middle',
                enter: function () {
                    $('nav a[href="#' + id + '"]').addClass('active');
                },

                leave: function () {
                    $('nav a[href="#' + id + '"]').removeClass('active');
                }
            });

        });

        $('[href*="#"]:not([href="#carouselExampleIndicators"])').on('click', app.smoothScroll);
    }
    },
    smoothScroll: function (evt) {
        evt.preventDefault();
        var target = $(this.hash);

        if (target.length) {
            var targetPosition = target.offset().top;
            $('html, body').animate({
                scrollTop: targetPosition
            }, 2000);
        }
    

    }
};
$(app.init);