

<?php
 
 $str = " Hello PHP Worlds";

 echo"Orginal String is =>".$str."<br>";
 echo"String Length is =>".strlen($str)."<br>";
 // str_word_count() function
    echo"Word Count is =>".str_word_count($str)."<br>";
echo" Upper Case ".ucwords($str)."<br>";
echo" Lowe case ".strtolower($str)."<br>";
echo" Upper case ".strtoupper($str)."<br>";
echo" String Reverse is =>".strrev($str)."<br>";
echo" String Position is =>".strpos($str,"PHP")."<br>";
echo" String Replace is =>".str_replace("PHP","Java",$str)."<br>";
?>