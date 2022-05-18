<?php
if(isset($_POST['submit'])){

    if(empty($name)){
        echo"add your name";
        
    }
    else{
        if(strlen($name)> 10){
            echo"very long name";

        }
    }

    if(empty($password)){
        echo"add your password";
        
    }
    else{
        if(!preg_match('`[0-9]`',$password)){
            echo"must have a number";

        }
        if(!preg_match('`[a-z]`',$password)){
            echo"must have a letter";
            
         }
         
    }
}