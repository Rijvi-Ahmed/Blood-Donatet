<?php

	include 'include/header.php';


	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {

	}else {
		header("Location:../index.php");
	}


	 if(isset($_POST['submit'])){
	 //name validation check........
	 if (isset($_POST['name']) && !empty($_POST['name'])) {
	 	if(preg_match('/^[A-Za-z\s]+$/',$_POST['name'])){
	 			$name=$_POST['name'];
	 			}else {
	 				$nameerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 				<strong>Please follow the uppercase & lowercase pattern.</strong>
	 				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 				<span aria-hidden="true">&times;</span>
	 				</button>
	 				</div>';
	 			}
	 		}else {
	 			$nameerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 			<strong>Please fill the name.</strong>
	 			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 			<span aria-hidden="true">&times;</span>
	 			</button>
	 			</div>';
	 		}

	 //Boold group validation check........
	 if (isset($_POST['blood_group']) && !empty($_POST['blood_group'])) {
	 	$blood_group=$_POST['blood_group'];

	 }else {
	 	$blood_grouperror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 	<strong>Select the blood_group.</strong>
	 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 	<span aria-hidden="true">&times;</span>
	 	</button>
	 	</div>';
	 }
	 //gender validation check..........
	 	if (isset($_POST['gender']) && !empty($_POST['gender'])) {
	 		$gender=$_POST['gender'];

	 	}else {
	 			$gendererror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 			<strong>Select the gender.</strong>
	 			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 			<span aria-hidden="true">&times;</span>
	 			</button>
	 			</div>';
	 		}
	 // date validation check........
	 		if (isset($_POST['day']) && !empty($_POST['day'])) {
	 			$day=$_POST['day'];

	 		}else {
	 			$dayerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 			<strong>Input the day.</strong>
	 			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 			<span aria-hidden="true">&times;</span>
	 			</button>
	 			</div>';
	 		}

	 		if (isset($_POST['month']) && !empty($_POST['month'])) {
	 			$month=$_POST['month'];

	 		}else {
	 			$montherror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 			<strong>Input the month.</strong>
	 			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 			<span aria-hidden="true">&times;</span>
	 			</button>
	 			</div>';
	 		}

	 		if (isset($_POST['year']) && !empty($_POST['year'])) {
	 			$year=$_POST['year'];

	 		}else {
	 			$yearerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 			<strong>Input the year.</strong>
	 			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 			<span aria-hidden="true">&times;</span>
	 			</button>
	 			</div>';
	 		}
	 //email validation check.............
	 		if (isset($_POST['email']) && !empty($_POST['email'])) {
	 	//   $pattern='/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z][2-3])$/';
	 	//  $email =$_POST["email"];
	 	//  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	 		//  if(preg_match($pattern,$_POST['email'])){
	 	if(preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$_POST['email'])){
	 				$check_email=$_POST['email'];
	 				$sql="SELECT email FROM donar WHERE email='$check_email' ";
	 				$result = mysqli_query($connection, $sql);
	 				if(mysqli_num_rows($result)>0){
	 					$emailerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 					<strong>Sorry this email are exist.</strong>
	 					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 					<span aria-hidden="true">&times;</span>
	 					</button>
	 					</div>';

	 				}else {
	 					$email=$_POST['email'];
	 				}
	 				//$email=$_POST['email'];
	 		}else {
	 			$emailerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 			<strong>Please input the valid email.</strong>
	 			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 			<span aria-hidden="true">&times;</span>
	 			</button>
	 			</div>';
	 		}
	 	}else {
	 		$emailerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 		<strong>Please fill the email.</strong>
	 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 		<span aria-hidden="true">&times;</span>
	 		</button>
	 		</div>';
	 }
	 //contact_no validation check....
	 if (isset($_POST['contact_no']) && !empty($_POST['contact_no'])) {
	 if(preg_match('/\d{11}/',$_POST['contact_no'])){
	 	$contact_no=$_POST['contact_no'];
	 }else {
	 	$contact_noerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 	<strong>Input atleast 11 character.</strong>
	 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 	<span aria-hidden="true">&times;</span>
	 	</button>
	 	</div>';
	 }
	 }else {
	 $contact_noerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 <strong>Please fill the contact number.</strong>
	 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 <span aria-hidden="true">&times;</span>
	 </button>
	 </div>';
	 }
	 //city validation check..........
	 if (isset($_POST['city']) && !empty($_POST['city'])) {
	 if(preg_match('/^[A-Za-z\s]+$/',$_POST['city'])){
	 	$city=$_POST['city'];
	 }else {
	 	$cityerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 	<strong>Please follow the upper case and lower case pattern.</strong>
	 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 	<span aria-hidden="true">&times;</span>
	 	</button>
	 	</div>';
	 }
	 }else {
	 $cityerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 <strong>Please fill the city.</strong>
	 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 <span aria-hidden="true">&times;</span>
	 </button>
	 </div>';
	 }




	 if(isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($email)&& isset($contact_no) && isset($city)){
	 $dob=$year."-".$month."-".$day;
	 //$password=md5($password);
	 $sql="UPDATE donar SET name='$name',gender='$gender',email='$email',city='$city',date_of_birth='$dob',contact_no='$contact_no',blood_group='$blood_group' WHERE  id=".$_SESSION['user_id'];

	 if(mysqli_query($connection, $sql)){
		 $passwordupdatess= '<div class="alert alert-success alert-dismissible fade show" role="alert">
		 <strong>Data updated.</strong>
		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		 <span aria-hidden="true">&times;</span>
		 </button>
		 </div>';


	 		?>
			<script>
			function myfunction(){
				location.reload();
			}

			</script>
			<?php
	 }else {
	  $updateerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 <strong>Oops somthing wrong.</strong>
	 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	 </button>
	 </div>';
	 }

	}



}

	$sql="SELECT * FROM donar WHERE id=".$_SESSION['user_id'];
	 $result=mysqli_query($connection, $sql);
	 if(mysqli_num_rows($result)>0){
		 while ($row = mysqli_fetch_assoc($result)) {
			 $userID=$row['id'];
			 $name=$row['name'];
			 $blood_group=$row['blood_group'];
			 $gender=$row['gender'];
			 $email=$row['email'];
			 $contact_no=$row['contact_no'];
			 $city=$row['city'];
			 $dbPassword=$row['password'];
			 //$dob=$row['dob'];

			 //2019 03 20
			// $date=explode("-",$dob);

		 }
	 }
