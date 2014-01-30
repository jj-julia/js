<?php $title='Template for testprogram'; include(__DIR__ . '/../src/header.php'); ?>

<div id='box1' class='box'>
        <img src='img/goa-monsoon.jpg' alt='Green ricefields in Goa' />
        <h1>Goa</h1>
        <p id="leadP">This is Goa, only a week or two after the monsoon has begun.</p>
        
        <p> Make the image small or big with the buttons below!</p>  
        
        <form>
		 <label>Height:</label>
		    <input id="taller" type="button" value="+">          
		    <input id="shorter" type="button" value="-">
		 </form>
		 
		 <form>
		    <label>Width:</label> 
		    <input id="wider" type="button" value="+">
		    <input id="lessWide" type="button" value="-">
		  </form>
</div>	        

<?php $path=__DIR__; include(__DIR__ . '/../src/footer.php'); ?>
