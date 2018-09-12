<?php

require_once('../../private/initialize.php'); 

$ds= DIRECTORY_SEPARATOR;  //1
 
$storeFolder = '../img/gallery';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5

    $file_path = $storeFolder.'/'.$_FILES['file']['name'];
 
    move_uploaded_file($tempFile,$targetFile); //6
     
     $query = mysqli_query($con, "INSERT INTO gallery(file_path) VALUES('$file_path')");
     if (!$query) {
     	echo mysqli_error($con);
     }
}
?> 