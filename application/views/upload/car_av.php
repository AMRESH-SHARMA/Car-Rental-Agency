<?php
   if (isset($_SESSION['counter'])){
   echo ("You are logged in session set  ".  $_SESSION['counter']);
   $id = $_SESSION['counter'];
//   echo $id;
   }
   elseif (!isset($_SESSION['counter'])) {echo ( "You are not logged in: " );
    $id = 0;
//   echo $id;
}
?>

<!-------------------------------------------------------------------LOGIN/REGISTER BUTTON HIDE/UNHIDE-->
<?php if( (!isset($_SESSION['counter'])) )
{
?>
      <a href="index">Login</a> or
      <a href="userRegister">Register</a> to book car
<?php } ?>


<div class="col-lg-12"><br>
    <h1 class="page-header">
    Available Cars To Rent</h1><br>
</div>   

                                
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped">

<thead>
    <tr>                               
    <th>VEHICLE NUMBER</th>
    <th>VEHICLE MODEL</th>
    <th>SEAT CAPACITY</th>
    <th>RENT</th>
    <th>ACTIONS</th>
    </tr>
</thead>


<tbody>                  
    <?php if(count($data)): ?> 
    <?php foreach ($data as $row): ?>
    <tr>             
        <td><?=  $row->vnumber; ?></td>
        <td><?=  $row->vmodel; ?></td>
        <td><?=  $row->seat; ?></td>
        <td>$<?= $row->rent; ?></td>  
<td>
<!---------------------------------------------------------------------------------ACTION BUTTONS HIDE/UNHIDE-->
<?php if( (isset($_SESSION['counter'])) )
        {
        ?>  
<div>  
<!-------------------------------------------------------------------------------------------------MAIN FORM-->
    <form method="post" action="<?php echo site_url('Form/booked'); ?>"> 
        <div class="form-row">           
 
<!-------------------------------------------------------------------------------------------------------DATE-->  
            <div class="form-group col-md-4">
            <label  for="date">Date</label>
            <input type="date" name="date" class="form-control" id="date" required>
            </div>
            
<!------------------------------------------------------------------------------------ID SEND IN HIDDEN MODE-->
            <input type="hidden" name="id" value="<?php if (isset($id)){echo $id;} ?>">

<!------------------------------------------------------------------------------------------------------DAYS-->
            <div class="form-group col-md-3">
            <label  for="day">Days</label>
            <input type="number" name="day" class="form-control" id="day" min="1" oninput="validity.valid||(value='');" placeholder="Minimum 1 day" required>
            </div>
            
<!--------------------------------------------------------------------------------------------VEHICLE NUMBER-->
            <?= form_hidden('vnumber',$row->vnumber)?>
<!---------------------------------------------------------------------------------------------------SUBMIT-->            
            <div class="form-group col-md-3" style="margin-top: 32px;">
            <button type="submit" class="btn btn-success">Send Request</button>
               
            </div>
            </div>
</form><?php } ?> 
<!----------------------------------------------------------------------------------------------------------->  
</td> 
    </tr>
        <?php endforeach; ?>
        <?php else: ?>
        <tr>
        <td colspan="3">Not data available</td>
    </tr>
    <?php endif; ?>
</tbody>
</table>
        </div>
        </div>
        </div>              
        </div>
        </div>


