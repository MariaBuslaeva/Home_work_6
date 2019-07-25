<?php
	class Employee {
		public $name;
		public $age;
		public $salary;
		public function __construct(string $name, int $age, int $salary) {
			$this->name = $name;
			$this->age = $age;
			$this->salary = $salary;
		}
	}
	$employee1 = new Employee('Иван', 25, 1000);
	$employee2 = new Employee('Вася', 26, 2000);
	echo $employee1->salary + $employee2->salary ."\n";
	echo $employee1->age + $employee2->age;