<?php
include('conexion.php');

if(isset($_POST['Update'])){
$name=$_POST['namea'];
$password=$_POST['passworda'];
$conn="UPDATE usuario SET name='$name', password='$password' WHERE name='$name'";
$res= mysqli_query($sql,$conn);
if($res){
    echo"user update exitoso";

}
else{
    echo"not update";
}

}
echo"<br>";
echo "<a class='active' href='actualizar-view.php'>Back</a>";
?>
