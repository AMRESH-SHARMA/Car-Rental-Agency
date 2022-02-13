<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    
    <title></title>

</head>

<body id="usersignup">
<div>
  <h1>Fill Car Details</h1>
    <hr>
    <div class="container">
    <div class="myform">

    <form method="post" action="<?php echo site_url('Cart/caradded'); ?>"> 
    
    

    <div class="row">


    <div class="form-group col-12">
    <label>VEHICLE MODEL</label>
    <input type="text" name="vmodel"  class="form-control"  spellcheck="false" placeholder="ABC0000" required>
     </div>

     
     <div class="form-group col-12">
     <label>VEHICLE NUMBER</label>
     <input type="text"  name="vnumber"  class="form-control"  spellcheck="false" placeholder="ABC000000" required>
     
     </div>

      <div class="form-group col-12">
      <label >SEAT CAPACITY</label>     
      <input type="text" name="seat" spellcheck="false"  class="form-control"  placeholder="0" required>
      
      </div>

      <div class="form-group col-12">
      <label>RENT</label>
      <input type="text"  name="rent"  class="form-control"  placeholder="000" required>
      
      </div>

      <button type="submit" class="btn btn-outline-success btn-md ml-auto">Save Record</button>
      <button type="reset" class="btn btn-outline-info btn-md form_link mr-auto">Clear Entry</button>
      
     </div>
     <?php echo form_close();?>
     </form>
     


    </div>
    </div>
</div>
    <!-- jQuery -->
    <script src="js/jquery-3.1.0.js"></script>

    <!-- Bootstrap Core JavaScript 
    <script src="js/bootstrap.min.js"></script>  -->

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>