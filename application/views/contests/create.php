<?php echo form_open_multipart('uploadfile', array('class' => 'form-horizontal')) ?>
  <fieldset>
    <legend>Create Contest</legend>
    <div class="form-group">
      <label for="inputContestTitle" class="col-lg-2 control-label">Contest Title : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputContestTitle" placeholder="ex. MyDesign">
      </div>
    </div>
      <div class="form-group">
      <label for="inputContestDescription" class="col-lg-2 control-label">Contest Description : </label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="inputContestDescription"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="inputContestPrize" class="col-lg-2 control-label">Contest Prize : </label>
      <div class="col-lg-10">
        <input type="number" class="form-control" id="inputContestPrize" placeholder="Php. 5000.00">
      </div>
    </div>
     <div class="form-group">
      <label for="inputContestSummary" class="col-lg-2 control-label">Quick Summary : </label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="inputContestSummary"></textarea>
          </div>
    </div>
    <div class="form-group">
      <label for="inputContestLength" class="col-lg-2 control-label">Contest Length : </label>
      <div class="col-lg-10">
        <input type="number" class="form-control" id="inputContestLength" placeholder="maximum length of contest is 7 days">
      </div>
    </div>

         <div class="form-group">
      <label class="col-lg-2 control-label">Gender : </label>
      <div class="col-lg-10">
        <select id="inputGender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="inputContestLength" class="col-lg-2 control-label">Do you have sample image ?</label>
      <div class="col-lg-10">
       <select>
         <option>No, I dont have</option>
         <option>Yes, I have</option>
       </select>
      </div>
    </div>

         <input type="file" name="image_file" id="image_file" />

      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="button" id="submit" class="btn btn-primary">Start Contest</button>
      </div>
    </div>


      </fieldset>
</form>
<script>
    $(function(){
        //reset form on browser back button
        $("input[type='text'], input[type='checkbox '], select, textarea").val('');
    });
    $("#submit").click(function(){
        $("#submit").attr('disabled', '');
        console.log($("#image_file"));
        var data = {
            title : $("#inputContestTitle").val(),
            description : $("#inputContestDescription").val(),
            prize : $("#inputContestPrize").val(),
            summary : $("#inputContestSummary").val(),
            gender : $("#inputGender").val(),
            length : $("#inputContestLength").val()
        };

        console.log(data);



        var request;
            request = $.ajax({
                data : data,
                url : "create_new",
                method : "GET"
            });

        request.done(function(msg){
            window.location = "all"
        })


        
    });


    /**Generate Input**/
    window.generateInputs = () =>
    {
            $("#inputContestTitle").val(chance.last() + "'s Contest"),
            $("#inputContestDescription").val(chance.color()),
            $("#inputContestPrize").val(chance.integer()),
            $("#inputContestSummary").val(chance.color()),
            $("#inputGender").val(chance.gender()),
            $("#inputContestLength").val(chance.integer())
    }

</script>
