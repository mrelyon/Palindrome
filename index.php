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
          "rar"];
# initiate
$palindrome_check = $get_palindrome::getPalindrome($words);
# result
echo $palindrome_check;
?>