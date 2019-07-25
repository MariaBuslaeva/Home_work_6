<?php

	class User {
		protected $name;
		protected $surname;
		protected $birthday;
		private $age;

		public function __construct(string $name, string $surname, string $birthday) {
			$this->name = $name;
			$this->surname = $surname;
			$this->birthday = $birthday;
			$this->age = $this->calculateAge($birthday);
		}
		public function getName() : string {
			return $this->name;
		}
		public function getSurname() : string {
			return $this->surname;
		}
		public function getBirthday() : string {
			return $this->birthday;
		}
		public function calculateAge(string $birthday) {
			$now = new DateTime();
			$birthday = new DateTime($birthday);
			$diff = $now->diff($birthday);
			return $diff->y;
		}
		public function getAge() : int {
			return $this->age;
		}              
	}
	
	$user1 = new User('Иван', 'Петров', '1995-09-21');
	echo $user1->getAge() . "\n";

	class Employee extends User {
		private $salary;

		public function __construct(string $name, string $surname, string $birthday, int $salary) {
			$this->name = $name;
			$this->surname = $surname;
			$this->birthday = $birthday;
			$this->salary = $salary;
		}
		public function getSalary() : int {
			return $this->salary;
		}
	}

	$employee1 = new Employee('Иван', 'Петров', '1995-05-24', 40000);
	echo $employee1->getSalary();
