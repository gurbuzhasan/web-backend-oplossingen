<?php
	class HTMLBuilder{
		private $headerName, $footerName, $bodyName;
		
		public function __construct($header, $footer, $body){
			
			$this->headerName = $header;
			$this->footerName = $footer;
			$this->bodyName = $body;
			
			self::buildHeader();
			self::buildJsLinks();
			self::buildCssLinks();
			self::buildBody();
			self::buildFooter();
			
			
		}
		
		public function buildHeader(){
		
			include_once "html/" . $this->headerName . ".php";

			foreach (glob("css/*.css") as $filename)
			{
			    echo '<link href="' .$filename . '" rel="stylesheet">';
			}


		}
		
		public function buildBody(){
		
			include_once "html/" . $this->bodyName . ".php";

		}
		
		public function buildFooter(){
		
			foreach (glob("js/*.js") as $filename)
			{
			    echo '<script src="' .$filename . '"></script>';
			}
			
			include_once "html/" . $this->footerName . ".php";
		}
		
		public function findFiles($dir, $file){
		
		
			foreach (glob( $dir . "/*" . "." . $file) as $filename)
				{
				    $filesArray[] = $filename;
					
				}
				
			
			return $filesArray;
		}
		
		
		private function buildJsLinks(){

			foreach( self::findFiles("js","js") as $key ){
				echo '<script src="' . $key . '"></script>';
			}
			
		}
		
		private function buildCssLinks(){

			foreach( self::findFiles("css","css") as $key ){
				echo '<link href="' . $key . '" rel="stylesheet">';
			}
			
		}
		
	}
?>
