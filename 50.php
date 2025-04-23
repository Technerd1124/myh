<?php
echo " Program to Demostrate cookies";

//Setting Cookies
setcookie("Username","dhanshri1123",time()+380000,"/","",0);
//Assess Cookies 
if(isset($_COOKIE["Username"])){
    echo"UserName is =>".$_COOKIE["Username"];
}
else{
    echo"Cookie is not set";
}
//Deleting Cookies
setcookie("Username","",time()-3600,"/","",0);
echo"Cookie is deleted";
?>

