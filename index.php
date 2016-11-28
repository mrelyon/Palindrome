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
$get_palindrome::getPalindrome("mum");


?>