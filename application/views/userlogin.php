<?php include("inc/header.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>User Login</title>
</head>

<body id="userlogin">
<div>
  
  <h1>User Login</h1>
    <br>
    <div class="container">
    <div class="myform">
    <form method="post" action="<?php echo site_url('Form/login_action'); ?>"> 
    <div class="row">
    <div class="form-group col-12">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" spellcheck="false"  class="form-control"  placeholder="Enter your email address" required>
    
    </div>
      <div class="form-group col-12">
      <label for="password">Password</label>
      <input type="password" id="password" name="password"  class="form-control"  placeholder="Enter your password" required>
      </div>
      <input type="submit" value="Login" class="btn btn-outline-info btn-md ml-auto">
      <a href="<?php echo site_url('Form/userRegister'); ?>" class="btn btn-outline-success btn-md form_link mr-auto">Sign Up</a>
    </div>