<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Tasks for Javascript +";
$data['meta_description'] = "A page with all the tasks from the course.";
$data['main'] = <<<EOD
<h1>Kmom01</h1>
<ul>
	<li><a href="testingground/template/index.php">Template</a></li>
	<li><a href="testingground/css3-transitions/index.php">CSS3 Transitions</a></li>
	<li><a href="testingground/css3-2d-transforms-with-transitions/index.php">CSS3 2D Transforms with Transitions</a></li>	
	<li><a href="testingground/resize-element/index.php">Resize Element</a></li>
</ul>
		
<h1>Kmom01</h1>
<ul>
	<li><a href="testingground/literals-and-types/index.php">Literals and Types</a></li>	
	<li><a href="testingground/datatypes-and-values-using-strings/index.php">Datatypes and Values Using Strings</a></li>	
	<li><a href="testingground/datatypes-and-values-using-numbers/index.php">Datatypes and Values Using Numbers</a></li>		
	<li><a href="testingground/throwing-dice-using-functions/index.php">Thowing Dice Using Functions</a></li>	
	<li><a href="testingground/pushing-the-ball/index.php">Pushing the Ball</a></li>	
	<li><a href="testingground/boulderdash/index.php">Boulderdash</a></li>
	<li><a href="testingground/regular-expressions/index.php">Regular Expressions</a></li>
	<li><a href="testingground/error-handling/index.php">Error Handling</a></li>		
	<li><a href="testingground/roulette/index.php">Roulette (extra)</a></li>
</ul>	

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 