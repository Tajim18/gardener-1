<?php

include('inclued/allfunction.php');
include('inclued/connaction.php');

$sitesettingsdata=selectdatabyid('gard_site_settings','1');

if(isset ($_POST['submit']))
{
	
	$filename=$_FILES['image']['name'];
	$tempname=$_FILES['image']['tmp_name'];
	move_uploaded_file($tempname,'uplodes/'.$filename);
	
	date_default_timezone_set("Asia/Calcutta");
	
	$data=array(
	"image"=>'"'.$filename.'"',
	 "name"=>'"'.$_POST['name'].'"',
	 "desgination"=>'"'.$_POST['desgination'].'"',
	 "status"=>'"'.$_POST['status'].'"',
	 "added_data"=>'"'.date('Y-m-d h:i:s').'"'
	 
	);

	insert('gard_team',$data);
	header('location:all-team.php');
	
	
}

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Team</title>
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
                    <h4 class="card-title">Add Team</h4>
                    
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
					
					 <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="image">
                      
                      </div>
					
                      <div class="form-group">
                        <label for="exampleInputName1"> Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="name" name="name">
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputName1">Desgination</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Desgination" name="desgination">
                      </div>
					   
                      <div class="form-group">
                        <label for="exampleSelectGender">Stastus</label>
                        <select class="form-control" id="exampleSelectGender" name="status">
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
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