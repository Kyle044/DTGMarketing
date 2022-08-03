<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 .faqheader {
  position: relative;
  margin-top: 6rem;
}

.faqheader img {
  display: block;
  margin-left: auto;
  margin-right: auto;

}
.faqheader .texthed {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
}

.faqheader .texthed {
  height: 100%;
  display: flex;
  padding: 2rem 7.5rem;
  justify-content: center;
  flex-direction: column;
}
.faqheader .texthed p {
  font-weight: 400;
  text-align: justify;
  font-size: 1.2rem;
  color: black;
  line-height: 2rem;
}



.faqComboPic {
position: absolute;
  top: 8px;
  left: 16px;
  font-size: 18px;
}


.faqComboPic img {
  width: auto;
  height: auto;
  border-radius: 5px;
}

.serviceCard #faqdrop {
  margin-top: 2rem;
  width: 100%;
}

.serviceCard #faqdrop .collapse p {
  text-align: justify;
  color: white;
  line-height: 1.8rem;
  font-size: 1.1rem;
  transition: 0.01s ease;
}
.serviceCard #faqdrop .collapse h3 {
  font-weight: bolder;
}

.serviceCard #faqdrop2 {
  margin-top: 2rem;
  width: 100%;
}

.serviceCard #faqdrop2 .collapse p {
  text-align: justify;
  color: white;
  line-height: 1.8rem;
  font-size: 1.1rem;
  transition: 0.01s ease;
}
.serviceCard #faqdrop2 .collapse h3 {
  font-weight: bolder;
}
</style>
</head>

<?php include('headerdito.php') ?>
<body>
<div class="body">

<!-- body -->      
<div role="main" class="main">

    <div class="faqheader">
         <img src="../img/FAQ_Background.png" alt="">


<!-- body --> 
<div class="serviceCard" style="border:4px solid white;" id="lg" >

<div class="faqComboPic">
    <img src="../img/FAQ_logo2.png" alt="">

</div>


<div id="faqdrop">
		<div class="card">
			<div class="card-header" id="headingOne">
				<h5 class="mb-0">
					<button class="btn btn-link white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    1.) What is Charity Choice and where do the leads come from?
					</button>
				</h5>

			</div>
		</div>
		<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#faqdrop">
				<div class="card-body white">
				
					
                <p>Charity Choice Directors have spent almost two decades providing services to the Not for Profit sector. Having operated fundraising campaigns for some of the world’s best known Charities.</p>
                <p>In 2008, Charity Choice brand was launched, a brand that was born to create leads for charities around the world with the utmost integrity and in strict compliance with all relevant legislative requirements in the countries where we work.</p>
                <p>Charity Choice creates high quality leads through Perspective supporter Opt In via telephone or online questionnaires. Our website www.charitychoice-au.com has been operating since the brands inception. </p>
					
					
				</div>
		</div>
		</div>
        <div id="faqdrop2">
		<div class="card">
			<div class="card-header" id="headingTwo">
				<h5 class="mb-0">
					<button class="btn btn-link white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    2.) Who is your target demographic?
					</button>
				</h5>

			</div>
		</div>
		<div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#faqdrop2">
				<div class="card-body white">
				
					
                <p>All leads utilized for telephone surveys in Australia and New Zealand are privacy compliant “TPS free” phone numbers or phone numbers belonging to people who opt themselves in to Charity Choice online, where anybody over the age of 18 is free to join.</p>
                <p>NO demographic in particular is targeted. Though it may be true that the majority of online Opt In’s maybe younger people as they have a higher internet presence, or that telephone numbers that are TPS free, generally belong to an older demographic, to say that any demographic is “Targeted” would be erroneous as people who support charities or care a great deal about certain causes come from all demographics and can’t be targeted by gender, age, race or religion.</p>
					
					
				</div>
		</div>
		</div>

        </div>
	


 


			

    


        
 

				
    

    


   
    </div>
    <?php include('footerdito.php') ?>

</body>

</html>