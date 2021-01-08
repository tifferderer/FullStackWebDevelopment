<?php
/*
 * confirmation.php
 * Get data from cupcakes.php
 * and validate data
 *
 * Alisa Llavore
 * Tiffany Ferderer
 *
 * 1/8/2021
 */


//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS (Make sure Booststrap is first-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Cupcake Fundraiser</title>
</head>

<?php
//data validation will go here
$isValid = true;


//Check first name
if(!empty($_POST['name'])){
    $name = $_POST['name'];
}else {
    echo "<p>Please enter a name!</p>";
    $isValid = false;
}

//Validate flavors
$flavors = "";
if(isset($_POST['flavors'])){
    $flavors = $_POST['flavors'];
    //$flavors = implode(", ", $flavors);
}
else{
    echo "<p>Please choose at least one flavor!</p>";
    $isValid =false;}

if(!$isValid) {
    return;
}
?>
<h1>Thank you <?php echo $name; ?>, for your order!</h1>
<ul>Order Summary:
<?php

//Print order summary
$count = 0;
foreach ($flavors as $id=>$name) {
    echo "<li>$id</li>";
    $count++;
}
$count= $count * 3.5;
$count = number_format($count, 2);

?>
</ul>
<p>Order Total: $<?php echo $count ?></p>