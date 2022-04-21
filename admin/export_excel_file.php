<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'app_data');  
$sql = "SELECT * FROM `pc_posts`";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "Post ID" . "\t" . "Category Id" . "\t" . "Post Title" . "\t" . "Post Description" . "\t" . "Post Link" . "\t" . "Post Image" . "\t" .  "Created At"  . "\t" . "Flag" . "\t"  ;  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Post_Details.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?>