if(isset($_POST['update_pass'])){


	if (isset($_POST['old_password']) && !empty($_POST['old_password']) && isset($_POST['new_password']) && !empty($_POST['new_password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])){

		$oldpassword=md5($_POST['old_password']);
		if($oldpassword==$dbPassword){
			if(strlen($_POST['new_password'])>=6){
		    if($_POST['new_password']==$_POST['c_password']){
		      $password = md5($_POST['new_password']);
		    }else {
		      $passworderror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		      <strong>Password are not same.</strong>
		      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		      <span aria-hidden="true">&times;</span>
		      </button>
		      </div>';
		    }


		  }else {
		    $passworderror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		    <strong>Please enter atleast 6 charecter.</strong>
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		    </button>
		    </div>';
		  }

		}else {
			$passworderror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please enter valid password.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>';
		}


	}  else {
	  $passworderror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Please fill the password.</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	  </button>
	  </div>';
	}
	if(isset($password)){
		$sql = " UPDATE donar SET password='$password' WHERE id='$userID'";
		if(mysqli_query($connection,$sql)){
		//	$savedate=$_SESSION['save_the_life']=	$crtdate;
			//header("Location:index.php");
			$passwordupdate= '<div class="alert alert-success alert-dismissible fade show" role="alert">
		 <strong>Password updated.</strong>
		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		 </button>
		 </div>';

			?>
			<script>
			function myfunction(){
				location.reload();
			}

			</script>
			<?php

		}else {
			$passworderror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	   <strong>Oops somthing wrong.</strong>
	   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	   </button>
	   </div>';
		}
	}

}


if(isset($_POST['delete_account'])){
	if(isset($_POST['account_password']) && !empty($_POST['account_password'])){
		$account_password=md5($_POST['account_password']);
		if($account_password==$dbPassword){
			$showform='	<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Are you sure to delete your account?</strong>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
											</button>
											<form target="" method="post">
											<br>
											<input type="hidden" name="userID" value="'.$_SESSION['user_id'].'">
											<button type="submit" name="updateSave" class="btn btn-danger">Yes</button>

											<button type="button" class="btn btn-info" data-dismiss="alert">
											<span aria-hidden="true">Oops! No </span>
											</button>
									</form>
					 </div>';
		}else {
			$deleteacerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		 <strong>Please enter valid password.</strong>
		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		 </button>
		 </div>';
		}



	}else {
		$deleteacerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	 <strong>Please enter your password.</strong>
	 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	 </button>
	 </div>';
	}

}
if(isset($_POST['userID'])){
	$userID=$_POST['userID'];
	$sql="DELETE FROM donar WHERE id=".$userID;
	if(mysqli_query($connection,$sql)){

		header("Location: logout.php");



	}else {
		$deletesubmiterror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Account not inserted.</strong>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
   </button>
   </div>';
	}

}

include 'include/sidebar.php';
?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">

				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">

					<!-- Error Messages -->

					<?php
					if(isset($showform)) echo $showform;
					if(isset($deletesubmiterror)) echo $deletesubmiterror;
					if(isset($updateerror)) echo $updateerror;
					if(isset( $passwordupdatess)) echo  $passwordupdatess; ?>
					<form class="form-group" action="" method="post">
						<div class="form-group">
							<label for="fullname">Full Name</label>
							<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control"value="<?php if (isset($name)) echo $name; ?>">
							<?php if (isset($nameerror)) echo $nameerror; ?>
						</div><!--full name-->

						<div class="form-group">
								<label for="name">Blood Group</label><br>
								<select class="form-control demo-default" id="blood_group" name="blood_group" required>
									<option value="">---Select Your Blood Group---</option>
									<?php if(isset($blood_group)) echo '<option Selected=""value="'.$blood_group.'"> '.$blood_group.'</option>';?>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
								</select>
								<?php if (isset($blood_grouperror)) echo $blood_grouperror; ?>

							</div><!--End form-group-->

						<div class="form-group">
												<label for="gender">Gender</label><br>
														Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;"<?php if(isset($gender)){if($gender="Female")echo "checked";} ?>>
														Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;"<?php if(isset($gender)){if($gender="Female")echo "checked";} ?>
														<?php if (isset($gendererror)) echo $gendererror; ?>
							</div> <!--gender-->
							<?php if (isset($gendererror)) echo $gendererror; ?>
							<div class="form-inline">
								<label for="name">Date of Birth</label><br>
								<select class="form-control demo-default" id="day" name="day" style="margin-left:10px;" required>

									<option value="">Date</option>
									<?php if(isset($day)) echo '<option Selected=""value="'.$day.'"> '.$day.'</option>';?>
									<option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>

								</select>
								<select class="form-control demo-default" name="month" id="month" style="margin-left:10px;" required>
									<option value="">Month</option>
									<?php if(isset($month)) echo '<option Selected=""value="'.month.'"> '.$month.'</option>';?>
									<option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>

								</select>

								<select class="form-control demo-default" id="year" name="year" style="margin-left:10px;" required>
									<option value="">Year</option>
									<?php if(isset($year)) echo '<option Selected=""value="'.$year.'"> '.$year.'</option>';?>
									<option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>

								</select>
							</div>
							<!--End form-group-->
								<?php if (isset($dayerror)) echo $dayerror; ?>
								<?php if (isset($montherror)) echo $montherror; ?>
								<?php if (isset($yearerror)) echo $yearerror; ?>

							<div class="form-group">
							<label for="fullname">Email</label>
							<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control"value="<?php if (isset($email)) echo $email; ?>">
							<?php if (isset($emailerror)) echo $emailerror; ?>
						</div>

						<div class="form-group">
								<label for="contact_no">Contact No</label>

								<input type="text" name="contact_no" placeholder="03********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11"value="<?php if (isset($contact_no)) echo $contact_no; ?>">
								<?php if (isset($contact_noerror)) echo $contact_noerror; ?>
							</div><!--End form-group-->

						<div class="form-group">
								<label for="city">City</label>

								<select name="city" id="city" class="form-control demo-default" required>
		<option value="">-- Select --</option>
		<?php if(isset($city)) echo '<option Selected=""value="'.$city.'"> '.$city.'</option>';?>
		<optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup><option value="Bagh" >Bagh</option><option value="Bhimber" >Bhimber</option><option value="Kotli" >Kotli</option><option value="Mirpur" >Mirpur</option><option value="Muzaffarabad" >Muzaffarabad</option><option value="Neelum" >Neelum</option><option value="Poonch" >Poonch</option><option value="Sudhnati" >Sudhnati</option><optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup><option value="Awaran" >Awaran</option><option value="Barkhan" >Barkhan</option><option value="Bolan" >Bolan</option><option value="Chagai" >Chagai</option><option value="Dera Bugti" >Dera Bugti</option><option value="Gwadar" >Gwadar</option><option value="Jafarabad" >Jafarabad</option><option value="Jhal Magsi" >Jhal Magsi</option><option value="Kalat" >Kalat</option><option value="Kech" >Kech</option><option value="Kharan" >Kharan</option><option value="Khuzdar" >Khuzdar</option><option value="Kohlu" >Kohlu</option><option value="Lasbela" >Lasbela</option><option value="Loralai" >Loralai</option><option value="Mastung" >Mastung</option><option value="Musakhel" >Musakhel</option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option><option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>

								<?php if (isset($cityerror)) echo $cityerror; ?>
							</div><!--city end-->





						<div class="form-group">
							<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Update</button>
						</div>
					</form>
					</div>
				</div>
				<!-- Messages -->

				<?php if(isset($passworderror)) echo $passworderror;
				if(isset( $passwordupdate)) echo  $passwordupdate; ?>

						<form action="" method="post" class="form-group form-container" >

							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">

					<!-- Display Message -->
					<?php if(isset($deleteacerror)) echo $deleteacerror;
				 ?>
					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >

							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
<?php include 'include/footer.php'; ?>
