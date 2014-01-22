<?php $title='Moving around CSS sprite using keyboard and mouse with CSS3 transitions'; include(__DIR__ . '/../src/header.php'); ?>


<div id='flash'>
<p>Click on the Squaty to begin the action using CSS3 2D transforms (change form) and CSS3 transitions (animate change).</p>

<table>
<tr>
  <td>Rotate x 0.5:</td>
  <td>Rotate x 1.5:</td>
  <td>Half size:</td>
  <td>Double size:</td>
  <td>Skew horisontal:</td>
  <td>Skew vertical:</td>
  <td>Move:</td>
  <td>Move & Rotate:</td>
</tr>
<tr>
  <td><div id='b1' class='baddie'></div></td>
  <td><div id='b2' class='baddie'></div></td>
  <td><div id='b3' class='baddie'></div></td>
  <td><div id='b4' class='baddie'></div></td>
  <td><div id='b5' class='baddie'></div></td>
  <td><div id='b6' class='baddie'></div></td>
  <td><div id='b7' class='baddie'></div></td>
  <td><div id='b8' class='baddie'></div></td>
</tr>
</table>
</div>


<?php $path=__DIR__; include(__DIR__ . '/../src/footer.php'); ?>