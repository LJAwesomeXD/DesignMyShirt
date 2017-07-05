<div class="container">
	<div class="row">
	  <!--Sign In Form-->
		<div class="col-sm-4">
			<div class="Sign_In">
				<form class="form-horizontal" style="font-family: segoe ui light, calibri;">
					<fieldset>
						<legend>Sign In</legend>
						<div id="error_login"></div>
						<div class="form-group">
							<label class="col-lg-3 control-label" for="inputUsername">Username </label>
							<div class="col-lg-9">
								<input class="form-control" id="inputLoginUsername" placeholder="MacSwagger" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label" for="inputPassword">Password </label>
							<div class="col-lg-9">
								<input class="form-control" id="inputLoginPassword" placeholder="Password" type="password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<button class="btn btn-primary" id="submit_login" type="button">Sign In</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>

  <!--Sign Up Form-->
		<div class="col-sm-8">
			<div class="Sign_Up">
				<form class="form-horizontal" id="reg_form">
					<fieldset>
						<legend>Sign Up</legend>
						<div class="form-group">
							<label class="col-lg-3 control-label" for="inputfirstname">Username</label>
							<div class="col-lg-9">
								<input class="form-control" id="inputUsername" placeholder="MacSwagger" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label" for="inputfirstname">First Name</label>
							<div class="col-lg-9">
								<input class="form-control" id="inputfirstname" placeholder="Juan" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label" for="inputlastname">Last Name</label>
							<div class="col-lg-9">
								<input class="form-control" id="inputlastname" placeholder="dela Cruz" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label" for="inputcontactnumber">Contact #</label>
							<div class="col-lg-9">
								<input class="form-control" id="inputcontactnumber" placeholder="09123456789" type="number">
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
							<?php echo form_open_multipart('upload/do_upload');?>
								<label class="col-lg-3 control-label" for="confirtmInputPassword">Profile Picture :</label>
								<div class="col-lg-9">
									<input type="file" id="profile_image" name="profile_image" >
									<input type="button" id="upload" value="upload" />
								</div>
							</form>
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
	$("#upload").click(function(){
		var file_data = $('#profile_image').prop('files')[0];
	    var form_data = new FormData();
	    form_data.append('file', file_data);
		$.ajax({
	                 url: "../upload/upload_profile_image",
	                 dataType: 'text',
	                 cache: false,
	                 contentType: false,
	                 processData: false,
	                 data: form_data,
	                 type: 'post',
	                 success: function(){
	                     alert("works");
	                 }
	      });
	})

	// create new users
	function loginUser(data, cb){
		var request;
		  request = $.ajax({
			  data : data,
			  url : "../users/signin",
			  method : "POST"
		  });
		  request.done(function(msg){
			  cb(msg);
			  if(msg=="fail"){
				  $("#error_login")
					  .css({
						  "color" : "red",
						  "border" : "1px solid red",
						  "border-radius" : "5px",
						  "padding" : "5px",
						  "margin" : "15px"
					  })
				  .html("Invalid credentials!");


				  $("#inputLoginUsername, #inputLoginPassword").val('');
			  }
			  else
				  window.location='../users/profile';
		  });
	}

	function createUser(data, cb){
		var request;
	    request = $.ajax({
		   data : data,
		   url : "../users/signup",
		   method : "POST"
	   });
	   request.done(function(msg){
		   cb(msg);
// 			   alert("Thanks for joining! You may now log in.");
	   });
	}

	/** SIGN UP EVENT **/
	$("#submit_signup").click(function(){
	      var data = {
	          first_name : $("#inputfirstname").val(),
	          last_name : $("#inputlastname").val(),
	          contact_number : $("#inputcontactnumber").val(),
	          address : $("#inputaddress").val(),
	          gender : $("#inputGender").val(),
	          email : $("#inputEmail").val(),
	          password : $("#inputPassword").val(),
			  username :  $("#inputUsername").val()
	      };

		  createUser(data, function(){

		  });
	 });

	 /** SIGN IN  EVENT**/
	  $('#submit_login').click(function(){
		  var data = {
			  username : $("#inputLoginUsername").val(),
			  password : $("#inputLoginPassword").val()
		  };

		  loginUser(data, function(){

		  });
	  });

	  /** DEVELOPMENT ONLY (UNIT TESTS) **/
	  /**-----------------------------------------------------------**/

	  /**Generate Input**/
	  window.generateInputs = () =>
	  {
		  var gender = chance.gender()
	      $("#inputUsername").val(chance.first() + Math.floor(Math.random()*1000));
	      $("#inputfirstname").val(chance.first({gender}));
	      $("#inputlastname").val(chance.last());
	      $("#inputcontactnumber").val(Math.abs(chance.integer()));
	      $("#inputaddress").val(chance.address());
	      $("#inputGender").val(gender);
	      $("#inputEmail").val(chance.email());

		  var pass = chance.first() + chance.integer();
	      $("#inputPassword").val(pass);
	      $("#confirmInputPassword").val(pass);
	  }


	  /** Generate n number of new users through form input **/
	  window.generateUsers =  function(n){

		  //track progress
		  var usersGenerated = 0;
		  var userData = {};

		  //create n users
		  for(var i = 0; i < n; i++){

			  //user data
			 var gender = chance.gender();
			 var data = {
				 first_name : chance.first({gender}),
				 last_name : chance.last({gender}),
				 contact_number : Math.abs(chance.integer()),
				 address : chance.address().
				 gender,
				 email : chance.email(),
				 password : chance.first + "1234",
				 username :  chance.first() + Math.floor(Math.random() * 100),
			 };

			 userData = data;

			  //helper to create user
			  createUser(data, function(msg){
				  if(msg="SUCCESS")
					usersGenerated++;
			  });
		  }

		  //let us track how many users have been created
		  window.setInterval(function(){
			  console.log("User generated => User #" + usersGenerated + " : " + data);
		  }, 1000);
	  }

	</script>
</div>
