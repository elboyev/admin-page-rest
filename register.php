<?php
include 'connection.php';

        $name= null;
        $email = null; 
        $password = null; 




if($_SERVER['REQUEST_METHOD']=='POST'){

	$name = $_POST['name'];
	$email= $_POST['email'];
    $password= $_POST['password'];

	

}

if($_SERVER['REQUEST_METHOD']=='GET'){


    $name = $_GET['name'];
    $email= $_GET['email'];
    $password= $_GET['password'];
       
}



$sql= "INSERT INTO `user_info`( `name`, `email`, `password`) VALUES (
		'$name', 
        '$email', 
        '$password'
        
)";


      $result=mysqli_query($conn,$sql);

if($result)
    {
    
    $response = array("response"=>"success");
    	echo json_encode($response);
    }
else
    {
    	$response = array("response"=>"failure");
    	echo json_encode($response);
    }

?>
