<?php include("inc/header.php");?>
<div>
  <h1>User Register</h1>
    <hr>
    <div class="container">
    <div class="myform">

    <form method="post" action="<?php echo site_url('Form/userSignup'); ?>"> 
    
    

    <div class="row">
    <div class="form-group col-12">
      <label for="username">USERNAME</label>
      <?php echo form_input(['name' => 'username', 'class'=>'form-control', 'placeholder' => 'username']);?>
      <?php echo form_error('username', '<div class="text-danger">','</div>');?>
    </div>
        


 <div class="form-group col-12">
      <label for="gender">GENDER</label><br>
      <input type="radio" id="male" name="gender" value="Male">
      <label for="male"> Male </label><br>
      <input type="radio" id="female" name="gender" value="Female">
      <label for="female"> Female </label><br>
      <input type="radio" id="other" name="gender" value="Other">
      <label for="other"> Other </label><br>
      <?php echo form_error('gender', '<div class="text-danger">','</div>');?>
 </div>

 <div class="form-group col-12">
      <label for="contact">CONTACT</label>
      <input type="text" id="contact" name="contact"  class="form-control"  spellcheck="false" placeholder="0000000000" >
      <?php echo form_error('contact', '<div class="text-danger">','</div>');?>
 </div>

      <div class="form-group col-12">
      <label for="email">EMAIL</label>     
      <input type="email" id="email" name="email" spellcheck="false"  class="form-control"  placeholder="Enter your email address" >
      <?php echo form_error('email', '<div class="text-danger">','</div>');?>
      </div>

      <div class="form-group col-12">
      <label for="password">PASSWORD</label>
      <input type="password" id="password" name="password"  class="form-control"  placeholder="Enter your password" >
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
        <option value="Other">Other</option>
      </select>
      <?php echo form_error('city', '<div class="text-danger">','</div>');?>
      </div>



      <input type="submit" name="submit" id="submit" value="Sign Up" class="btn btn-outline-success btn-md ml-auto">
    
      <a href="<?php echo site_url('Form'); ?>" class="btn btn-outline-info btn-md form_link mr-auto">Login</a>
    </div>
    <?php echo form_close();?>
     </form>


    </div>
    </div>
</div>
<?php include("inc/footer.php");?>