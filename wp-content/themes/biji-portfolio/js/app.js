jQuery(document).ready(function(){
	
	jQuery(document).foundation();
	jQuery( ".nav-toggle" ).click(function() {
	  jQuery(this).toggleClass("open");
	  jQuery("nav").fadeToggle(100);
	
	  return false;
	});
});
