<div>
  <h1>Agency Register</h1>
    <hr>
    <div class="container">
    <div class="myform">

    <form method="post" action="<?php echo site_url('Formb/agencySignup'); ?>"> 

    <div class="row">
    <div class="form-group col-12">
      <label for="agencyname">AGENCY NAME</label>
      <?php echo form_input(['name' => 'agencyname', 'class'=>'form-control', 'placeholder' => 'Enter your agencyname']);?>
      <?php echo form_error('agencyname', '<div class="text-danger">','</div>');?>
    </div>
        

    <div class="form-group col-12">
      <label for="contact">CONTACT</label>
      <input type="text" id="contact" name="contact"  class="form-control"  spellcheck="false" placeholder="0000000000" >
      <?php echo form_error('contact', '<div class="text-danger">','</div>');?>
    </div>

    <div class="form-group col-12">
      <label for="email">EMAIL</label>     
      <input type="email" id="email" name="aemail" spellcheck="false"  class="form-control"  placeholder="Enter your email address" >
      <?php echo form_error('email', '<div class="text-danger">','</div>');?>
    </div>

    <div class="form-group col-12">
      <label for="password">PASSWORD</label>
      <input type="password" id="password" name="apassword"  class="form-control"  placeholder="Enter your password" >
      <?php echo form_error('password', '<div class="text-danger">','</div>');?>
    </div>

    <div class="form-group col-12">
      <label for="city">ENTER CITY</label>
      <select name="city"  class="form-control"  id="city" placeholder="City">
        <option value="">Select City</option>      
        <option value="Mumbai">Mumbai</option>
        <option value="Delhi">Delhi</option>
        <option value="Manali">Manali</option>
        <option value="Bangalore">Bangalore</option>
        <option value="Lucknow">Lucknow</option>
        <option value="Kanpur">Kanpur</option>
        <option value="Kolkata">Kolkata</option>
        <option value="Chennai">Chennai</option>
        <option value="Goa">Goa</option>
        <option value="Pune">Pune</option>
        <option value="other">Other</option>
      </select>
      <?php echo form_error('city', '<div class="text-danger">','</div>');?>
    </div>



      <input type="submit" name="submit" id="submit" value="Sign Up" class="btn btn-outline-success btn-md ml-auto">
    
      <a href="<?php echo site_url('Formb'); ?>" class="btn btn-outline-info btn-md form_link mr-auto">Login</a>
    </div>
    <?php echo form_close();?>
     </form>


    </div>
    </div>
</div>
<?php include("inc/footer.php");?>