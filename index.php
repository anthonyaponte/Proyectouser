
<?php
include "guardar.php";
?>

<!Doctype html>
<html lang="en">

<?php require_once "head.php"; ?>

  <body>
    
  <div class="container">
    <div class="border  border-auto  m-5 d-flex justify-content-center align-items-center" style="height: 450px;">
    <div style="width: 300px; height: 300px;">
    <h1 class="text-center">Crud User </h1>
   <form id="regiration_form"  action="guardar.php"  method="POST">
  <fieldset>
    <h3>Create Your Account</h3>
    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <label for="fName"></label>
        <input type="text" class="form-control" name="name" value="<?php if(isset($name)) echo"$name"?>" id="fName" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" value="<?php if(isset($name)) echo"$password"?>" name="password" id="password" placeholder="Password">
    </div>
    
        <div class="m-1"> 
 
      <input type="submit" name="submit" class="submit btn btn-success" value="Create" id="submit_data" />
   
      </div>

      <div class="text-end m-1"> 
      <a class="active" href="">< Login</a>
<div>    <?php include('validar.php');
      ?></div>


      </div>
  </fieldset>
</form>
</div>
</div>
</div>

   
  </body>
</html>
