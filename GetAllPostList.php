<?php

include "connection.php";

$UserDetails = null;
$user_flag=null;


// if($_SERVER['REQUEST_METHOD']=='POST')
// {
       
//         $user_flag=$_POST['user_flag'];
       
// }


// if($_SERVER['REQUEST_METHOD']=='GET')
// {
   
       
//         $user_flag=$_GET['user_flag'];
   
// }


   
 $sql_select="SELECT * FROM `pc_posts`  WHERE  `disable_flag`= '0' ORDER BY post_id DESC";  
$result_select=mysqli_query($conn,$sql_select);

$result_count=mysqli_num_rows($result_select);

if($result_count>0)
{
    while($row=mysqli_fetch_array($result_select))
        {



            $post_id=$row['post_id'];
            $post_title=$row['post_title'];
            $post_description=$row['post_description'];
            $post_link=$row['post_link'];
            $post_image=$row['post_image'];
            $created_at=$row['created_at'];
           
 
$new_date = date("d-F-Y",strtotime($created_at));

             $PostDetails[]=array(
                                "post_id" =>$post_id,
                                "post_title"=>$post_title,
                                "post_description" => $post_description,
                                "post_link" => $post_link,
                                "post_image" => $post_image,
                                "created_at"=>$new_date

                                );
     


        }



   $response=array("response"=> $PostDetails);
       echo json_encode($response);

   
}else
    {
        $response=array("response"=> "failure");
        echo json_encode($response);
    }

?>
