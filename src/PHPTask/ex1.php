<?php 
$title = "Exaercise01: HAMK oy";
include "header.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1: Getting Started with PHP - Dammika</title>

</head>

<br><br>

<body>
<h3>3.i. Write PHP code to output the following message: Hello world! My name is "David"
</h3>
<?php

    echo 'Hello world! My name is "David"';
?>

<br> <br>

<h3>3.ii. Create a PHP variable named $title and assign it the value "PHP is interesting." Then, use this variable as the content within an (heading 4) element.</h3>
<?php
    $title = "PHP is interesting.";
    echo "<h4> $title </h4>";
    ?>

<br><br>

<h3>
3.3 Define three variables: $g1 = 5, $g2 = 4, and $g3 = 5. These variables represent the grades of three students in the course. To display this information, create an HTML table within your PHP code. The table should be structured with columns for Serial Number (S.n.), Name, and Grade, and it should look like this:
</h3>

<br>

<?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    
?>

<table>
    <tr>
        <th>S.n.</th> <th>Name</th> <th>Grade</th> </tr><tr>
        <td>1</td> <td>John</td><td><?php echo $g1 ?></td></tr><tr>
        <td>2</td><td>Alice</td><td><?php echo $g2 ?></td></tr><tr>
        <td>3</td><td>Bob</td><td><?php echo $g3 ?></td></tr>
</table>




<br><br>
<h3>4 Screenshot of the development environment</h3>
<img src="Myweb.png" alt="">
<?php include "footer.php" ?>