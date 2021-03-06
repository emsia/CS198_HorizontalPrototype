<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<body>
<div class="page-content">
  <div class="span8">
    <div class="row-fluid">
      <div class="span12 content">
        <img class="title-icons" src="images/icons/user.png">
        <h3 class="title">Change Password</h3>
      	<section>
             	<div class="page-header">
                  <h1>Sia, Efren Ver M.</h1>
             	</div>
              <form class="form-horizontal">  
                  <fieldset>	
                  
                    <div class="control-group">
                        <label class="control-label" for="newPassword">New Password</label>
                        <div class="controls">
                          <input type="password" placeholder="Required" class="span3" name="newPassword" id="newPassword" required /> 
                        </div>  
                    </div> 
                    
                    <div class="control-group">
                        <label class="control-label" for="confPassword">Confirm Password</label>
                        <div class="controls">
                          <input type="password" placeholder="Required" class="span3" name="confPassword" id="confPassword" required /> 
                        </div>  
                    </div> 
                    
                    <div class="form-actions">  
                      <button type="submit" class="btn btn-primary"><b>Save</b> <i class="fui-check"></i></button> 
                      <button type="reset" class="btn btn-warning"><b>Reset</b> <i class="fui-play"></i></button> 
                      <a href="profile.php" type="button" class="btn btn-danger"><b>Cancel</b>  <i class="fui-cross"></i></a>  
                    </div>   
                    
                    
                  </fieldset>
              </form> 
          </section>
        </div>
      </div>  
    </div>    
 </div>
</body>
<?php include 'footer.php'; ?>
