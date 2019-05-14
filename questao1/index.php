<?php

class Multiplos
{
	public function show(){
		for ($i = 1; $i <= 100; $i++) { 
			
			switch ($i) {
				case (fmod($i, 3) == 0 && fmod($i, 5) == 0):
					echo 'FizzBuzz';
					break;
				case (fmod($i, 3) == 0):
			    	echo 'Fizz';
			    	break;
				case (fmod($i, 5) == 0):
					echo 'Buzz';
					break;
				default:
					echo $i;
					break;
			}
			echo "<br>";	
		}
	}
}


//chamada
echo Multiplos::show();



