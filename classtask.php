<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <title>classtask</title>
</head>
<body>
     <div class="container mt-5 p-5">
        <form action="" method ="post">
     <div class="form-group">
        <label for="">Select Day</label>
        <select class="form-control" name="selectDay" id="">
            <option >Select</option>
            <option >Monday</option>
            <option >Tuesday</option>
            <option >Wednesday</option>
            <option >Thursday</option>
            <option >Friday</option>
            <option >Saturday</option>
            <option >Sunday</option>
        </select>
     </div>
     <button name ="sub" class ="btn btn-info">Submit</button>
     </form>
     </div>
</body>
</html>
<?php
if(isset($_POST['sub'])){
    $selectDay =$_POST['selectDay'];
    // echo $selectDay;
    switch($selectDay){
        case 'Monday':
            echo "Your Monday Meal Is Biryani";
            break;
        case 'Tuesday':
            echo "Your Tuesday Meal Is Aloo Qeema";
            break;
        case 'Wednesday':
            echo "Your Wednesday Meal Is BBQ";
            break;
        case 'Thursday':
             echo "Your Thursday Meal Is Aloo Gosht";
            break;
        case 'Friday':
            echo "Your Friday Meal Is Sabzi";
            break;
        case 'Saturday':
            echo "Your Saturday Meal Is Karahi";
            break;
        case 'Sunday':
            echo "Your Monday Meal Is Fast Food";
            break;
                    default:
                    echo "none";
                    break;
    }
}
?>