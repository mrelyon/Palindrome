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
	protected static $p_drome;
	protected static $final_dromes;
	#
	static function getPalindrome($word_list){
		# process in each word
		foreach ($word_list as $key => $string){
	    #		
		self::$init_string = $string;
		# do a word reverse
		for($i = strlen($string) - 1; $i  >= 0; $i--){
			self::$p_drome .= $string[$i];
		}
		# check if reversed word is same with original word
		if(self::$p_drome == $string){
		   self::$final_dromes .= self::$p_drome." is a palindrome <br/>";
	    }else{
	    	self::$final_dromes .= self::$init_string. " is not a palindrome <br/>";
	    }

	    }
	    # return result back to object
	    return self::$final_dromes;			
	}
	#
}

?>