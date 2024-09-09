<?php

include('inclued/allfunction.php');
include('inclued/connaction.php');

$sitesettingsdata=selectdatabyid('gard_site_settings','1');

if(isset ($_POST['submit']))
{
	
		$filename=$_FILES['slider']['name'];
		$tempname=$_FILES['slider']['tmp_name'];
		move_uploaded_file($tempname,'uplodes/'.$filename);
	
	
	date_default_timezone_set("Asia/Calcutta");
	
	$data=array(
	"image"=>'"'.$filename.'"',
	 "heading	"=>'"'.$_POST['heading'].'"',
	 "url	"=>'"'.$_POST['url'].'"',
	 "status"=>'"'.$_POST['status'].'"',
	 "added_data"=>'"'.date('Y-m-d h:i:s').'"'
	 
	);
	
	
	
	insert('gard_slider',$data);
	header('location:all-slider.php');
	
}

 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add slider</title>
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
                    <h4 class="card-title">Add Slider</h4>
                    
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
					
					 <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="slider">
                        
                      </div>
					
                      <div class="form-group">
                        <label for="exampleInputName1">Heading</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Heading" name="heading">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">URL</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="URL" name="url">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleSelectGender">Stastus</label>
                        <select class="form-control" name="status" id="exampleSelectGender">
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