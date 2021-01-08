<!--
Alisa Llavore
Tiffany Ferderer
1/8/2021

cupcakes.php
This webpage simulates an order form for cupcakes
-->

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
<body>
    <form id="cupcakeform" method="post" action="confirmation.php">
        <fieldset class="form-group border p-2">
            <legend>Cupcake Fundraiser</legend>

        <div class="form-group">
            <label for="name">Your Name: </label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <!-- Cupcake varieties -->
        <fieldset class="form-group border p-2">
           <legend>Cupcake Flavors</legend>
           <?php

$flavors = array('grasshopper'=>'The Grasshopper', 'maple'=>'Whiskey Maple Bacon',
    'carrot'=>'Carrot Walnut', 'caramel'=>'Salted Caramel Cupcake', 'velvet'=>'Red Velvet',
    'lemon'=>'Lemon Drop', 'tiramisu'=>'Tiramisu');
foreach ($flavors as $id=>$name) {
    echo "<label><input type='checkbox' name='flavors[$name]' value='$id'>$name<br>";
}
?>

        <!-- Order button -->
        <input type="submit" value="Order">
    </form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>