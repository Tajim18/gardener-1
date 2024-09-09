<?php

include('inclued/allfunction.php');
include('inclued/connaction.php');

$sitesettingsdata=selectdatabyid('gard_site_settings','1');

if(isset ($_POST['submit']))
{

	
	date_default_timezone_set("Asia/Calcutta");
	
	$data=array(
	 "name"=>'"'.$_POST['name'].'"',
	 "description"=>'"'.$_POST['description'].'"',
	 "status"=>'"'.$_POST['status'].'"',
	 "added_date"=>'"'.date('Y-m-d h:i:s').'"'
	 
	);

	insert('gard_services',$data);
	
	
}

 ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Service</title>
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
                    <h4 class="card-title">Add Service</h4>
                    
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
					
					 <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="image">
                        
                      </div>
					
                      <div class="form-group">
                        <label for="exampleInputName1">Service Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Heading">
                      </div>
					  
					  <div class="form-group">
                        <label>Icon upload</label>
                        <input type="file" name="icon">
                        
                      </div>
					  
					  <div class="form-group">
					  <label for="exampleInputName1">Description</label>
					  <textarea name="description"></textarea>
					  </div>
                     
                      
                      <div class="form-group">
                        <label for="exampleSelectGender">Stastus</label>
                        <select class="form-control" name="status" id="exampleSelectGender">
                          <option value="1">Active</option>
                          <option  value="0">Inactive</option>
                        </select>
                      </div>
                     
                      
                      
                      <button type="submit" name="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
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