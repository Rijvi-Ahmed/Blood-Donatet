<?php

	//include header file
	include ('include/header.php');


?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Save one life, save one family</p>
						</div>


						<h1 class="text-center ">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">

								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">Select</option><optgroup title="Dhaka" label="&raquo; Dhaka"></optgroup><option value="Gulshan" >Gulshan</option><option value="Tejgaon" >Tejgaon</option><option value="Khilkhet" >Khilkhet</option><option value="Mirpur" >Mirpur</option><option value="Cantonment" >Cantonment</option><option value="Uttara" >Uttara</option><option value="Dhanmondi" >Dhanmondi</option><option value="Badda" >Badda</option><option value="Motijheel" >Motijheel</option><option value="Mohammadpur" >Mohammadpur</option><option value="Rampura" >Rampura</option><option value="Savar" >Savar</option><optgroup title="Rajshahi" label="&raquo; Rajshahi"></optgroup><option value="Bagmara" >Bagmara</option><option value="Paba" >Paba</option><option value="Charghat" >Charghat</option><option value="Durgapur" >Durgapur</option><option value="Godagari" >Godagari</option><option value="Mohanpur" >Mohanpur</option><option value="Puthia " >Puthia </option><option value="Tanore" >Tanore</option><option value="Bagha" >Bagha</option><optgroup title="Chapai Nawabganj" label="&raquo; Chapai Nawabganj"></optgroup><option value="Bholahat " >Bholahat </option><option value="Shibganj" >Shibganj</option><option value="Nachole" >Nachole</option><option value="Gomostapur" >Gomostapur</option><option value="Chapainawabganj Sadar " >Chapainawabganj Sadar </option><optgroup title="Mymensingh " label="&raquo; Mymensingh "></optgroup><option value="Bhaluka" >Bhaluka</option><option value="Dhobaura " >Dhobaura </option><option value="Fulbaria " >Fulbaria </option><option value="Gaffargaon " >Gaffargaon </option><option value="Haluaghat " >Haluaghat </option><option value="Gauripur " >Gauripur </option><option value="Ishwarganj " >Ishwarganj </option><option value="Muktagachha " >Muktagachha </option><option value="Mymensingh Sadar" >Mymensingh Sadar</option><option value="Phulpur " >Phulpur </option><option value="Trishal  " >Trishal  </option></select>
							</div>
							<div class="form-group center-aligned">
							<select style="width: 220px; height: 45px;" name="blood_group" id="blood_group" class="form-control demo-default" required>
									<option value="">Blood Group</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class=" mt-5 text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text font-family: 'ZCOOL XiaoWei', serif;">
							Blood donation is something which is a great job and it can be done by any person who is healthy and can share their little blood just for saving someone’s life. It is a noble cause of sharing your blood with someone you don’t even know it shows the unity in the humanity.
						<a href="#" class="btn btn-default btn-lg mt-5 text-center center-aligned  ">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->


			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									To give blood you need neither extra strength nor extra food, and you will save a life.” “If you're a blood donor, you're a hero to someone, somewhere, who received your gracious gift of life.” “A bottle of blood saved my life, was it yours.” “Every blood donor is a life saver.
								</p>
						</div>
    				</div>

    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									To give blood you need neither extra strength nor extra food, and you will save a life.” “If you're a blood donor, you're a hero to someone, somewhere, who received your gracious gift of life.” “A bottle of blood saved my life, was it yours.” “Every blood donor is a life saver.
								</p>
						</div>
    				</div>

    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To give blood you need neither extra strength nor extra food, and you will save a life.” “If you're a blood donor, you're a hero to someone, somewhere, who received your gracious gift of life.” “A bottle of blood saved my life, was it yours.” “Every blood donor is a life saver.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>
