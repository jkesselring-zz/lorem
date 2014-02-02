<?php

	require 'jkesselring/lorem/generate/generator.php';

	$lorem = new JKesselring\Lorem\Generator('html', 10);
	$text = $lorem->generate();
	echo $text;