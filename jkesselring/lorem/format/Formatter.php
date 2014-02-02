<?php 
	namespace JKesselring\Lorem;

	Interface IFormat
	{
		public function format($text);
	}

	class HTML implements IFormat
	{
		public function format($text)
		{
			return $this->formatText($text);
		}

		private function formatText($text)
		{
			if(is_array($text))
			{
				foreach ($text as $key => $value)
				{
					$text[$key] = $this->formatText($value);	
				}
				return implode("\n\n", $text);
			}
			return "<p>{$text}</p>";
		}
	}

	class TEXT implements IFormat
	{
		public function format($text)
		{
			return $this->formatText($text);
		}

		private function formatText($text)
		{
			if(is_array($text))
			{
				return implode("\n\n", $text);
			}
			return $text;
		}
	}