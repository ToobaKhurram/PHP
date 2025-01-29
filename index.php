<?php 
$stdName ="ali";
echo $stdName;
?>

<h1>hello</h1>
<?php
$stdAge = 21;
echo "<h2>".$stdAge."</h2>";
echo "<h2>$stdAge</h2>";
echo '<h2>'.$stdName.'</h2>';
echo '<h2>$stdName</h2>';
?>
<h2><?php echo $stdName?></h2>
<?php
$empName = "hassan";
$empAge = 21;
$empEmail = "hassan123@gmail.com";
?>
<h1><?php echo $empName  ." ". $empEmail?></h1>
<h2><?php echo $empAge?></h2>