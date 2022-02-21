<?php
   echo ( "You are logged in  ".  $_SESSION['counter'] );
?>

<div class="container">
<h2  style="text-align:center;">Request for a Car</h2>
<br/>
<div class="row d-flex justify-content-center">

   <form method="post" action="<?php echo site_url('Cart/booked'); ?>"> 
   <div class="form-row">
   <div class="form-group col-md-6">
   <label  for="date">Date</label>
   <input type="date" name="date" class="form-control" id="date" required>
   </div>
   <div class="form-group col-md-6">
   <label  for="day">Days</label>
   <input type="number" name="day" class="form-control" id="day" required>
   </div>
   </div>
   <div class='text-center'>
   <button type="submit" class="req_actionBtn sendRequest btn btn-outline-success">Send Request</button>
   </br>
   </div>
   </form>
</div>
</div>
<?php include("inc/footer.php");?>