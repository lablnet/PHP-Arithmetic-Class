<?php
	/**
	 * PHP Arithmetic class
	 *
	 * @author   Malik Umer Farooq <lablnet01@gmail.com>
	 * @author-profile https://www.facebook.com/malikumerfarooq01/
	 * @license MIT 
	 * @link    https://github.com/Lablnet/PHP-Arithmetic-Class
	 *
	 */
class Arithmetic{
	 /**
	 * For storing number in array
	 * @access private
	 */	 	
	private static $nums = [];
	 /**
	 * For setting number in array
	 * @access private
	 */	 	
	private static $values;

	 /**
	 * Unset the values
	 *
	 * @return void
	 */	 	
	public function __destruct(){

		unset(Arithmetic::$nums);
		unset(Arithmetic::$nums);

	}
	 /**
	 * Set value for calculation
	 * @param  $value value seperated by comma
	 *
	 * @access private
	 * @return void
	 */	 	
	private static function SetValues($values){

		Arithmetic::$values = $values;

		Arithmetic::Numbers();

	}
	 /**
	 * Explod the numbers into array
	 *
	 * @access private	 
	 * @return void
	 */	 	
	private static function Numbers(){

		Arithmetic::$nums = explode(',',Arithmetic::$values);

	}	
	 /**
	 * Perform addition operation
	 *
	 * @return int | float
	 */	 	
	public static function Addition(){

		if(isset(Arithmetic::$nums) && !empty(Arithmetic::$nums)){

			$answer = 0;

			foreach (Arithmetic::$nums as $key => $value) {
					
				if(is_numeric($value)){

					$answer += $value;

				}	

			}

			if(isset($answer) && !empty($answer)){

				return $answer;

			}else{

				return false;

			}


		}else{

			return false;

		}

	}
	 /**
	 * Perform substraction operation
	 *
	 * @return int | float
	 */	 	
	public static function Substraction(){

		if(isset(Arithmetic::$nums) && !empty(Arithmetic::$nums)){

			$nums = Arithmetic::$nums;

			$answer = current($nums);

			$key = key($nums);

			unset($nums[$key]);

			foreach ($nums as $key => $value) {
					
				if(is_numeric($value)){

					$answer -= $value;

				}	

			}

			if(isset($answer) && !empty($answer)){

				return $answer;

			}else{

				return false;

			}


		}else{

			return false;

		}

	}	
	 /**
	 * Perform multiplication operation
	 *
	 * @return int | float
	 */	 	
	public static function Multiplication(){

		if(isset(Arithmetic::$nums) && !empty(Arithmetic::$nums)){

			$answer = 1;

			foreach (Arithmetic::$nums as $key => $value) {
					
				if(is_numeric($value)){

					$answer *= $value;

				}	

			}

			if(isset($answer) && !empty($answer)){

				return $answer;

			}else{

				return false;

			}


		}else{

			return false;

		}

	}
	 /**
	 * Perform division operation
	 *
	 * @return int | float
	 */	 		
	public static function Division(){

		if(isset(Arithmetic::$nums) && !empty(Arithmetic::$nums)){


			$nums = Arithmetic::$nums;

			$answer = current($nums);

			$key = key($nums);

			unset($nums[$key]);

			foreach ($nums as $key => $value) {
					
				if(is_numeric($value)){

					$answer /= $value;

				}	

			}

			if(isset($answer) && !empty($answer)){

				return $answer;

			}else{

				return false;

			}


		}else{

			return false;

		}

	}
	 /**
	 * Perform average operation
	 *
	 * @return int | float
	 */	 		
	public static function Average(){

		if(isset(Arithmetic::$nums) && !empty(Arithmetic::$nums)){

			$add = Arithmetic::Addition(Arithmetic::$nums);

			if(isset($add) && !empty($add)){

				$total_number = count(Arithmetic::$nums);

				$average = $add / $total_number;

				return $average;

			}else{

				return false;

			}


		}else{

			return false;

		}

	}
	 /**
	 * Calculate the result
	 *
	 * @param $value=> the value to-be process
	 * $type  = like addition,multiplication
	 *
	 * @return int | float
	 */		
	public static function Calculate($value,$type){

		Arithmetic::SetValues($value);

		switch ($type) {

			case 'addition':

				return Arithmetic::Addition();

				break;

			case 'substraction':

				return Arithmetic::Substraction();

				break;

			case 'multiplication':

				return Arithmetic::Multiplication();

				break;

			case 'division':

				return Arithmetic::Division();

				break;				

			case 'average':

				return Arithmetic::Average();

				break;								
			default:

				return false;

				break;
				
		}	

	}	

}