<?php $title='Template for testprogram'; include(__DIR__ . '/../src/header.php'); ?>

<div id='flash'>
<form id='size'>
<p>
  <label>Width: <input id='width' type='number' /></label> 
  <label>Height: <input id='height' type='number' /></label> 
  <input id='resize' type='button' value='Resize' />
</p>
</div>


<?php $path=__DIR__; include(__DIR__ . '/../src/footer.php'); ?>
