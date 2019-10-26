 <?php
  //include header file
  include ('include/header.php');
    include ('include/config.php');

  if(isset($_POST['submit'])){
    if(isset($_POST['term'])===true){
      $term=$_POST['term'];
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

//password validation check...
if (isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])){
  if(strlen($_POST['password'])>=6){
    if($_POST['password']==$_POST['c_password']){
      $password=$_POST['password'];
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
}  else {
  $passworderror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Please fill the password.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>';
}


if(isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($email)&& isset($contact_no) && isset($city)  && isset($password)){
  $dob=$year."-".$month."-".$day;
  $password=md5($password);
  $sql="INSERT INTO donar (name,gender,email,city,date_of_birth,contact_no,save_the_life,password,blood_group) VALUES('$name','$gender','$email','$city','$dob','$contact_no','0','$password','$blood_group')";

  if(mysqli_query($connection, $sql)){
    header("Location:signin.php");
 }else {
   $submiterror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Oops somthing wrong.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  </div>';
 }
}

}else {
  $termerror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>follow terms and conditions.</strong>
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
 </button>
 </div>';

}
}


?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>
					<hr class="red-bar">
          <!-- Error Messages -->
          <?php if (isset($termerror)) echo $termerror;
                if (isset($submitsuccess)) echo $submitsuccess;
                if (isset($submiterror)) echo $submiterror;
          ?>

				<form class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control"value="<?php if (isset($name)) echo $name; ?>">
            <?php if (isset($nameerror)) echo $nameerror; ?>
          </div><!--full name-->

					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">Select Your Blood Group</option>
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
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option><option value="2000" >2000</option><option value="2001" >2001</option><option value="2002" >2002</option>

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

              <input type="text" name="contact_no" placeholder="017*******" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11"value="<?php if (isset($contact_no)) echo $contact_no; ?>">
              <?php if (isset($contact_noerror)) echo $contact_noerror; ?>
            </div><!--End form-group-->

					<div class="form-group">
              <label for="city">City</label>

              <select name="city" id="city" class="form-control demo-default" required>
	<option value="">Select</option>
  <?php if(isset($city)) echo '<option Selected=""value="'.$city.'"> '.$city.'</option>';?>
  <optgroup title="Dhaka" label="&raquo; Dhaka"></optgroup><option value="Gulshan" >Gulshan</option><option value="Tejgaon" >Tejgaon</option><option value="Khilkhet" >Khilkhet</option><option value="Mirpur" >Mirpur</option><option value="Cantonment" >Cantonment</option><option value="Uttara" >Uttara</option><option value="Dhanmondi" >Dhanmondi</option><option value="Badda" >Badda</option><option value="Motijheel" >Motijheel</option><option value="Mohammadpur" >Mohammadpur</option><option value="Rampura" >Rampura</option><option value="Savar" >Savar</option><optgroup title="Rajshahi" label="&raquo; Rajshahi"></optgroup><option value="Bagmara" >Bagmara</option><option value="Paba" >Paba</option><option value="Charghat" >Charghat</option><option value="Durgapur" >Durgapur</option><option value="Godagari" >Godagari</option><option value="Mohanpur" >Mohanpur</option><option value="Puthia " >Puthia </option><option value="Tanore" >Tanore</option><option value="Bagha" >Bagha</option><optgroup title="Chapai Nawabganj" label="&raquo; Chapai Nawabganj"></optgroup><option value="Bholahat " >Bholahat </option><option value="Shibganj" >Shibganj</option><option value="Nachole" >Nachole</option><option value="Gomostapur" >Gomostapur</option><option value="Chapainawabganj Sadar " >Chapainawabganj Sadar </option><optgroup title="Mymensingh " label="&raquo; Mymensingh "></optgroup><option value="Bhaluka" >Bhaluka</option><option value="Dhobaura " >Dhobaura </option><option value="Fulbaria " >Fulbaria </option><option value="Gaffargaon " >Gaffargaon </option><option value="Haluaghat " >Haluaghat </option><option value="Gauripur " >Gauripur </option><option value="Ishwarganj " >Ishwarganj </option><option value="Muktagachha " >Muktagachha </option><option value="Mymensingh Sadar" >Mymensingh Sadar</option><option value="Phulpur " >Phulpur </option><option value="Trishal  " >Trishal  </option></select>

              <?php if (isset($cityerror)) echo $cityerror; ?>
            </div><!--city end-->

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern=".{6,}">
            </div><!--End form-group-->

            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern=".{6,}">
              <?php if (isset($passworderror)) echo $passworderror; ?>
            </div><!--End form-group-->

            <div class="form-inline">
              <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->


					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Submit</button>
					</div>
				</form>
		</div>
	</div>
</div>

<br>
<br>

<?php
  //include footer file
  include ('include/footer.php');
?>
