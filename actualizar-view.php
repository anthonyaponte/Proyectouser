
<!Doctype html>
<html lang="en">
  
<?php require_once "head.php";  ?>
  
  <body>
    
  <div class="container">
    <div class="border  border-auto  m-5 d-flex justify-content-center align-items-center" style="height: 450px;">
    <div style="width: 300px; height: 300px;">
    <h1>Update user </h1>
    <form id="update"  action=""  method="POST">
    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <label for="fName"></label>
        <input type="text" class="form-control" name="nameu" value="" id="fName" placeholder="Name">
        <div class="m-1"> 
 
      <input type="submit" name="Update" class="submit btn btn-success" value="Search" id="submit_data" />
     
      </div>
        
    </div>
    </form>

    <?php

if($_POST){
 require('conexion.php');
 $con=conectar();
 $id=$_POST['nameu'];
 $SQL='SELECT * FROM usuario WHERE name=:doc';
 $stmt=$con->prepare($SQL);
 $result=$stmt->execute(array(':doc'=>$id));
 $rows=$stmt->fetchAll(\PDO::FETCH_OBJ);


 
 if(count($rows)){
  
 
  foreach ($rows AS $row) {


    ?>
    
  
    
      <form id="update_form"  action="actualizar.php"  method="POST">
  <fieldset>
 
    
    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <label for="fName"></label>
        <input type="text" class="form-control" name="namea" value="<?php print($row->name) ?>" id="fName" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="text" class="form-control" value="<?php print($row->password) ?>" name="passworda" id="password" placeholder="Password">
    </div>
    
        <div class="m-1"> 
 
      <input type="submit" name="Update" class="submit btn btn-success" value="Update" id="submit_data" />
     
      </div>

      


      </div>
  </fieldset>
</form>
      
      
    
    
    
    
    <?php 
  }
    
 }
 
 
 }




?>








   
</div>
</div>
</div>
  </body>
</html>
