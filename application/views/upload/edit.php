<div>
  <h1>Update Car Details</h1>
    <hr>
    <div class="container">
    <div class="myform">
    <form method="post" action="<?php echo site_url('Cart/car_updated'); ?>"> 
    
    <div class="row">
     <div class="form-group col-12">
     <input type="hidden" value="<?php if (isset($id)){echo $id;} ?>" name="id" class="form-control">
     <label>VEHICLE NUMBER</label>
     <?php echo form_input(['class'=>'form-control','name'=>'vnumber','value'=>set_value('vnumber')]); ?> 
     </div>
     <div class="form-group col-12">
     <label>VEHICLE MODEL</label>
     <?php echo form_input(['class'=>'form-control','name'=>'vmodel','value'=>set_value('vmodel')]); ?>
     </div>

      <div class="form-group col-12">
      <label >SEAT CAPACITY</label>     
      <?php echo form_input(['class'=>'form-control','name'=>'seat','value'=>set_value('seat')]); ?>
      
      </div>
      <div class="form-group col-12">
      <label>RENT</label>
      <?php echo form_input(['class'=>'form-control','name'=>'rent','value'=>set_value('rent')]); ?>
      
      </div>
      <button type="submit" class="btn btn-outline-success btn-md ml-auto">Update Record</button>
      
     </div>
     <?php echo form_close();?>
     </form>

    </div>
    </div>
</div>
