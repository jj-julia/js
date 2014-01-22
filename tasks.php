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

<p>What do you get when you cross a cat and a mouse?
<a href="viewsource.php?dir=&file=empty.php#file">View Source Code for details</a>.</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 