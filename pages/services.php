<?php include('headerdito.php') ?>
	<body>
		<div class="body">
			

			<div role="main" class="main">
	<div class="serviceTo">
	<div style="margin-top: 5.5rem;" class="serviceToHead">
	<h2 style="font-size: 2rem; color:white;
    font-weight: bold;
    margin-bottom: 0;">OUR SERVICES</h2>
		<hr style="margin-top: 1.3rem;">
		<p class="lead" style="color:white;">
		Datagen Facilities, OPC has diversified services that allow us to offer customizable services for companies in the United States, Australia, New Zealand and United Kingdom. We cater to different entities regardless of the size of the company.
		</p>
	</div>

	<div class="serviceCard" style="border:4px solid white;" id="lg" >
	<div class="serviceLeft">
		<div style="display:flex; align-items:center; transform:translateX(-2rem);">
		<i class="bi bi-brightness-low-fill " style="color:white; text-align:center; margin-right:15px;"></i>
		<h2 style=" margin:0; color:white;">Lead Generation</h2>
		</div>
		
		<p class="lead" style="color:white;">
		We have a systematic process of identifying a person's interests and behavior. We generate leads through surveys and we customized our survey to draw accurate information on the customer's behavior and demographics. Lead generation activities are managed by a dedicated and experienced team, focused on producing quality output for our partners and clients.
		</p>
		<div id="accordion">




		<div class="card">
			<div class="card-header" id="headingOne">
				<h5 class="mb-0">
					<button class="btn btn-link white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						See more
					</button>
				</h5>

			</div>
		</div>
		<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
<div class="card-body white">
	Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel unde reiciendis aperiam, quas error a doloribus impedit cupiditate, consectetur minima, maiores fugit! Magni suscipit recusandae maiores laboriosam beatae harum repellendus itaque eligendi. Voluptatibus, quidem eos est ad accusamus adipisci ipsum numquam dicta. Veniam tempora, nam nostrum illo ea voluptatum dicta.
</div>
		</div>
		</div>
	
	</div>
	<div class="serviceRight">
		<img  src="../img/services1.jpg" alt="">
	</div>
	</div>
		<?php
		include("../php/getFrontService.php");
		?>
		
	<div class="serviceCard"  id="bos">
	<div class="serviceLeft">
				<div style="display:flex; align-items:center; transform:translateX(-2rem); ">
		<i class="bi bi-brightness-low-fill " style="color:#e26a0b; text-align:center; margin-right:15px;"></i>
		<h2 style=" margin:0;color:white;">Back Office Support</h2>
		</div>
		<p class="lead" style="margin-bottom:10px;">
		It allows clients to streamline their operations and reduce operational cost. We have upgraded our back office support capabilities to provide back office support to clients and partners.
		</p>
		<ul style="color:white;
    font-size: 1.25rem;
" class="listko"><li>Medical Transcription</li>
		<li>E-Commerce</li>
		<li>Technical Support</li>
		<li>Search Engine Optimization</li></ul>
	</div>
	<div class="serviceRight">
		<img  src="../img/services5.jpg" alt="">
	</div>
	</div>


	</div>





			</div>

			
		</div>

	</body>
			<?php include('footerdito.php') ?>
