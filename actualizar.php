<?php
include('conexion.php');
if(isset($_POST['Update'])){
$name=$_POST['namea'];
$password=$_POST['passworda'];
$conn="UPDATE usuario SET name='$name', password='$password' WHERE name='$name'";
$res= mysqli_query($sql,$conn);
if($res){
    echo"<script> alert(' user update exitoso');</script>";

}
else{
    echo"<script> alert(' not update');</script>";
}

} 
?>