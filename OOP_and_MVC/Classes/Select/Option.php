<?php
require_once '../Tag/Tag.php';

	class Option extends Tag
	{
		public function __construct()
		{
			parent::__construct('option');
		}
	}