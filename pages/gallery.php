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
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL Statement Failed...";
        exit();
    }

    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultData) > 0) {
        while ($row = mysqli_fetch_array($resultData)) {

            echo '
    <div class="galleryContainer" style="transform:translateY(2rem)">
    <div class="galleryheading" style="margin-top:1rem;">
    <h3 class="text-bold" style="color:black;" >' . $row['title'] . '</h3>
    <p style="color:#777;" >' . $row['description'] . '</p>
    </div>
    
    
  ';
            echo '<div class="gallery">';
            $sql1 = "SELECT * from gallerypic where gallery_fk=?";
            $stmt1 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt1, $sql1)) {
                echo "SQL Statement Failed...";
                exit();
            }
            mysqli_stmt_bind_param($stmt1, "i", $row['id']);
            mysqli_stmt_execute($stmt1);
            $resultData1 = mysqli_stmt_get_result($stmt1);
            if (mysqli_num_rows($resultData1) > 0) {
                while ($row1 = mysqli_fetch_array($resultData1)) {

                    echo ' 
    
    <a href="' . $row1['directory'] . '" data-lightbox="mygallery"><img src="' . $row1['directory'] . '" alt=""></a>
   
';
                }
            }
            echo ' </div></div>';

            mysqli_stmt_close($stmt1);
        }
    }
    mysqli_stmt_close($stmt);

    ?>




    <?php include('footerdito.php') ?>
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
     </div> </div>
 </div>
    <?php
        include("../php/config.php");
        $sql = "SELECT * from gallery";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo"SQL Statement Failed...";
            exit();
        }

        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($resultData)>0){
            while($row = mysqli_fetch_array($resultData)){
            
                echo '
            <div class="galleryContainer" style="transform:translateY(2rem)">
            <div class="galleryheading" style="margin-top:1rem;">
            <h3 class="text-bold" style="color:black;" >'.$row['title'].'</h3>
            <p style="color:#777;" >'.$row['description'].'</p>
            </div>
            
            
        ';
        echo '<div class="gallery">';
        $sql1 = "SELECT * from gallerypic where gallery_fk=?";
        $stmt1 = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt1,$sql1)){
            echo"SQL Statement Failed...";
            exit();
        }
        mysqli_stmt_bind_param($stmt1,"i",$row['id']);
        mysqli_stmt_execute($stmt1);
        $resultData1 = mysqli_stmt_get_result($stmt1);
        if(mysqli_num_rows($resultData1)>0){
            while($row1 = mysqli_fetch_array($resultData1)){
                
        echo ' 
            
            <a href="'.$row1['directory'].'" data-lightbox="mygallery"><img src="'.$row1['directory'].'" alt=""></a>
        
        ';
            }

        }
        echo ' </div></div>';

        mysqli_stmt_close($stmt1);
            }

        }
        mysqli_stmt_close($stmt);

    ?>

    <?php include('footerdito.php') ?>  

 
    

</body>

</html>