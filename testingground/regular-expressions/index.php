<?php $title='Template for testprogram'; include(__DIR__ . '/../src/header.php'); ?>

<div id='flash'>
<form name="myForm"  method="post">
	<label for="email">email:</label>
	<input type="text" name="email">
	<input type="button" onclick="validateEmail();" value= "Submit">
</form>
</div>

<?php $path=__DIR__; include(__DIR__ . '/../src/footer.php'); ?>


