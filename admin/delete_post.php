
<?php
require_once('connection.php');
$passed_post_id=$_GET['post_id'];

$DeletePost="UPDATE `pc_posts` SET `disable_flag`= 1 WHERE post_id= $passed_post_id";
$result = mysqli_query($conn,$DeletePost);




if ($result) {
   
 $response['status']  = 'success';
 $response['message'] = 'Post Details Deleted Successfully ...';
     header('Location: list_of_post.php');

    } else {
        $response['status']  = 'error';
 		$response['message'] = 'Something went wrong ...';
 		     header('Location: list_of_post.php');

    }

    echo json_encode($response);
    
    
?>

 