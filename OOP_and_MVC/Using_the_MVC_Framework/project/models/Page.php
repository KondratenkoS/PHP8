<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Page extends Model
	{
		public function getProductById($id)
		{
			$id = $id['id'];
			return $this->findOne("SELECT * FROM products WHERE id='$id'");
		}

		public function getAllProducts()
		{
			return $this->findMany("SELECT * FROM products");
		}

		public function getById($id)
		{
			return $this->findOne("SELECT * FROM pages WHERE id=$id");
			//return $this->findOne("SELECT * FROM page WHERE id=$id");
		}
		
		public function getAll()
		{
			return $this->findMany("SELECT * FROM pages");
		}

		public function getByRange($from, $to)
		{
			return $this->findMany("SELECT * FROM page WHERE id >= $from AND id <= $to");
		}
	}
