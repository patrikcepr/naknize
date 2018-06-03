<!-- lightbox script -->
<script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true,
        });
    });
    // uklizeni menu
    $(document).on('click','.navbar-collapse.in',function(e) {
            if( $(e.target).is('a') ) {
                $(this).collapse('hide');
              }
        });
    // $(document).ready(function () {
    //     $(".navbar-nav li a").click(function(event) {
    //           $(".navbar-collapse").collapse('hide');
    //           });
    //     });

    // dotdotdot
    $(document).ready(function( $ ) {

      var $ttl = $('#historie');
       $ttl.dotdotdot({
            // Options go here
            // Prevents the <a class="toggle" /> from being removed
            keep: '.toggle'
         });
         // Get the dotdotdot API
      var api = $ttl.data( 'dotdotdot' );
        $ttl.on(
          'click',
          '.toggle',
          function( e )
          {
            e.preventDefault();
            //	When truncated, restore
            if ( $ttl.hasClass( 'ddd-truncated' ) )
            {
              api.restore();
              $ttl.addClass( 'full-story' );
            }
            //	Not truncated, truncate
            else
            {
              $ttl.removeClass( 'full-story' );
              api.truncate();
              api.watch();
            }
          }
        );

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
