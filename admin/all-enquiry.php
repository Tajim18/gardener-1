<?php 
include('inclued/allfunction.php');
include('inclued/connaction.php');

if(isset($_GET['delid']))
{
	
	$delresult=deletedata('gard_enquiry',$_GET['delid']);
	header('location:all-enquiry.php');
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Enquiry</title>
     <?php include('inclued/css.php');?>
  </head>
  <body>
    <div class="container-scroller">
    
      <!-- partial:partials/_navbar.html -->
     <?php include('inclued/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        
		<?php include('inclued/sidebar.php');?>
            </div>
         
       <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Enquiry</h4>
                    
                    <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    <p class="card-description"> Add class <code>.table</code>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Date</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Subject</th>
                          <th>Message</th>
                          
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  <?php 
					  
					  $enquiry=fetchalldata('gard_enquiry');
					  $i=1;
					   
					   while($data=mysqli_fetch_array($enquiry))
						   
					   {?> 
					  
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $data['name'];?></td>
                          <td><?php echo $data['email'];?></td>
                          <td><?php echo $data['mobile'];?></td>
						  <td><?php echo $data['subject'];?></td>
                         
                          <td><?php echo $data['message'];?></td>
                          <td>12 May 2018</td>
                          
                                                   <td> 
						  <a href="edit-enquiry.php?editid=<?php echo $data['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true" style="width:20px; height:20px;"></a></i>
						  
						  <a href="all-enquiry.php?delid=<?php echo $data['id'];?>" onclick="return confirm('Do you want to delete this data')"><i class="fa fa-trash" aria-hidden="true"></i></a>
						  
						  </td>
						  
                        </tr>
					   <?php $i++; } ?>
                       
                       
                       
                      </tbody>
                    </table>
                  </div>
                </div>
                  </div>
                </div>
              </div>
         
      

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include('inclued/footre.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
	
	  <?php include('inclued/script.php');?>
	
  </body>
</html>