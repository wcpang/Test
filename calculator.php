<?php

class calculator
{
	public function add($a, $b){
		return $a + $b;
	}	
		
	public function multiply($a, $b){
		return $a * $b;
	}
	
	public function divide($a, $b){
		if($b == null){
			throw new ErrorException("Division by zero");
		}
		return $a / $b;
	}
	
	public function subtract($a, $b){
		return $a - $b;
	}
	
}


?>