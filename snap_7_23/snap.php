<?php

class Coffee {
	private $coffee;
	private $tea;

	public function __construct( string $newCoffee, int $newTea){
		$this->setCoffee($newCoffee);
		$this->setTea($newTea);
		echo "NM Tea for me";
	}

	public function getCoffee() : string {
		return $this->$coffee;
	}

	public function setCoffee(?string $newCoffee) : void {
		$this->coffee = $newCoffee;
	}

	public function getTea() : int {
		return $this->tea;
	}

	public function setTea($newTea) : void {
		$this->tea = $newTea;
	}

	public function concat() : string {
		return $this->tea . (string)$this->tea;
	}
}
$coffee = new Coffee("string", 123345);
var_dump($coffee);
echo $coffee->concat();