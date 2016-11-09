<?php
	class Person {
		
		public $name;
		private $age;
		
		private function __construct(){
		}
		
		private function get_age(){
			return $this->age;
		}
		
		public function print_age(){
			return $this->age_get();
		}
		
		public static function generatePersonByName($name){
			$persona = new static();
			$persona->name = $name;
			
			return $persona;
		}
		
		public static function generatePersonByAge($age){
			$persona = new static();
			$persona->age = $age;
			
			return $persona;
		}
		
		public static function generateNameAndAge($name,$age){
			$persona = new static();
			$persona->name = $name;
			$persona->age = $age;
			
			return $persona;
		}
		
		public function toString(){
			echo "nome: $this->name <br> età: $this->age";
		} 
        }
	$nico = Person::generatePersonByName("Nico");
	$medda = Person::generatePersonByAge(22);
	$nico->toString();
	echo "<br><br>";
	$medda->toString();
	echo "<br><br>";
	$medda2 = Person::generateNameAndAge("Nico",22);
	$medda2->toString();
	/*$customer1 = new Person("Giuseppe Rossi","34");
	echo "Nome: ".$customer1->name."<br>";
	echo "Anni: ".$customer1->print_age()."<br>";
	echo "Anni: ".$customer1->age;*/
 ?>