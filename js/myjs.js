{/*<script type="text/javascript" src="js/myjs.js"></script>*/}
<!-- scrolling script -->
{/*<script type="text/javascript">*/}
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
// </script>
// <!-- Property for sale section Script-->
// <script>
    $(document).ready(function() {
    $("#owl-demo").owlCarousel({

        autoPlay: 6000, //Set AutoPlay to 6 seconds
        autoPlay:true,
        items : 3,
        itemsDesktop : [640,5],
        itemsDesktopSmall : [414,4]
    });
});
// </script>