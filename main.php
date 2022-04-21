`<?php
require ('connection.php');

        $adview_id =null;
        $link =null;
       
        $image =null;
       

if($_SERVER['REQUEST_METHOD']=='POST'){


		$adview_id= $_POST['adview_id'];
        
        $link= $_POST['link'];
        $image= $_POST['image'];
        

}
else if($_SERVER['REQUEST_METHOD']=='GET')
{

	// $company_name= $_GET['company_name'];
}

 $sql ="SELECT * FROM `adview_data` ";

$result = $conn->query($sql);
if($result->num_rows > 0)
{
   while($row = $result->fetch_assoc()) 

   {

        $link= $row['link'];
        $image= $row['image'];
        
		  
		$companyList[]=array(

      
         "link"=>$link,
          "image"=>$image
      
				);
	
	}
	
	$response = array("response" => $companyList);
	echo json_encode($response);
}
 else  
{
	$response = array("response" => "failure");
	echo json_encode($response);
}

?>