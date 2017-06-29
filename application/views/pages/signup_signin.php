<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">

    
		  <!--Sign In Form-->
			<div class="col-sm-4">
				<div class="Sign_In">
					<form class="form-horizontal" style="font-family: segoe ui light, calibri;">
						<fieldset>
							<legend>Sign In</legend>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="inputEmail">Email </label>
								<div class="col-lg-10">
									<input class="form-control" id="iloginInputEmail" placeholder="Email" type="text">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="inputPassword">Password </label>
								<div class="col-lg-10">
									<input class="form-control" id="loginInputPassword" placeholder="Password" type="password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<button class="btn btn-primary" id="submit_login" type="button">Sign Up</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>

      <!--Sign Up Form-->
			<div class="col-sm-8">
				<div class="Sign_Up">
					<form class="form-horizontal">
						<fieldset>
							<legend>Sign Up</legend>
							<div class="form-group">
								<label class="col-lg-3 control-label" for="inputfirstname">First Name</label>
								<div class="col-lg-9">
									<input class="form-control" id="inputfirstname" placeholder="ex.Juan" type="text">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 control-label" for="inputlastname">Last Name</label>
								<div class="col-lg-9">
									<input class="form-control" id="inputlastname" placeholder="ex.dela Cruz" type="text">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 control-label" for="inputcontactnumber">Contact #</label>
								<div class="col-lg-9">
									<input class="form-control" id="inputcontactnumber" placeholder="ex.09123456789" type="number">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 control-label" for="inputaddress">Complete Address</label>
								<div class="col-lg-9">
									<textarea class="form-control" id="inputaddress" placeholder="Amparo St., Maria Makiling Vill., Barangay Poblacion., IDK City, Camarines Sur, 4400" rows="3"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 control-label">Gender</label>
								<div class="col-lg-9">
									<select id="inputGender">
										<option value="Male">
											Male
										</option>
										<option value="Female">
											Female
										</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 control-label" for="inputEmail">Email</label>
								<div class="col-lg-9">
									<input class="form-control" id="inputEmail" placeholder="Email" type="text">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 control-label" for="inputPassword">Password</label>
								<div class="col-lg-9">
									<input class="form-control" id="inputPassword" placeholder="Password" type="password">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 control-label" for="confirtmInputPassword">Confirm...</label>
								<div class="col-lg-9">
									<input class="form-control" id="confirmInputPassword" placeholder="Confirm Password" type="password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<button class="btn btn-default" type="reset">Cancel</button> <button class="btn btn-primary" id="submit_signup" type="button">Submit</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<script>
		// get data
		  $("#submit_signup").click(function(){
		      var data = {
		          first_name : $("#inputfirstname").val(),
		          last_name : $("#inputlastname").val(),
		          contact_number : $("#inputcontactnumber").val(),
		          address : $("#inputaddress").val(),
		          gender : $("#inputGender").val(),
		          email : $("#inputEmail").val(),
		          password : $("#inputPassword").val()
		      };

		      var request;
		          request = $.ajax({
		              data : data,
		              url : "../users/signup",
		              method : "POST"
		          });
		          request.done(function(msg){
		              console.log(msg);
		              //window.location = "activationpage";
		          });
		  })

		  /**Generate Input**/
		  window.generateInputs = () =>
		  {
		      $("#inputfirstname").val(chance.first());
		      $("#inputlastname").val(chance.last());
		      $("#inputcontactnumber").val(Math.abs(chance.integer()));
		      $("#inputaddress").val(chance.address());
		      $("#inputGender").val(chance.gender());
		      $("#inputEmail").val(chance.email());
		      $("#inputPassword").val(chance.first() + chance.integer());
		      $("#confirmInputPassword").val(chance.first() + chance.integer());
		  }
		</script>
	</div>
</body>
</html>