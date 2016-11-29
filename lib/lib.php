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
	protected static $init_word;
	protected static $p_drome;
	protected static $final_dromes;
	protected static $palindrome_out;
	#
	static function getPalindrome($word_list){
		# initialize for json wrap up
		self::$palindrome_out = array();
		# process in each word
		foreach ($word_list as $key => $string){
	    #		
		self::$init_word = $string;
		#
		self::$p_drome = '';
		# do a word reverse
		for($i = strlen($string) - 1; $i  >= 0; $i--){
			self::$p_drome .= $string[$i];
		}
		# initialize for json creation 
		self::$final_dromes = array();
		# check if reversed word is same with original word   
		if(self::$p_drome == $string){
			# yes word is a palindrome
		   self::$final_dromes['palindrome'] = "true";//self::$p_drome." is a palindrome <br/>";
		   self::$final_dromes['word'] = self::$p_drome;
		   self::$final_dromes['remark'] = "is a palindrome";
	    }else{
	    	# nay word is not a palindrome
	    	self::$final_dromes['palindrome'] = "false";//self::$init_string. " is not a palindrome <br/>";
	    	self::$final_dromes['word'] = self::$init_word;
		    self::$final_dromes['remark'] = "is not a palindrome";
	    }
	        self::$palindrome_out[] = self::$final_dromes;
	    }
	    # return result back to object
	    return json_encode(self::$palindrome_out);			
	}

}

?>