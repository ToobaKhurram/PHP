<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>
<body>
    <?php
    $allstudents = [
        ["ali",21,"karachi"],
        ["hamza",24,"lahore"],
        ["rafiya",19,"karachi"]
    ];
    var_dump($allstudents);
    echo "<br>"
    ?>
    <h1>Hello</h1>
    <?php
    print_r($allstudents)
    ?>
    <table border="1px">
<thead>
<tr>
<th>Name</th>
<th>Age</th>
<th>City</th>
</tr>
</thead>
<tbody>
<?php
foreach($allstudents as $std){
    ?>
    <tr>
        <td><?php echo $std[0]?></td>
        <td><?php echo $std[1]?></td>
        <td><?php echo $std[2]?></td>
    </tr>
    <?php
}
?>
</tbody>
</table>



<h2>By For Loop</h2>
<table border="1px">
<thead>
<tr>
<th>Name</th>
<th>Age</th>
<th>City</th>
</tr>
</thead>
<tbody>
<?php
for ($i = 0; $i < count($allstudents); $i++) {
    ?>
    <tr>
        <td><?php echo $allstudents[$i][0]; ?></td>
        <td><?php echo $allstudents[$i][1]; ?></td>
        <td><?php echo $allstudents[$i][2]; ?></td>
    </tr>
    <?php
}
?>
</tbody>
</table>

    



<h2>By For Loop</h2>
<table border="1px">
<tbody>
    <?php
    for($i=0;$i<count($allstudents);$i++){
        ?>
<tr>
    <?php
    for($j=0;$j<count($allstudents[$i]);$j++){
    ?>
    <td><?php echo $allstudents[$i][$j]?></td>
<?php    
}
?>
</tr>
<?php
    }
    ?>
</body>
</html>