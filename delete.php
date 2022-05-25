<?php
include('conexion.php');
if(isset($_POST['delete'])){    
$id=$_POST['namel'];
$conn="DELETE from usuario where name='$id'";
$res= mysqli_query($sql,$conn);
if($res){
    echo" user delete";

}
else{
    echo" not delete";
}

} 
echo"<br>";
echo "<a class='active' href='delete-view.php'>Back</a>";
?>