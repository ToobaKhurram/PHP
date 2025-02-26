<?php
 include("query.php");
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>signup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
  <div class="container p-5 mt-5">
    <form action="" method ="post">
       <div class="form-group">
         <label for="">Email</label>
         <input type="text" value ="<?php echo $userEmail ?>" name="uEmail" id="" class="form-control" place
         holder="" aria-describedby="helpId">
         <small id="helpId" class="text-danger"><?php echo $userEmailErr?></small>
       </div>
       <div class="form-group">
         <label for="">Password</label>
         <input type="text" value ="<?php echo $userPassword ?>" name="uPassword" id="" class="form-control" place
         holder="" aria-describedby="helpId">
         <small id="helpId" class="text-danger"><?php echo $userPasswordErr?></small>
       </div>
       <button name ="userLogin" class ="btn btn-info">Login</button>
    </form>
  </div>
  </body>
</html>