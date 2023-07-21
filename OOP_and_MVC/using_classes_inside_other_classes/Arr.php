<?php
	require_once 'SumHelper.php';
	require_once 'AvgHelper.php';

	class Arr{
		private $nums = [];
		private $sumHelper;
		private $avgHelper;
		
		public function __construct(){
			$this->sumHelper = new SumHelper;
			$this->avgHelper = new AvgHelper;
		}
		
		public function avg(){
			$nums = $this->nums;
			return $this->avgHelper->getAvg($nums);
		}
		
		public function getSum23()
		{
			$nums = $this->nums;
			return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
		}
		
		public function add($num)
		{
			$this->nums[] = $num;
		}
	}