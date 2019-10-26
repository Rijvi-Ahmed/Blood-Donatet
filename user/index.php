
<?php

	include 'include/header.php';
			if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {

			}else {
				header("Location:../index.php");
			}
if(isset($_POST['date'])){
	$showform='	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	                <strong>Are you sure to update your record?</strong>
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
}
if(isset($_POST['userID'])){
	$userID=$_POST['userID'];
	$crtdate=date_create();
	$crtdate=date_format($crtdate,'Y-m-d');
	$sql = " UPDATE donar SET save_the_life='$crtdate' WHERE id='$userID'";
	if(mysqli_query($connection,$sql)){
		$savedate=$_SESSION['save_the_life']=	$crtdate;
		header("Location:index.php");

	}else {
		$submiterror= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Oops somthing wrong.</strong>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
   </button>
   </div>';
	}
}

?>


<style>
	h1,h3{
		display: inline-block;
		padding: 10px;
	}

	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>

			<div class="container" style="padding: 60px 0;">
			<div class="row">
				<div class="col-md-12 col-md-push-1">
					<div class="panel panel-default" style="padding: 20px;">
						<div class="panel-body">
							<?php   if (isset($submiterror)) echo $submiterror; ?>

							<div class="heading text-center">
								<h3>Welcome </h3> <h1>  <?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></h1>
							</div>
							<p class="text-center">Here you can mennage your account update your profile</p>
							<div class="test-success text-center" id="data" style="margin-top: 20px;"><?php if(isset($showform)) echo $showform; ?><!-- Display Message here--></div>
			</div>
							<?php
							$savedate=$_SESSION['save_the_life'];

							if($savedate == '0'){
								echo '<form target=""method="post">
									<button style="margin-top: 20px;" name="date" id="save_the_life"type="submit" class="btn btn-lg btn-danger center-aligned" >Save The Life</button>
									<div class="test-success text-center" id="data" style="margin-top: 20px;">
								</form>
								';
							}else {

									$start=date_create($_SESSION['save_the_life']);
									$end=date_create();
									$diff=date_diff($start,$end);

								//$diffyear=$diff->y;
								$diffmonth=$diff->m;
								//$diffday=$diff->d;
								//echo $diffyear." ";
									//echo $diffmonth." ";
							  	//echo $diffday." ";
									if($diffmonth>=3){
										echo '<form target=""method="post">
											<button style="margin-top: 20px;" name="date" id="save_the_life"type="submit" class="btn btn-lg btn-danger center-aligned" >Save The Life</button>
											<div class="test-success text-center" id="data" style="margin-top: 20px;">
										</form>
										';
									}else {
										echo '		<div class=" donors_data ">
													<span class="name">Congratulation!!!</span>
													<span>You are already donate the blood and save the life.we are very happy for you...</span>


									';
									}
							}

							 ?>



						</div>
					</div>
				</div>
			</div>
		</div>


<?php

include 'include/footer.php';
?>
