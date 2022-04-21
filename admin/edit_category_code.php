 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
 <?php 

 require_once('connection.php');
            
          
            $category_id=$_POST['category_id'];
            $category_name=$_POST['category_name'];
          
 
 


 
 $UpdateData="UPDATE `pc_category` SET `category_name`='$category_name' WHERE category_id =$category_id";

 $resultData=mysqli_query($conn,$UpdateData);
 if($resultData)
 {
                                       
    
    	
				
	
       echo '<script>
   
       setTimeout(function () { 
                                swal({
                                  title: "Done!",
                                  text: "Car Details Updated Successfully!",
                                  type: "success",
                                  confirmButtonText: "OK"
                                },
                                function(isConfirm){
                                  if (isConfirm) {
                                    window.location.href = "list_of_category.php";
                                  }
                                }); }, 1000);
   
            </script>';
            
       
            
            
    } else {
      echo '<script>
   
       setTimeout(function () { 
                    swal({
                      title: "Oops!",
                      text: "Something went wrong!",
                      type: "error",
                      confirmButtonText: "OK"
                    },
                    function(isConfirm){
                      if (isConfirm) {
                        window.location.href = "list_of_category.php";
                      }
                    }); }, 1000);
   
            </script>';
    }
    			
  
    						
?>

 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script> 