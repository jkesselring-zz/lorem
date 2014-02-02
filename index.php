<?php

	require 'jkesselring/lorem/generate/generator.php';

	$lorem = new JKesselring\Lorem\Generator('html', 3);
	$text = $lorem->generate();
	
	echo $text . "<br><hr><br>";
	echo "<pre> $text </pre>";