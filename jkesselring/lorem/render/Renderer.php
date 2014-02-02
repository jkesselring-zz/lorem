<?php

	namespace JKesselring\Lorem;
	require 'Render.php';

	class Renderer implements IRender{
		private $format = "";
		
		function __construct(IFormat $format) {
			$this->format 	= $format;	
		}//end ctor
		
		public function render($text){
			return $this->format->format($text);
		}//end render
	
	}//End Renderer