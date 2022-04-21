 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
 <?php 

 require_once('connection.php');
 
 
            $post_title=$_POST['post_title'];
            $category_id=$_POST['category_id'];
            $post_description=$_POST['post_description'];
            $post_link=$_POST['post_link'];

 $uploaded = false;
 $filepath_image = '';
if(isset($_FILES)){
   $filetmp= $_FILES["post_image"]["tmp_name"];
  $filename_image= $_FILES["post_image"]["name"];
  $filetype= $_FILES["post_image"]["type"];
  $filepath_image= "post_images/".$filename_image;
  $imgsize=filesize($filetmp);  //to get image size

  if(!move_uploaded_file($filetmp,$filepath_image)){
    $uploaded = false;
    echo '<script>
   
       setTimeout(function () { 
                                swal({
                                  title: "Error!",
                                  text: "Error while uploading File.",
                                  type: "error",
                                  confirmButtonText: "OK"
                                },
                                function(isConfirm){
                                  if (isConfirm) {
                                    window.location.href = "edit_post.php";
                                  }
                                }); }, 1000);
   
            </script>';
            //return false;
  }else{
    $uploaded = true;
  }
}
 $InsertData="INSERT INTO `pc_posts` ( `category_id`, `post_title`, `post_description`, `post_link`, `post_image`) VALUES 
                      ('$category_id', '$post_title', '$post_description', '$post_link', '$filepath_image')";
// var_dump($InsertData);die();
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
                                    window.location.href = "list_of_post.php";
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
                        window.location.href = "add_post.php";
                      }
                    }); }, 1000);
   
            </script>';
    }
          
  
                
?>

 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>