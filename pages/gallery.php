<!DOCTYPE html>
<html>
<?php include('headerdito.php') ?>

<body>
    <div class="gMasterContainer ">
        <div class="galleryContainer " style="transform:translateY(2rem)">
            <div class="galleryheading" style="margin-top:1rem;">
                <h3 class="text-bold" style="color:white;">Christmas Party</h3>
                <p style="color:white;">A Christmas party held in Datagen Cavite Facility.</p>
            </div>
            <div class="gallery">
                <a href="../img/gallery/4.JPG" data-lightbox="mygallery"><img src="../img/gallery/4.JPG" alt=""></a>
                <a href="../img/gallery/5.JPG" data-lightbox="mygallery"><img src="../img/gallery/5.JPG" alt=""></a>
                <a href="../img/gallery/6.JPG" data-lightbox="mygallery"><img src="../img/gallery/6.JPG" alt=""></a>
                <a href="../img/gallery/7.JPG" data-lightbox="mygallery"><img src="../img/gallery/7.JPG" alt=""></a>
                <a href="../img/gallery/8.JPG" data-lightbox="mygallery"><img src="../img/gallery/8.JPG" alt=""></a>
                <a href="../img/gallery/9.JPG" data-lightbox="mygallery"><img src="../img/gallery/9.JPG" alt=""></a>
                <a href="../img/gallery/10.JPG" data-lightbox="mygallery"><img src="../img/gallery/10.JPG" alt=""></a>
                <a href="../img/gallery/11.JPG" data-lightbox="mygallery"><img src="../img/gallery/11.JPG" alt=""></a>
                <a href="../img/gallery/12.JPG" data-lightbox="mygallery"><img src="../img/gallery/12.JPG" alt=""></a>
            </div>
        </div>
    </div>
    <?php
    include("../php/config.php");
    $sql = "SELECT * from gallery";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo '
    <div class="galleryContainer" style="transform:translateY(2rem)">
    <div class="galleryheading" style="margin-top:1rem;">
    <h3 class="text-bold" style="color:black;" >' . $row['title'] . '</h3>
    <p style="color:#777;" >' . $row['description'] . '</p>
    </div>
    
    
  ';
            echo '<div class="gallery">';
            $sql1 = 'SELECT * from gallerypic where gallery_fk= ' . $row['id'] . '';
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                while ($row1 = $result1->fetch_assoc()) {

                    echo ' 
    
    <a href="' . $row1['directory'] . '" data-lightbox="mygallery"><img src="' . $row1['directory'] . '" alt=""></a>
   
';
                }
            }
            echo ' </div></div>';
        }
    }
    $conn->close();

    ?>




    <?php include('footerdito.php') ?>
    <!-- <div class="gallery">
    <a href="../img/gallery/4.JPG" data-lightbox="mygallery"><img src="../img/gallery/4.JPG" alt=""></a>
     <a href="../img/gallery/5.JPG" data-lightbox="mygallery"><img src="../img/gallery/5.JPG" alt=""></a>
      <a href="../img/gallery/6.JPG" data-lightbox="mygallery"><img src="../img/gallery/6.JPG" alt=""></a>
       <a href="../img/gallery/7.JPG" data-lightbox="mygallery"><img src="../img/gallery/7.JPG" alt=""></a>
        <a href="../img/gallery/8.JPG" data-lightbox="mygallery"><img src="../img/gallery/8.JPG" alt=""></a>
         <a href="../img/gallery/9.JPG" data-lightbox="mygallery"><img src="../img/gallery/9.JPG" alt=""></a>
          <a href="../img/gallery/10.JPG" data-lightbox="mygallery"><img src="../img/gallery/10.JPG" alt=""></a>
           <a href="../img/gallery/11.JPG" data-lightbox="mygallery"><img src="../img/gallery/11.JPG" alt=""></a>
            <a href="../img/gallery/12.JPG" data-lightbox="mygallery"><img src="../img/gallery/12.JPG" alt=""></a>
     </div> </div>
 </div>-> -->




</body>

</html>