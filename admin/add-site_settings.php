<?php

include('inclued/allfunction.php');
include('inclued/connaction.php');


$sitesettingsdata=selectdatabyid('gard_site_settings','1');

if(isset ($_POST['submit']))
{
	if(!empty($_FILES['logo']['name']))
	{
		$filename=$_FILES['logo']['name'];
		$tempname=$_FILES['logo']['tmp_name'];
		move_uploaded_file($tempname,'uplodes/'.$filename);
	}
	
	else
	{
		$filename=$_POST['oldlogo'];
	}
	
	
		if(!empty($_FILES['fovicon']['name']))
	{
		$filenamev=$_FILES['fovicon']['name'];
		$tempnamev=$_FILES['fovicon']['tmp_name'];
		move_uploaded_file($tempnamev,'uplodes/'.$filenamev);
	}
	
	else
	{
		$filenamev=$_POST['oldfavicon'];
	}
	
	$data=array(
	"phone1"=>'"'.$_POST['phone1'].'"',
	 "phone2"=>'"'.$_POST['phone2'].'"',
	 "email"=>'"'.$_POST['email'].'"',
	 "fb"=>'"'.$_POST['fb'].'"',
	 "tw"=>'"'.$_POST['tw'].'"',
	 "insta"=>'"'.$_POST['insta'].'"',
	 "youtube"=>'"'.$_POST['youtube'].'"',
	 "linkedin"=>'"'.$_POST['linkedin'].'"',
	 "address"=>'"'.$_POST['address'].'"',
	 "logo"=>'"'.$filename.'"',
	 "fovicon"=>'"'.$filenamev.'"'
	);
	
	print_r($data);
	
	update('gard_site_settings',$data,'1');
	
	
}
	


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Site_settings
</title>
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
                    <h4 class="card-title">Add Site_settings
</h4>
                    
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
					
					 <div class="form-group">
                      <img src="uplodes/<?php echo $sitesettingsdata['logo'];?>" style="height:100px;">
					 
					 <input type="hidden" name="oldlogo" value="<?php echo $sitesettingsdata['logo'];?>">
					 
                        <p><label>Logo upload</label></p>
                        <input type="file" name="logo">
                        
                      </div>
					
                      <div class="form-group">
                        <label for="exampleInputName1">Primary Mobile</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="phone1" placeholder="
						Primary Mobile" value="<?php echo $sitesettingsdata['phone1']?>">
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputName1">Secondary Mobile</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="phone2" placeholder="
						Secondary Mobile"value="<?php echo $sitesettingsdata['phone2']?>">
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" class="form-control" id="exampleInputName1" name="email" placeholder="
						Email" value="<?php echo $sitesettingsdata['email']?>">
                      </div>
					  
					  
					
					  <div class="form-group">
					  
					  <img src="uplodes/<?php echo $sitesettingsdata['fovicon'];?>" style="height:100px;">
					 
					 <input type="hidden" name="oldfavicon" value="<?php echo $sitesettingsdata['fovicon'];?>">

                        <p><label>Favicon upload</label></p>
                        <input type="file" name="fovicon">
                       
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputName1">Facebook Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="fb" placeholder="
						Facebook Page Link" value="<?php echo $sitesettingsdata['fb']?>">
                      </div>
       
	                     
					   <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                     <textarea name="address"><?php echo $sitesettingsdata['address'];?></textarea>
                      </div>
	   
	   					  <div class="form-group">
                        <label for="exampleInputName1">Twitter Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="tw" placeholder="
						Twitter Page Link"value="<?php echo $sitesettingsdata['tw']?>">
                      </div>
					  
					  	<div class="form-group">
                        <label for="exampleInputName1">Linkedin Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="linkedin" placeholder="
						Linkedin Page Link" value="<?php echo $sitesettingsdata['linkedin']?>">
                      </div>
                     
					 	<div class="form-group">
                        <label for="exampleInputName1">Youtube Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="youtube" placeholder="
						Youtube Page Link" value="<?php echo $sitesettingsdata['youtube']?>">
                      </div>
					  
					  	<div class="form-group">
                        <label for="exampleInputName1">Instagram Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="insta" placeholder="
						Instagram Page Link"value="<?php echo $sitesettingsdata['insta']?>">
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