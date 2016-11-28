<?php
/*
@author Ayomide Ikechukwu Daniels
@life.of.an.island on instagram
@ age2ho@gmail.com
@https://lifeofanisland.herokuapp.com
*/
require('lib/autoload.php');
use Lifeofanisland\Elyon\Lib\Palindrome as palindrome;
$get_palindrome = new palindrome;
$palindrome_check = $get_palindrome::getPalindrome("mum");
echo $palindrome_check;
?>