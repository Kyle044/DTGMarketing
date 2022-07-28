<!DOCTYPE html>
<html>

<?php include('headerdito.php') ?>
<body>








<section class="carsec1">
<img src="../img/agentEdit.jpg" alt="">
<div class="caright">
<h1>Come Join The Fun!</h1>

<p style="color: #777;">Datagen Facilities OPC is an equal opportunity employer and all qualified applicants will receive consideration for employment without regard to race, color, religion, sex, sexual orientation, gender identity or expression, pregnancy, age, national origin and disability status.</p>
<p style="color: #777;">Email : hrdepartment.dgf@gmail.com</p>

<a class="btn btn-primary cbtn" style=" background-color: #dd8e33;
  border-color: #dd8e33;
  color: #ffffff;" href="mailto:hrdepartment.dgf@gmail.com" role="button">Apply Now!</a>
</div>

</section>

<div class="carTitle">

    <h1 style="color: #777;">Careers We Offer!</h1>

</div>



<div class="masterCareerCard">



<?php

include("../php/getCareer.php");

?>




</div>





<!-- <section class="carsec2">
<div class="leleft">


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





</section> -->


<?php include('footerdito.php') ?>
</body>
</html>
