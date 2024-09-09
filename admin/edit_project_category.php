<?php 

include('inclued/allfunction.php');
include('inclued/connaction.php');

$editid=$_GET['editid'];
$editdata=selectdatabyid('gard_project_category',$editid);

$sitesettingsdata=selectdatabyid('gard_site_settings','1');

if(isset ($_POST['submit']))
{
	
	date_default_timezone_set("Asia/Calcutta");
	
	$data=array(
	 "name"=>'"'.$_POST['name'].'"',
	 "status"=>'"'.$_POST['status'].'"',
	 "modified_date"=>'"'.date('Y-m-d h:i:s').'"'
	 
	);

	update('gard_project_category',$data,$editid);
    header('location:all-project_category.php');
	
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add project_category</title>
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
                    <h4 class="card-title">Add project_category</h4>
                    
                    <form class="forms-sample" method="post">
					
					 
                      <div class="form-group">
                        <label for="exampleInputName1">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Category name" name="name" value="<?php echo $editid['name'];?>">
                      </div>
					  

					  
					  
                     
                      
                      <div class="form-group">
                        <label for="exampleSelectGender">Stastus</label>
                        <select class="form-control" id="exampleSelectGender" name="status">
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