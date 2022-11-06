<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PESO-BULAN</title>
        <link href="css/login.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="images/logo_peso.png"/>
       
    </head>

	<style>
		 #error{
    color:red;
    font-size: 14px;
 }
	</style>
    <body>
	
	<div id="container" class="container">
		<!-- FORM SECTION -->
		<form method="POST" action="{{ route('register') }}">
            @csrf
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
						
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="Name"  name="name" id="name" required>
						</div>
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="Address" name="address" id="address" required>
						</div>

						<div class="flex-parent-element">
						<div class="flex-child-element ">	
						<select class="input-group"  name="sex" id="sex" required>
							<option value="" selected="selected" disabled="disabled">Sex</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						</div>
						<div class="flex-child-element ">

						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="Contact Number" name="contact" id="contact" required>
						</div>
					</div></div>
						<!-- <label for="Name">Preferred Industry:</label> -->
						<div class="flex-parent-element">
						<div class="flex-child-element ">	
						
							<select class="input-group"  name="job1" id="job1" required>
							<option value="" selected="selected" disabled="disabled">Industry</option>
							<option value="Accounting & Finance">Accounting & Finance</option>
							<option value="BPO">BPO</option>
							<option value="Consumer Products">Consumer Products</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources">Human Resources</option>
							<option value="Insurance">Insurance</option>
							<option value="Manufacturing">Manufacturing</option>
							<option value="Tourism">Tourism</option>
							<option value="Transportation">Transportation</option>
							<option value="Advertising">Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
							
							
						</select>
					</div>
						<div class="flex-child-element ">
						<select class="input-group"  name="job2" id="job2" required>
							<option value="" selected="selected" disabled="disabled">Industry</option>
							<option value="Accounting & Finance">Accounting & Finance</option>
							<option value="BPO">BPO</option>
							<option value="Consumer Products">Consumer Products</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Government">Government</option>
							<option value="Human Resources">Human Resources</option>
							<option value="Insurance">Insurance</option>
							<option value="Manufacturing">Manufacturing</option>
							<option value="Tourism">Tourism</option>
							<option value="Transportation">Transportation</option>
							<option value="Advertising">Advertising</option>
							<option value="Call Center">Call Center</option>
							<option value="Engineering">Engineering</option>
							<option value="Food & Beverages">Food & Beverages</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Legal">Legal</option>
							<option value="Non-Profit Organisation">Non-Profit Organisation</option>
							<option value="Retail">Retail</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Training & Education">Training & Education</option>
							
						</select></div>
						</div>

			
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email" placeholder="Email" name="email" password="email" required> 
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="password" name="password" password="password" required> 
						</div>
						<button>
							Sign up
						</button>
						<p>
							<span>
								Already have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign in here
							</b>
						</p>
					</div>
				</div>
			
			</div>
		    </form>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
					<x-auth-session-status class="mb-4" :status="session('status')"/>
		        	<x-auth-validation-errors class="mb-4" :errors="$errors" id="error"/>
			
					<form action="{{ route('login')}}" method="POST">
					@csrf
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="Username" name="email" id="email" required>
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Password" name="password" id="password" required>
						</div>
						<button type="submit">
							Sign in
						</button>
					</form>
						
						<p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign up here
							</b>
							or
							<b onclick="toggle1()" class="pointer">
							<!-- <a href="UserDash">Go back!</a> -->
							Go Back!
							</b>
						</p>
					</div>
				</div>
				
			</div>

			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">

					<h2> PESO - BULAN
					<img src="images/logo_peso.png" alt=""  style="width:300px;height:350px;"  id="signin">
					</h2> 
				</div>
			
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->

			<div class="col align-items-center flex-col">
			<div class="text sign-up">
			<h2> 
			<img src="images/logo_peso.png" alt=""  style="width:300px;height:350px;" id="signup">
			</h2> <h2>Join with us	</h2>
			</div>
			</div>

			<!-- END SIGN UP CONTENT row content-row -->
		</div>



		<!-- END CONTENT SECTION -->
	</div>
	
    </body>

	<script>
		let container = document.getElementById('container')

toggle = () => {
	container.classList.toggle('sign-in')
	container.classList.toggle('sign-up')
}

toggle1 = () => {
	window.location.href = "UserDash";
}

setTimeout(() => {
	container.classList.add('sign-in')
}, -100)
	</script>
</html>
