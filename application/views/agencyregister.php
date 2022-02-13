<?php include("inc/header.php");?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>

                        
                        h1{
                        color: black !important;
                        border-radius: 20%;
                        font-weight: bold;
                        font-size: 35px;
                        text-align: center;
                        width: max-content;
                        margin: 20px auto 0px auto;
                        padding: 10px;
                        opacity: 1;
                        
                        }
                        
                        textarea {
                        content: none;
                        resize: none;
                        }
                        .myform{
                        background: whitesmoke; 
                        opacity: 0.9;  /*just remove this line or change it to 0.9 or 0.7*/
                        width: 60%;
                        height: auto;
                        padding: 25px 25px 25px 25px;
                        border-radius: 10px;
                        margin: 20px auto;
                        margin-top: 0px;
                        }



                        .errorMsg{
                        border: 2px solid whitesmoke;
                        background-color:  #CC1F1A;
                        opacity: 0.8;
                        color: whitesmoke;
                        letter-spacing: normal;
                        font-size: 16px;
                        padding: 10px;
                        }

                        .successMsg{
                        border: 2px solid whitesmoke;
                        background-color:  #1F9D55;
                        opacity: 0.8;
                        color: whitesmoke;
                        letter-spacing: normal;
                        font-size: 16px;
                        padding: 10px;
                        }


        </style>
   <!-- <link rel="stylesheet" href="./style.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    
    <title>Agency Sign Up</title>

</head>

<body id="usersignup">
<div>
  <h1>Agency Sign Up</h1>
    <hr>
    <div class="container">
    <div class="myform">

    <form method="post" action="<?php echo site_url('Formb/agencySignup'); ?>"> 
    
    

    <div class="row">
    <div class="form-group col-12">
      <label for="agencyname">AGENCY NAME</label>
      <?php echo form_input(['name' => 'agencyname', 'class'=>'form-control', 'placeholder' => 'agencyname']);?>
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