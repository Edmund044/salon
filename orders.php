<?php include 'components/navigation2.php'?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <table class="table table-borderless"> 
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">User</th>
              <th scope="col">Phone number</th>
              <th scope="col">Email</th>
              <th scope="col">Date</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
         </thead>
          <tbody>
            <?php 
  
      $invoices = $dbObject->read_salon_bookings("SELECT * FROM `bookings`");
     for ($i=count($invoices)-1; $i >= 0 ; $i--) { ?>
              <tr >
                <th scope="row"><?php echo count($invoices)-$i;?></th>
                <td><?php echo $invoices[$i]["name"];?></td>
                <td><?php echo $invoices[$i]["phone"];?></td>
                <td><?php echo $invoices[$i]["email"];?></td>
                <td><?php echo $invoices[$i]["date"];?></td>
                <td><?php  if ($invoices[$i]["status"] == 0) {
                    echo "<div class='text-danger'>";
                    echo "NOT PROCESSED";
                    echo "</div>";
                  }
                   else{
                    echo "<div class='text-info'>";
                     echo "PROCESSED";
                     echo "</div>";
                   }
                  ;?></td>
                 <td><a href="order_details.php?data=<?php
                  echo $invoices[$i]["service_id"];?>">
                    <?php  if ($invoices[$i]["status"] == 0) {?>
                    <button class="btn btn-lg btn-primary" style="margin-top: 2%;" type="submit"><small>Process Receipt</small></button>
                <?php  }
                   else{?>
                   <button class="btn btn-lg btn-primary" style="margin-top: 2%;" type="submit" disabled><small>Already Processed</small></button>
                 <?php  }
                  ;?>

                  </a>
        </td>
              </tr>
               <?php }


    ?>
   
          </tbody>
      </table>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
       