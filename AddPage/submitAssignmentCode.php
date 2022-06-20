<?php
$filepath = "uploads/" . basename($_FILES["file"]["name"]);
$uploaded = 1;
$file = pathinfo($filepath,PATHINFO_EXTENSION);


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $fileType = array('docx', 'txt' , 'pdf');
    if(in_array($fileType, $fileType)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
           header('../AddPage/submitCode.php');        
        }
    }
}



// Check if file already exists
if (file_exists($filepath)) {
  echo "File already uploaded";
  $uploaded = 0;
}
?>