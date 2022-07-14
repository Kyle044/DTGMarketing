<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<?php include('headerdito.php') ?>
<body>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Datagen signed a MOA with Protec International Institute (TESDA-Accredited Institute)</h2>
      <p>The partnership reflects an open exchange of information and personnel between the two companies that aims to provide more opportunities for career growth and professional development.</p>
      <img src="../img/gallery/tesda.png" style="width:900px;">
    </div>
    
    <div class="card">
      <h2>Datagen First Job Fair</h2>
      <p>Held last June 4,2022 from 9-12nn at Zone 11 Tatic Covered Court, Brgy. Bulihan, Silang, Cavite.</p>
      <img src="../img/gallery/jobfair.png" style="height:700px;">
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h3>Popular Post</h3>
      <img src="../img/gallery/6.jpg" style="height:200px;">
      <img src="../img/gallery/9.jpg" style="height:200px;">
      <img src="../img/gallery/11.jpg" style="height:200px;">
    </div>
  </div>
</div>

<?php include('footerdito.php') ?>
</body>
</html>
