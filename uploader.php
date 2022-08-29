<?php
// Build the file location/path
$destination = "C:/PDC10/quiambao.local/Lab2-FileUploader/uploads/" . $_FILES['userfile']['name'];

// temporary path
$tmp = $_FILES['userfile']['tmp_name'];

//verify if the files is uploaded or not 
if (is_uploaded_file($tmp)) {

  // move the file to target destination
  if (move_uploaded_file($tmp, $destination)) {
      echo 'File has been successfully uploaded';
      exit();
  }
}
echo 'Unable to upload file';