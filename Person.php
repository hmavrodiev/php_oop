<?php
	class Person
	{
		private $name;
		private $age;
	
		public function __construct (string $name, int $age) 
		{
			$this->name = $name;
			$this->age = $age;
		}
		
		//getters
		public function getName()
		{
			return $this->name;
		}
		
		//getters
		public function getAge()
		{
			return $this->age;
		}
	}
?>
