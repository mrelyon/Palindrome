<?php
/*
@author Ayomide Ikechukwu Daniels
@life.of.an.island on instagram
@ age2ho@gmail.com
@https://lifeofanisland.herokuapp.com
*/
namespace CSY\Elyon\Lib;
class CSY{
	#
	protected static $csid;
	protected static $init_string;
	protected static $p_drum;
	#
   static function setCsy($id){
		#
   	if(is_integer($id)){
		self::$csid = $id;
   	}else{
   		throw new Exception("Error Processing Request", 1);
   	}
   	#
	}
	#
	static function getCsy(){
		#
		return self::$csid;
	}
	#
	static function getPalindrome($string){
		self::$init_string = $string;
		for($i = strlen($string) - 1; $i  >= 0; $i--) {
			self::$p_drum .= $string[$i];
		}
		if(self::$p_drum == $string){
		   echo self::$p_drum." is a palindrome";
	    }else{
	    	echo self::$p_drum. " is not a palindrome";
	    }


		
		
		
	}
	#
}
#
namespace TKY;
class TKY{
	#
	var $tkyid;
	#
	function setTky($id){
		#
		$this->tkyid = $id;
	}
	#
	function getTky(){
		#
		return $this->tkyid;
	}
}
?>