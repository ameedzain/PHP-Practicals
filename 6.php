<?php //php 7.0.8
function palindrome_check($txt){
  if(!strcasecmp($txt,strrev($txt)))
       echo $txt." is a Palindrome.\n";
  else
       echo $txt." is not a Palindrome.\n";
     }
palindrome_check("Malayalam");
palindrome_check("Ameed");
?>
