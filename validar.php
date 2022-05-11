<?php
include('usuario.php');
if(isset($_POST['submit'])){

    if(empty($name)){
        echo"<script> alert('add your name');</script>";
        
    }
    else{
        if(strlen($name)> 15){
            echo"<script> alert(' very long name');</script>";

        }
    }

    if(empty($password)){
        echo" <script> alert('add your password');</script>";
        
    }
    else{
        if(strlen($password) < 6){
            echo"<script> alert(' 6 minimo');</script>";

        }
        if(strlen($password) > 16){
            echo"<script> alert(' 16 maximo');</script>";
            
         }
         if(!preg_match('`[a-z]`',$password)){
            echo"<script> alert(' al menos una mayuscula');</script>";
            
         }
    }
}