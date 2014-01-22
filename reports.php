<?php
/**
 * Reports for the course elements
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Reports";
$data['meta_description'] = "All the reports on the course on one page.";
$data['main'] = <<<EOD
<h1>Reports</h1>

<p>What follows will be all my reports on the course elements for each lesson and the final project.</p>

<h2>Kmom01: Kom igång med JavaScript</h2>

<p>For my development environment I am using Sublime Text Editor (most of the time), 
Filezilla as my sftp client, and I use both Chrome and Firefox, depending on what 
exactly I am doing. I have also have WAMP server installed. I find sublime editor 
far better than Jedit or Notepad++. It is easier to read the text, easier to spot 
mistakes and there are lots of little shortcuts like autofill.I have now increased
my skillset by implementing many of the tips in the video 
<a href="http://net.tutsplus.com/articles/news/perfect-workflow-in-sublime-text-free-course/"/>
A Perfect Workflow in JavaScript</a>I have only watched the first 10 so far, but the I 
am falling in love with Sublime all over again</p>

<p><a href="http://jsfiddle.net/juliajj/CtTtc/">jsfiddle</a></p>

<p></p>

<p></p>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 