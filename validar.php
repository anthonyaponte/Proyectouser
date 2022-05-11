<?php
/* include('usuario.php'); */
if(isset($_POST['submit'])){

    if(empty($name)){
        echo"<script> alert('add your name');</script>";
        
    }
    else{
        if(strlen($name)> 10){
            echo"<script> alert(' very long name');</script>";

        }
    }

    if(empty($password)){
        echo" <script> alert('add your password');</script>";
        
    }
    else{
        if(!preg_match('`[0-9]`',$password)){
            echo"<script> alert(' must have a number');</script>";

        }
        if(!preg_match('`[a-z]`',$password)){
            echo"<script> alert('must have a letter');</script>";
            
         }
         
    }
}