<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<html>
<body>
<div class="search" style="background-color:;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search Here</h3>

		 <div class="formstyle" style="padding:70px;border: 1px solid lightgrey;margin-right: 293px;margin-bottom: 30px;background-color:#f3f3f8;color:#141313;width: 530px;margin-left: 400px;">
					<form action="search_result.php" method="post" class="form-group">

					<!-- testing -->
					<label>
						Search By:<select name="address" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>Fatehgunj</option>
												<option>Nizampura</option>
												<option>Gorwa</option>
												<option>Waghodia</option>
                                                <option>Akota</option>
                                                <option>Raopura</option>	
                                                <option>Panigate</option>	
                                                <option>TP-13</option>	
                                                <option>Ajwa</option>
                                                <option>Sardar-Nagar</option>		
                                                <option>Gotri</option>	
                                                <option>Alkapuri</option>	
                                                <option>Channi</option>		

											</select>

					</label><br><br>
					<!-- testing end-->

					<label>
						 Category:<select name="expertise" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>Diabetic</option>
												<option>Heart</option>
												<option>Gynecology</option>
												<option>Neurologist</option>
												<option>Psychology</option>
												<option>Cardiologist</option>
												<option>Cough</option>
												<option>Epilepsy</option>
                                                <option>Eye</option>
                                                <option>Obesity</option>
                                                <option>Plastic Surgeon</option>
                                                <option>Radiologist</option>
                                                <option>Urologist</option>
                                                <option>Opthalmologist</option>
                                                <option>Endocrinologist</option>
                                                <option>Psychiatrist</option>
                                                <option>General Surgeon</option>
                                                <option>Dermatologist</option>
                                                <option>Cardiothoracic</option>
                                                <option>Critical Care</option>
                                                <option>Gasteroenterology</option>
                                                <option>Interventional Pulmonology</option>
                                                <option>Laprascopy</option>
                                                <option>GI Surgery</option>
                                                <option>Neurosurgery</option>
											</select>

					</label>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Search</button>
					<br>
					
					</form>



					
		 	</div>
	</div>
</body>
</html>