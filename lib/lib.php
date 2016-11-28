<?php
/*
@author Ayomide Ikechukwu Daniels
@life.of.an.island on instagram
@ age2ho@gmail.com
@https://lifeofanisland.herokuapp.com
*/
namespace Lifeofanisland\Elyon\Lib;
class Palindrome{
	#
	protected static $init_string;
	protected static $p_drum;
	#
	static function getPalindrome($string){
		self::$init_string = $string;
		for($i = strlen($string) - 1; $i  >= 0; $i--) {
			self::$p_drum .= $string[$i];
		}
		if(self::$p_drum == $string){
		   return self::$p_drum." is a palindrome";
	    }else{
	    	return self::$p_drum. " is not a palindrome";
	    }	
			
	}
	#
}

?>