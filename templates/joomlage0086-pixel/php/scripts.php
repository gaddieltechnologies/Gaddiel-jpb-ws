<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );?>

<!-- Animate css required script jquery.visible.js -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.visible.js"></script>

<!-- Image Hover with links -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/modernizr.js" charset="utf-8"></script>

<script>
var $imageeffects = jQuery.noConflict();

    $imageeffects(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $imageeffects(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $imageeffects(".img").click(function(e){
                if (!$imageeffects(this).hasClass("hover")) {
                    $imageeffects(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $imageeffects(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($imageeffects(this).closest(".img").hasClass("hover")) {
                    $imageeffects(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $imageeffects(".img").mouseenter(function(){
                $imageeffects(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $imageeffects(this).removeClass("hover");
            });
        }
    });
</script>

<!-- Scroll to Top -->
<script type="text/javascript">
var $k = jQuery.noConflict();

    $k(document).ready(function(){
 
        $k(window).scroll(function(){
            if ($k(this).scrollTop() > 500) {
                $k('.scrollup').fadeIn();
            } else {
                $k('.scrollup').fadeOut();
            }
        });
 
        $k('.scrollup').click(function(){
            $k("html, body").animate({ scrollTop: 0 }, 900);
            return false;
        });
 
    });
</script>

<!-- Stellar -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.stellar.js" charset="utf-8"></script>
<script type="text/javascript">
    if (Modernizr.touch) {  
    } else {  
        jQuery(window).stellar({
        horizontalScrolling: false
    });
} 
</script>


<!-- Responsive Navigation Script -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/responsive-nav.js"></script>

<script type="text/javascript">
jQuery(function(){
jQuery('#moomenu').slicknav({
    label: '',
    prependTo:'#responsive_menu'
});

});
</script>

