
<script type="text/javascript"> 
// joomlagethumbs animations
jQuery(function () {
	
	jQuery(".joomlagethumbs i").animate({
			 opacity: 0
	
		  }, {
			 duration: 300,
			 queue: false
		  });      

   jQuery(".joomlagethumbs").parent().hover(
	   function () {},
	   function () {
		  jQuery(".joomlagethumbs i").animate({
			 opacity: 0
		  }, {
			 duration: 300,
			 queue: false
		  });
   });
 
   jQuery(".joomlagethumbs i").hover(
      function () {
		  jQuery(this).animate({
			 opacity: 0
	
		  }, {
			 duration: 300,
			 queue: false
		  });      

		  jQuery(".joomlagethumbs i").not( jQuery(this) ).animate({
			 opacity: <?php echo $fade_opacity ?>
		  }, {
			 duration: 300,
			 queue: false
		  });
      }, function () {
      }
   );

});
</script> 