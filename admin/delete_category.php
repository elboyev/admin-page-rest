
<?php
require_once('connection.php');
$passed_cat_id=$_GET['category_id'];

$DeletePost="UPDATE `pc_category` SET `disable_flag`=1 WHERE `category_id`= $passed_cat_id";
$result = mysqli_query($conn,$DeletePost);




if ($result) {
   
 $response['status']  = 'success';
 $response['message'] = 'Post Details Deleted Successfully ...';
     header('Location: list_of_category.php');

    } else {
        $response['status']  = 'error';
 		$response['message'] = 'Something went wrong ...';
 		     header('Location: list_of_category.php');

    }

    echo json_encode($response);
    
    
?>

 