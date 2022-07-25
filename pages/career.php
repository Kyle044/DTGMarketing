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
