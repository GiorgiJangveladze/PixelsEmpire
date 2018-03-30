<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Start-Smooth-Scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},2000);
            });
        });
    </script>
<!-- //End-Smooth-Scrolling -->
<script src="js/easyResponsiveTabs.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
