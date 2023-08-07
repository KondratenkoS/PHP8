<?php
require_once 'iFile.php';
	class Files implements iFile{
		private $filePath;
		
		public function __construct($filePath){
			$this->filePath = $filePath;
		}
		
		public function getPath(){
			return $this->filePath;
		}
		
		public function getDir(){
			return dirname($this->filePath);
		}
		
		public function getName(){
			$array = pathinfo($this->filePath);
			return $array['filename'];
		}
		
		public function getExt(){
			return pathinfo($this->filePath, PATHINFO_EXTENSION);
		}
		
		public function getSize(){
			return filesize($this->filePath);
		}
		
		public function getText(){
			return file_get_contents($this->filePath);
		}
		
		public function setText($text){
			file_put_contents($this->filePath, $text);
		}
		
		public function appendText($appendText){
			$text = file_get_contents($this->filePath);
			file_put_contents($this->filePath, $text . $appendText);
		}
		
		public function copy($copyPath){
			copy($this->filePath, $copyPath);
		}
		
		public function delete(){
			unlink($this->filePath);
		}
		
		public function rename($newName){
			rename($this->filePath, $newName);
		}
		
		public function replace($newPath){
			rename($this->filePath, $newPath);
		}
	}