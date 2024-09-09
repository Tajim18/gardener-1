
 <?php 
include('inclued/allfunction.php');
include('inclued/connaction.php');

if(isset($_GET['delid']))
{
	$delresult=deletedata('gard_project_category',$_GET['delid']);
	header('location:all-project_category.php');
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All project_category</title>
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
                    <h4 class="card-title">All project_category</h4>
                    
                    <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    <p class="card-description"> Add class <code>.table</code>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Added Date</th>
                          <th>Name</th>
                          
                          <th>Stasus</th>
                          <th>Modified Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  
                       <?php 
					  
					  $projectcadata=fetchalldata('gard_project_category');  
					  $i=1;
					  while($data=mysqli_fetch_array($projectcadata))
					  
					  { ?>
					  
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $data['added_date'];?></td>
                          <td><?php echo $data['name'];?></td>
						  
						  <td> 	  
					     <?php 
						  if($data['status']==1){ ?>
						 <label class="badge badge-success">Active</label>
						  <?php } else  { ?>
						  <label class="badge badge-danger"></i> Inactive </label>
					  <?php } ?>
						  
						  
						  </td>
						  <td><?php echo $data['modified_date']; ?></td>
                          
                          <td> 
						  <a href="edit_project_category.php?editid=<?php echo $data['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true" style="width:20px; height:20px;"></a></i>
						  
						  <a href="all-project_category.php?delid=<?php echo $data['id'];?>" onclick="return confirm('Do you want to delete this data')"><i class="fa fa-trash" aria-hidden="true"></i></a>
						  
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