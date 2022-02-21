

<body id="usersignup">
<div>
  <h1>Fill Car Details</h1>
    <hr>
    <div class="container">
    <div class="myform">

    <form method="post" action="<?php echo site_url('Cart/car_added'); ?>"> 
    
    

    <div class="row">

     <div class="form-group col-12">
     <label>VEHICLE NUMBER</label>
     <input type="text"  name="vnumber"  class="form-control"  spellcheck="false" placeholder="ABC000000" required>
     
     </div>
     <div class="form-group col-12">
     <label>VEHICLE MODEL</label>
     <input type="text" name="vmodel"  class="form-control"  spellcheck="false" placeholder="ABC0000" required>
     </div>

      <div class="form-group col-12">
      <label >SEAT CAPACITY</label>     
      <input type="text" name="seat" spellcheck="false"  class="form-control"  placeholder="0" required>
      
      </div>

      <div class="form-group col-12">
      <label>RENT</label>
      <input type="text"  name="rent"  class="form-control"  placeholder="$000" required>
      
      </div>

      <button type="submit" class="btn btn-outline-success btn-md ml-auto">Save Record</button>
      <button type="reset" class="btn btn-outline-info btn-md form_link mr-auto">Clear Entry</button>
      
     </div>
     <?php echo form_close();?>
     </form>
     


    </div>
    </div>
</div>
