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
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
						
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="Name">
						</div>
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="Address">
						</div>
						<select class="input-group"  name="sex" id="sex">
							<option value="" selected="selected" disabled="disabled">Sex</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select>
						<label for="Name">Preferred Jobs:</label>
						<div class="flex-parent-element">
						<div class="flex-child-element ">	
						
							<select class="input-group"  name="" id="">
							<option value="" selected="selected" disabled="disabled">Job</option>
							<option value="">Education</option>
							<option value="">Technology</option>
							<option value="">Sales Agent</option>
							<option value="">Electrician</option>
							<option value="">Carpenter</option>
						</select>
					</div>
						<div class="flex-child-element ">
							<select class="input-group"  name="" id="">
							<option value="" selected="selected" disabled="disabled">Job</option>
							<option value="">Education</option>
							<option value="">Technology</option>
							<option value="">Sales Agent</option>
							<option value="">Electrician</option>
							<option value="">Carpenter</option>
						</select></div>
						</div>

						
			
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email" placeholder="Email">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Password">
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
					<img src="images/peso-logo.png" alt=""  style="width:320px;height:300px;">
					</h2>
				</div>
			
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->

			<div class="col align-items-center flex-col">
			<div class="text sign-up">
			<h2> Join with us
			<img src="images/peso-logo.png" alt=""  style="width:150px;height:150px;">
			</h2>	
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

setTimeout(() => {
	container.classList.add('sign-in')
}, -100)
	</script>
</html>
