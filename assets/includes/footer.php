<!-- Back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- Back to top -->
<script src="assets/js/backroll.js"></script> <!-- Resource JavaScript -->

<!-- lightbox script -->
<script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true,
        });
    });
    //Menu Rollback
    $(document).on('click','.navbar-collapse.in',function(e) {
            if( $(e.target).is('a') ) {
                $(this).collapse('hide');
              }
        });

    $('#carouselIndex').carousel({
      interval: 6000
    });
    var winWidth = $(window).innerWidth();
    $(window).resize(function () {

        if ($(window).innerWidth() < winWidth) {
            $('.carousel-inner>.item>img').css({
                'min-width': winWidth, 'width': winWidth
            });
        }
        else {
            winWidth = $(window).innerWidth();
            $('.carousel-inner>.item>img').css({
                'min-width': '', 'width': ''
            });
        }
    });
</script>

<!-- modifikovane javascripty -->
<script src="assets/js/naknizeci.js"></script>
