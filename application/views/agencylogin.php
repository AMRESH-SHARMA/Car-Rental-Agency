<?php include("inc/header.php");?>
<body id="userlogin">
<div>
  <h1>Agency Login</h1>
    <hr>
    <div class="container">
    <div class="myform">
    <form method="post" action="<?php echo site_url('Formb/login_action');?>"> 
        <div class="row">
        <div class="form-group col-12">
        <label for="email">Email</label>
        <input type="email" id="email" name="aemail" spellcheck="false"  class="form-control"  placeholder="Enter your email address" required>
        </div>
        <div class="form-group col-12">
        <label for="password">Password</label>
        <input type="password" id="password" name="apassword"  class="form-control"  placeholder="Enter your password" required>
        </div>
        <input type="submit" value="Login" class="btn btn-outline-info btn-md ml-auto">
        <a href="<?php echo site_url('Formb/agencyRegister'); ?>" class="btn btn-outline-success btn-md form_link mr-auto">Sign Up</a>
        <?php echo form_close();?>
    </form>
</div>    
</div>
</div>