<?php 
include('inclued/allfunction.php');
include('inclued/connaction.php');

if(isset($_GET['delid']))
{
	$delresult=deletedata('gard_slider',$_GET['delid']);
	header('location:all-slider.php');
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All slider</title>
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
                    <h4 class="card-title">All Slider</h4>
                    
                    <div class="card">
                  <div class="card-body">
                 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Added Date</th>
                          <th>Image</th>
                          <th>Heading</th>
                          <th>URL</th>
                          <th>Stasus</th>
                          <th>Modified Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  <?php 
					  
					  $sliderdata=fetchalldata('gard_slider');  
					  $i=1;
					  while($slider=mysqli_fetch_array($sliderdata))
					  
					  { ?>
					  
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $slider['added_data'];?></td>
                          <td><img src="uplodes/<?php echo $slider['image'];?>" style="height:80px; border-radius:0; width:auto;"></td>
						  <td><?php echo $slider['heading'];?></td>
                          <td><?php echo $slider['url'];?></td>
						  
                          <td>
						  <?php 
						  if($slider['status']==1){ ?>
						 <label class="badge badge-success">Active</label>
						  <?php } else  { ?>
						  <label class="badge badge-danger"></i> Inactive </label>
					  <?php } ?>
						  
						  </td>
						  
						  
                          <td><?php echo $slider['modified_date']; ?></td>
                          
                          <td> 
						  <a href="edit-slider.php?editid=<?php echo $slider['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true" style="width:20px; height:20px;"></a></i>
						  
						  <a href="all-slider.php?delid=<?php echo $slider['id'];?>" onclick="return confirm('Do you want to delete this data')"><i class="fa fa-trash" aria-hidden="true"></i></a>
						  
						  </td>
						  
						  
                        </tr>
                        
                       
					  <?php $i++; }  ?>
                       
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