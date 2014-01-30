/** 
 * Place your JS-code here. 
 */ 
$(document).ready(function(){
        $('#box1, #box1 img, #box1 p').click(function(event){
                event.stopPropagation();
                $(this).toggleClass('burntorangeBackground');
                
        });
});