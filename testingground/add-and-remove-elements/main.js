/** 
 * Place your JS-code here. 
 */ 
$(document).ready(function(){
        $('input').click(function(){
                $("<p class='newElement'>It is very dry and hot</p>").insertAfter('#leadP').click(function(){
                        $(this).remove();
                });
        });
});