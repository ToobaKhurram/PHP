<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_handling</title>
</head>
<body>
<div class="container">
    <form action="" method ="POST">
        <div class="form-group">
            <label for="">Name</label>
        <input type="text" name ="userName" id="" class="form_control" placeholder=""
         aria-describedby ="helpId">
        </div>
        <div class="form-group">
            <label for="">Email</label>
        <input type="text" name ="userEmail" id="" class="form_control" placeholder=""
         aria-describedby ="helpId">
        </div>
        <button class="btn btn-info" type="submit" name ="addUser">Submit</button>
</form>
</div>    
</body>
</html>
<?php
if(isset($_POST['addUser'])){
    $userName = $_POST['userName']; 
    $userEmail = $_POST['userEmail']; 
    echo $userName . " " . $userEmail;
}
// if(isset($_GET['addUser'])){
//     $userName = $_GET['userName'];
//     $userEmail = $_GET['userEmail'];
//     echo $userName . "" . $userEmail;
// }
?>