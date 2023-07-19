<?php	
	require_once 'Employe.php';
	
	class Programmer extends Employe{
		private $langs = ['PHP', 'C++', 'JavaScript'];
		
		public function setLang($lang){
			$this->langs[] = $lang;
		}
		
		public function getLang(){
			return $this->langs;
		}
	}