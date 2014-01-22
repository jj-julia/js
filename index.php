<?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Get small bits and pieces from various views.
$jjImage   = file_get_contents(__DIR__."/incl/jj_image.html");
$jjByline  = file_get_contents(__DIR__."/incl/byline.html");

// Create the data array which is to be used in the template file.
$data['title'] = "Javascript- Me Page";
$data['meta_description'] = "My own me-page, create for the course Javascript, Ajax and JQuery.";
$data['main'] = <<<EOD
<h1>About Me</h1>

<a href="http://www.flickr.com/photos/97103057@N02/tags/me/">

<figure class="right top">
{$jjImage}
</figure>

</a>
<p>
<quote>
	"However you may be, be your own source of experience. Throw off your discontent about your nature. Forgive yourself, your own
	self. You have it in your power to merge everything you have lived through; false starts, errors, delusions, passions, your 
	loves and your hopes into your goal with nothing left over." <br/><em class="right">Nietzsche</em><br/><hr/>
</quote>
</p>

<p>My name is Julia (but most call me JJ). I come from Melbourne, Australia. I am a nomad, a programmer (in the making),
an avid rockclimber and most importantly (well at least to me) I am a student of the human condition. </p>

<p>I began travelling
eleven years ago when I was nineteen, met an amazing Swede when I was twenty-one. Now we travel the world together; 
exploring, studying, philosophizing and hatching grandiose business plans. Apart from programming I also study Cognitive
Science, Knowlege Management and AI (theoretical rather than 'practical').</p>

<h3> Some of the "big things" that I care about in life:</h3>  
<ul>
	<li>Improvement of the "education process",</li>
	<li>Gobal citizenship (a world free from borders)</li>
	<li>Social spaces for humans to interact with one another</li>
	<li>Argumentation - the process of effective reasoning,</li>
	<li>Information literacy</li>
	<li>The revision of copyright law</li>
</ul>

  
{$jjByline}

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 