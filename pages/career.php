<!DOCTYPE html>
<html>

<?php include('headerdito.php') ?>
<body>








<section class="carsec1">
<img src="../img/agentEdit.jpg" alt="">
<div class="caright">
<h1>Come Join The Fun!</h1>
<p>Datagen is the flexible platform for employees to join it combines thoughtful design with serious smarts. Our employee is build from the ground-up to have a standardize work and skills </p>
</div>
</section>

<div class="carTitle">
    <h1>Career's We Offer!</h1>
</div>

<section class="carsec2">
<div class="leleft">

<?php

include("../php/getEvenCareer.php");

?>
<div class="carhead" style="background:#EC994B;">
<ul><li>
<h1>Lorem</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad excepturi voluptates laboriosam rerum perspiciatis quos dolores autem error ipsa natus!</p>
    <h3 style="color:white">Qualification</h3>
    <ul style="color:white">
        <li>lorem2</li>
        <li>lorem2</li>
        <li>lorem2</li>
        <li>lorem2</li>
        <li>lorem2</li>
    </ul>
</li></ul>
    
</div>
</div>

<div class="riright">
   <?php

include("../php/getOddCareer.php");

?>

</div>





</section>


<?php include('footerdito.php') ?>
</body>
</html>
