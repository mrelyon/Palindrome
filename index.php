<?php
/*
@author Ayomide Ikechukwu Daniels
@life.of.an.island on instagram
@ age2ho@gmail.com
@https://lifeofanisland.herokuapp.com
*/
require('lib/autoload.php');
use Lifeofanisland\Elyon\Lib\Palindrome as palindrome;
# create object
$get_palindrome = new palindrome;
# define words to check if palindrome or nah
$words = ["cool", 
          "dad", 
          "mum",
          "pool",
          "meme",
          "lol",
          "noon",
          "rar",
          "bool"];
# initiate
$palindrome_check = $get_palindrome::getPalindrome($words);
# result
$json = json_decode($palindrome_check, true);
$count_result = count($json);
for ($i=0; $i < $count_result; $i++) { 
	echo "".$json[$i]['word']." ".$json[$i]['remark']."<br/>";
}

?>