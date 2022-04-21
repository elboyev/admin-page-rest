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


   
 $sql_select="SELECT * FROM pc_category WHERE  `disable_flag`= '0' ORDER BY category_name" ;  
$result_select=mysqli_query($conn,$sql_select);

$result_count=mysqli_num_rows($result_select);

if($result_count>0)
{
    while($row=mysqli_fetch_array($result_select))
        {



            $category_id=$row['category_id'];
            $category_name=$row['category_name'];
           
           
 

             $CategoryDetails[]=array(
                                "category_id" =>$category_id,
                                "category_name"=>$category_name
                               

                                );
     


        }



   $response=array("response"=> $CategoryDetails);
       echo json_encode($response);

   
}else
    {
        $response=array("response"=> "failure");
        echo json_encode($response);
    }

?>
