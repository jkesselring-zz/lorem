<?php

	namespace JKesselring\Lorem;
	/*Autoload?*/
	require "jkesselring/lorem/render/Renderer.php";
	require "jkesselring/lorem/repository/Repository.php";
	require "jkesselring/lorem/format/Formatter.php";

	class Generator
	{		
		private $renderer 	= null;
		private $loremText 	= '';

		public function __construct($format = 'TEXT', $length = 1)
		{
			$repo 				 = new Repository($length);
			$format				 = '\\JKesselring\\Lorem\\' . strtoupper($format);
			$this->loremText	 = $repo->retrieve();
			$this->renderer 	 = new Renderer(new $format($this->loremText));
			return $this;	
		}

		public function generate()
		{
			return $this->renderer->render($this->loremText);
		}
		
	}