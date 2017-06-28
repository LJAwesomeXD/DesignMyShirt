<style type="text/css">



</style>

<div class="container">
 <div class="row">
 <div class="col-sm-5">
<div class ="Sign_In">
	
<form class="form-horizontal">
  <fieldset>

  	 <legend>Sign In</legend>

  	  <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
     <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="Password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>

      <div class="form-group" method="post" enctype="multipart/form-data">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="button" id="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </div>

  </fieldset>
  </form>
</div>
</div>

<div class="col-sm-5">
<div class ="Sign_Up">
	
<form class="form-horizontal">
  <fieldset>

  	 <legend>Sign Up</legend>
  	  <div class="form-group">
      <label for="inputfirstname" class="col-lg-2 control-label">First Name:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputfirstname" placeholder="ex.Juan">
      </div>
    </div>

     <div class="form-group">
      <label for="inputlastname" class="col-lg-2 control-label">Last Name:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputlastname" placeholder="ex.dela Cruz">
      </div>
    </div>

     <div class="form-group">
      <label for="inputcontactnumber" class="col-lg-2 control-label">Contact # :</label>
      <div class="col-lg-10">
        <input type="number" class="form-control" id="inputcontactnumber" placeholder="ex.09123456789">
      </div>
    </div>

     <div class="form-group">
      <label for="inputaddress" class="col-lg-2 control-label">Complete Address :</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="inputaddress" placeholder="Amparo St., Maria Makiling Vill., Barangay Poblacion., IDK City, Camarines Sur, 4400"></textarea>
      
      </div>
    </div>

     <div class="form-group">
      <label class="col-lg-2 control-label">Gender : </label>
      <div class="col-lg-10">
        <select id="inputGender">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>



  	  <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
     <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password :</label>
      <div class="col-lg-10">
        <input type="Password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>
         <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Confirm Password :</label>
      <div class="col-lg-10">
        <input type="Password" class="form-control" id="inputPassword" placeholder="Confirm Password">
      </div>
    </div>

      <div class="form-group" method="post" enctype="multipart/form-data">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="button" id="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>


  </fieldset>
  </form>
</div>
</div>
</div>

<script> // get data
    $("#submit").click(function(){
        var data = {
            firstname : $("#inputfirstname").val(),
            lastname : $("#inputlastname").val(),
            contact_number : $("#inputcontactnumber").val(),
            complete_address : $("#inputaddress").val(),
            gender : $("#inputGender").val(),
            email : $("#inputEmail").val()
            password : $("#inputPassword").val()
        };

        console.log(data);


      
    })
</script>