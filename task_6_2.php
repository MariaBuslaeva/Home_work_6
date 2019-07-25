<?php
	class Employee {
		private $name;
		private $age;
		private $salary;

		public function __construct(string $name, int $age, int $salary) {
			$this->name = $name;
			$this->age = $age;
			$this->salary = $salary;
		}
		public function getName() : string {
			return $this->name;
		}
		public function getAge() {
			return $this->age;
		}
		public function getSalary() {
			return $this->salary ."$";
		}
		public function setName(string $name) {
			$this->name = $name;
		}
		public function setAge(int $age) {
			if ($this->isAgeCorrect($age))
				$this->age = $age;
			else echo 'Неверный возраст' ."\n";
			$this->age = $age;
		}
		public function setSalary(int $salary) {
			$this->salary = $salary;
		}
		private function isAgeCorrect(int $age) {
			if ($age<1 || $age>100) 
				return false;
			else return true;
		}
	}

	$a = new Employee('Иван', 100, 2000);
	echo $a->getAge() ."\n";
	$a->setAge(101);
	echo $a->getSalary();
