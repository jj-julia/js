/** 
 * Place your JS-code here. 
 */ 
$(document).ready(function(){
	  $('.lightbox').click(function(){
          // Compatability for iPad & Android 
          var windowHeigth = window.innerHeight || $(window).height(), 
              windowWidth  = window.innerWidth  || $(window).width();
          
      // Display  overlay
      $('<div id="overlay"></div>')
        .css('opacity', '0')
        .animate({'opacity' : '0.8'}, 'slow')
        .appendTo('body');
      
      // Create a container for the lightbox
      $('<div id="lightboxContainer"></div>')
        .hide() 
        .appendTo('body');
      
      // Display image onload
      $('<img>')
        .attr('src', $(this).attr('src'))
        .css({
              'height':'700',
              'width':'490',
          'max-height': windowHeigth, 
          'max-width': windowWidth
        })
        .load(function() {
          $('#lightboxContainer')
            .css({
              'top':  (windowHeigth - $('#lightboxContainer').height()) / 2,
              'left': (windowWidth  - $('#lightboxContainer').width())  / 2
            })
            .fadeIn();
        })
        .appendTo('#lightboxContainer');
        
        // Remove it all on click
        $('#overlay, #lightboxContainer').click(function() {
          $('#overlay, #lightboxContainer').remove();
        });
        
        // Close on escape
        $(document).keyup(function(e) {

                if (e.keyCode == 27) { 
                        $('#overlay, #lightboxContainer').remove(); 
                }
              });
      
      console.log("Display image in colorbox.");
  });
  
});