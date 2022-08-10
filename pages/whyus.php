<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 .whyusheader {
  position: relative;
  margin-top: 6rem;
}

.whyusheader img {
  height: 100vh;

}
.whyusheader .texthed {
  position: absolute;
  top: 0;
  left: 0;

  height: 100%;
}

.whyusheader .texthed {
  height: 100%;
  display: flex;
  padding: 2rem 7.5rem;
  justify-content: center;
  flex-direction: column;
}
.whyusheader .texthed p {
  font-weight: 400;
  text-align: justify;
  font-size: 1.2rem;
  color: black;
  line-height: 2rem;
}

.whyuscontainer {
  /* display: grid; */
  /* max-width: 1200px; */
  margin-top: 2rem;
  /* grid-template-columns: repeat(auto-fit, 22rem); */
  align-content: center;
  gap: 10px;
  justify-content: center;
  margin: auto;
}
.whyuscontainer .whyus {
  position: relative;
  overflow-y: hidden;
  cursor: pointer;
  border-radius: 5px;
  margin-bottom: 1rem;
  overflow-x: hidden;
}

.whyuscontainer .whyus img {
  min-width:300px;
}

.whyuscontainer .whyus .whyushover {
  z-index: 99;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #f7992b;
  display: flex;
  align-items: center;
  justify-content: center;

  transform: translateY(19rem);
  transition: 250ms ease;
}
.whyuscontainer .whyus:hover .whyushover {
  color: #fff;
  transform: translateY(0rem);
  text-align: center;
}
.galleryContainerW {
  margin: 5rem 8rem;
  padding-bottom: 3rem;
}
.gMasterContainerW {
  background-image: url(../img/banner_inner.jpg);
  height: auto;
  /* height: 115vh; */
}
/* .galleryContainer .gallery {
  margin: 1rem 2rem;
  width: 100vw;
} */
.galleryContainerW .galleryW {
  --grid-layout-gap: 5px;
  --grid-column-count: 8;
  --grid-item--min-width: 280px;
  --gap-count: calc(var(--grid-column-count) - 1);
  --total-gap-width: calc(var(--gap-count) * var(--grid-layout-gap));
  --grid-item--max-width: calc(
    (100% - var(--total-gap-width)) / var(--grid-column-count)
  );

  display: grid;
  grid-template-columns: repeat(
    auto-fill,
    minmax(max(var(--grid-item--min-width), var(--grid-item--max-width)), 1fr)
  );
  grid-gap: var(--grid-layout-gap);
  justify-content: center;
  justify-items: center;
}
.galleryContainerW .galleryW img {
  height: 200px;
  width: auto;
  padding: 5px;
  transition: 250ms ease;
}

</style>
</head>

<?php include('headerdito.php') ?>
<body>
<!-- <div class="body">


<div role="main" class="main">

    <div class="whyusheader">
         <img src="../img/banner_inner.jpg" alt="">
    <div class="texthed">


<div class="whyuscontainer">
					
<a class="whyus"  href="">
		<img src="../img/whyus1.jpg" alt="">
		<div class="whyushover">
			<h3 style="color:white;">We have stringent process in selecting & hiring employees.</h3>
		</div>
</a>
	<a class="whyus"  href="">
		<img src="../img/whyus2.jpg" alt="">
		<div class="whyushover">
			<h3  style="color:white;">We provide genuine customer care at a reasonable price.</h3>
		</div>
</a>	
	<a class="whyus"  href="">
		<img src="../img/whyus3.jpg" alt="">
		<div class="whyushover">
			<h3  style="color:white;">We provide quick and efficient solutions to client concerns.</h3>
		</div>
</a>	
	<a class="whyus"  href="">
		<img src="../img/whyus4.jpg" alt="">
		<div class="whyushover">
			<h3  style="color:white;">We can customize our technology to accommodate all business’ back-office support.</h3>
		</div>
</a>	
<a class="whyus"  href="">
		<img src="../img/whyus5.jpg" alt="">
		<div class="whyushover">
			<h3 style="color:white;">We continuously upgrading our systems and processes to cope up with evolving market trends.</h3>
		</div>
</a>
	</div>
			</div>
      </div>
			</div> 
</div>-->
<div class="gMasterContainerW">
    
        <div class="galleryContainerW" style="transform:translateY(2rem)">
        <div class="whyuscontainer">    
            <div class="galleryW">
              
              <a class="whyus"  href="">
                  <img src="../img/whyus1.jpg" alt="">
                  <div class="whyushover">
                    <h3 style="color:white;">We have stringent process in selecting & hiring employees.</h3>
                  </div>
              </a>
                <a class="whyus"  href="">
                  <img src="../img/whyus2.jpg" alt="">
                  <div class="whyushover">
                    <h3  style="color:white;">We provide genuine customer care at a reasonable price.</h3>
                  </div>
              </a>	
                <a class="whyus"  href="">
                  <img src="../img/whyus3.jpg" alt="">
                  <div class="whyushover">
                    <h3  style="color:white;">We provide quick and efficient solutions to client concerns.</h3>
                  </div>
              </a>	
                <a class="whyus"  href="">
                  <img src="../img/whyus4.jpg" alt="">
                  <div class="whyushover">
                    <h3  style="color:white;">We can customize our technology to accommodate all business’ back-office support.</h3>
                  </div>
              </a>	
              <a class="whyus"  href="">
                  <img src="../img/whyus5.jpg" alt="">
                  <div class="whyushover">
                    <h3 style="color:white;">We continuously upgrading our systems and processes to cope up with evolving market trends.</h3>
                  </div>
              </a>
            </div>
            </div>  
        </div>
    </div>


<?php include('footerdito.php') ?>

</body>

</html>