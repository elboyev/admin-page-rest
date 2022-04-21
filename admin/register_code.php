 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
 <?php 

 require_once('connection.php');
 
 
            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
            $detail=$_POST['detail'];
            $email=$_POST['email'];
            $password=$_POST['password'];

 
 $InsertData="INSERT INTO `user_data` ( `first_name`, `last_name`, `password`, `email`, `detail`) VALUES 
              ( '$first_name', '$last_name', '$password', '$email', '$detail');";



 $resultData=mysqli_query($conn,$InsertData);
 if($resultData)
 {
                                       
       echo '<script>
   
       setTimeout(function () { 
                                swal({
                                  title: "Done!",
                                  text: "post Details Added Successfully!",
                                  type: "success",
                                  confirmButtonText: "OK"
                                },
                                function(isConfirm){
                                  if (isConfirm) {
                                    window.location.href = "login.php";
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
                        window.location.href = "register.php";
                      }
                    }); }, 1000);
   
            </script>';
    }
          
  
                
?>

 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>