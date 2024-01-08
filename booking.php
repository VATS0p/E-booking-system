<?php if(!isset($_SESSION)){
	// session_start();
	}  
?>
<!-- result -->
<?php 
	$doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:"";
	
 ?>
				<!-- fetching doctor info -->
					<?php 
					include('config.php');
					

							$sql="SELECT * FROM doctor WHERE doc_id = $doc_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $doc_id   = $row["doc_id"];
							        $name 	= $row["name"];
							        $expertise 	= $row["expertise"];
							        $contact 	= $row["contact"];
							        $fee = $row["fee"];
									 $userid = $row["userid"];
							    }
							}
							
							$conn->close();

					?>
					<!-- fetching doctor info -->

	<!-- 	booking info-->
		<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Book Appoinment</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group" enctype="multipath/form-data">
					

					<label>
						Dr. Name: <input type="text" name="dname" value="<?php echo $name; ?>" >
					</label><br><br>

 					<label>
						Contact: <input type="text" name="dcontact" value="<?php echo $contact; ?>" />
					</label><br><br>
 					
					<label>
						Category: <input type="text" name="expertise" value="<?php echo $expertise; ?>" >
					</label><br><br>

					<label>
						Fee(Tk): <input type="text" name="fee" value="<?php echo $fee; ?>" >
					</label><br><br>
					<label>
						Your Name: <input type="text" name="pname" value="">
					</label><br><br>

 					<label>
						 Contact: <input type="text" name="pcontact" value=""/>
					</label><br><br>
					<label>
						 E-mail: <input type="email" name="email" value=""/>
					</label><br><br>
 					
					<label>
						 Address: <input type="text" name="address" value="">
					</label><br><br>
					<label>
						 Date: <input type="date" name="dates" value="">
					</label><br><br>
					<label>
						 Time: <select name="tyme" required>
										<option value="">-select-</option>
										<option value="11.00am">11.00am</option>
										<option value="03.00pm">03.00pm</option>
									</select>
					</label><br><br>
					<label>
						 Payment: <select name="payment" required>
										<option value="">-select-</option>
										<option value="Cash">Cash</option>
										<option value="bKask">bKask</option>
									</select>
					</label><br><br>
					<label>
						  <input type="hidden" name="userid" value="<?php echo $userid; ?>">
					</label><br><br>
					
					<button name="submit" type="submit" style="padding-right:5px;border-radius:3px;margin-right:;">Confirm</button> 
					<a href="search_doctor.php"><button name="" type="" style="padding-right:5px;border-radius:3px;margin-right:-150px;">Cancel</button></a> <br>


				</form> <br><br>

			</div>
	
	
		</div>
				<!-- 	booking info-->
				
			<!-- confirming booking -->
					<?php

						$conn = mysqli_connect("localhost", "root", "", "login");
						if(isset($_POST['submit'])){
							

						$sql = " INSERT INTO booking (dname,userid,dcontact,expertise,fee, pname,pcontact,email,address,dates,tyme,payment)
							VALUES ('" . $_POST["dname"] . "','" . $_POST["userid"] . "','" . $_POST["dcontact"] . "','" . $_POST["expertise"] . "', '" . $_POST["fee"] . "','" . $_POST["pname"] . "','". $_POST["pcontact"] . "','". $_POST["email"] . "','". $_POST["address"] . "','". $_POST["dates"] . "','". $_POST["tyme"] . "','". $_POST["payment"] . "' )";

							if ($conn->query($sql) === TRUE) {
								$to_email = $_POST["email"];
								$subject = "Message Regarding Appointment";
								$body = '<h1 align="center">Appointment Details Received</h1>
								        <h3 align="center">Doctors Details</h3><hr> 
										<p><b>Doctor Name : </b>'.$_POST["dname"].'</p>
										<p><b>Doctor Contact Number : </b>'.$_POST["dcontact"].'</p>
										<p><b>Expertise : </b>'.$_POST["expertise"].'</p>
										<p><b>Fees : </b>'.$_POST["fee"].'</p>
										<h3 align="center">Personal Details</h3><hr>
										<p><b>Your Name : </b>'.$_POST["pname"].'</p>
										<p><b>Address : </b>'.$_POST["address"].'</p>
										<p><b>E-mail : </b>'.$_POST["email"].'</p>
										<h3 align="center">Appointment Details</h3><hr>
										<p><b>Date : </b>'.$_POST["dates"].'</p>
										<p><b>Time : </b>'.$_POST["tyme"].'</p>
										<p><b>Payment : </b>'.$_POST["payment"].'</p>';
								$headers = "From: Appointment Lelo";
								$headers .= "MIME-Version: 1.0\r\n";
                                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

									if (mail($to_email, $subject, $body, $headers)) {
    									echo "Email successfully sent to $to_email...";
										header("Location: sendmailssuccess.php");
									} else {
    									echo "Email sending failed...";
									}
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					?> 

				<!-- confirming booking -->
                    </body>
                    </html>