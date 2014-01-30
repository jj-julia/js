/** 
 * Place your JS-code here. 
 */ 
$(document).ready(function(){
        $('#taller').click(function(){
                $('img').height('+=30');
        });

        $('#shorter').click(function(){
                $('img').height('-=30');
        });
        
        $('#wider').click(function(){
                $('img').width('+=30');
        });
        
        $('#lessWide').click(function(){
                $('img').width('-=30');
        });
});

