<?php
include('conexion.php');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$password=$_POST['password'];
$conn="INSERT INTO usuario (name,password) VALUES('$name','$password')";
$res= mysqli_query($sql,$conn);
if($res){
    echo"user add :)";

}
else{
    echo"user add fail :(";
}

} 
?>