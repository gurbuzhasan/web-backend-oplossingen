<?php
	class Percent{
		public $absolute;
		public $relative;
		public $hundred;
		public $nominal;
		
		public function __construct($new, $unit){ 
			$this->absolute = $this->formatNumber($new/$unit); 
			$this->relative = $this->formatNumber(($this->absolute-1));
			$this->hundred = $this->formatNumber(($this->absolute*100));
			
			if($this->absolute > 1){
				$this->nominal = "positive";
			}elseif($this->absolute < 1){
				$this->nominal = "negative";
			}else{
				$this->nominal = "status-quo";
			}
		}
		
		public function formatNumber($number) 
		{
			$format = number_format($number, 2, '.', '');
			return $format;
		}
		
		
	}
?>