<?php
$fileName=$_FILES["file1"]["name"];
$fileTmpLoc=$_FILES["file1"]["tmp_name"];
$fileType=$_FILES['file1']['type'];
$fileSize=$_FILES['file1']['size'];
$fileErrorMsg=$_FILES['file1']['error'];
if(!$fileTmpLoc){
    echo "ERROR";
    exit();
}
if(move_uploaded_file($fileTmpLoc,"uploads/".$fileName)){
    echo "Upload is complete";
}
else{
    echo "upload failed";
}
?>