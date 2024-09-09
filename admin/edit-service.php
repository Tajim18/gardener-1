<?php

include('inclued/allfunction.php');
include('inclued/connaction.php');


$editid=$_GET['editid'];
$editdata=selectdatabyid('gard_services',$editid);

$sitesettingsdata=selectdatabyid('gard_site_settings','1');

if(isset ($_POST['submit']))
{
	   if(!empty($_FILES['image']['name']))
	   {
		$filename=$_FILES['image']['name'];
		$tempname=$_FILES['image']['tmp_name'];
		move_uploaded_file($tempname,'uplodes/'.$filename);
	   }
	   
	   else
	   {
		  $filename=$_POST['oldimage']; 
	   }
	   
	   if(!empty($_FILES['icon']['name']))
	   {
		$filenamei=$_FILES['icon']['name'];
		$tempnamei=$_FILES['icon']['tmp_name'];
		
		move_uploaded_file($tempnamei,'uplodes/'.$filenamei);
	   }
	   
	   else
	   {
		    $filenamei=$_POST['oldicon'];
	   }
	   
	date_default_timezone_set("Asia/Calcutta");
	
	$data=array(
	"image"=>'"'.$filename.'"',
	 "name"=>'"'.$_POST['name'].'"',
	 "description"=>'"'.$_POST['description'].'"',
	 "icon"=>'"'.$filenamei.'"',
	 "status"=>'"'.$_POST['status'].'"',
	 "added_date"=>'"'.date('Y-m-d h:i:s').'"'
	 
	);

	update('gard_services',$data,$editid);
	header('location:all-service.php');
	
}

 ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Service</title>
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
                    <h4 class="card-title">Edit Service</h4>
                    
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
					
					 <div class="form-group">
					 
					 <img src="uplodes/<?php echo $editdata['image'];?>" style="height:100px;">
					 
					 <input type="hidden" name="oldimage" value="<?php echo $editdata['image'];?>">
					 
                        <label>Image upload</label>
                        <input type="file" name="image">
                        
                      </div>
					
                      <div class="form-group">
                        <label for="exampleInputName1">Service Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Heading" value="<?php echo $editdata['name'];?>">
                      </div>
					  
					  <div class="form-group">
					  <img src="uplodes/<?php echo $editdata['icon'];?>" style="height:100px;">
					 <input type="hidden" name="oldicon" value="<?php echo $editdata['icon'];?>">
                        <label>Icon upload</label>
                        <input type="file" name="icon">
                        
                      </div>
					  
					  <div class="form-group">
					  <label for="exampleInputName1">Description</label>
					  <textarea name="description" value="<?php echo $editdata['description'];?>"></textarea>
					  
					  
					  </div>
                     
                      
                      <div class="form-group">
                        <label for="exampleSelectGender">Stastus</label>
                        <select class="form-control" name="status" id="exampleSelectGender">
                         <option value="1"<?php if($editdata['status']==1) echo 'selected';?>>Active</option>
                          <option value="0"<?php if($editdata['status']==0) echo 'selected';?>>Inactive</option>
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