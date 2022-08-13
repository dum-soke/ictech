<?php


$date1 = date("Ymd_His");
$numrand = (mt_rand());
/* Get the name of the uploaded file */
$upload = $_FILES['file']['name'];
$typefile = strrchr($upload,".");
$path = $_POST['path'];
$location="uploads/".$path."/";

$newname = $date1.$typefile;
//$newname = $numrand.$date1.$typefile;
if (!is_dir($location)) {
    mkdir($location, 0755, true);
}

$path_copy=$location.$newname;
if (move_uploaded_file($_FILES['file']['tmp_name'],$path_copy)) { 
    header('Content-Type: application/json'); 
    echo json_encode($newname);
} else { 
  echo 'Failure'; 
}

//Display 'data'.



?>