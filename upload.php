<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$temp = explode(".", $_FILES["fileToUpload"]["name"]);
// $extension = end($temp);




// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $temp = explode(".",$_FILES["fileToUpload"]["name"]);
    $newfilename = date() . time() . '.' .end($temp);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/" . $newfilename);
        
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
}


//now make csv file
    $filename = "review.csv";
    $exists = (file_exists($filename));

    $handle = fopen($filename, 'a'); // 'a' means write only
    // $msg = "Thank you for signing up.\n";//EMail message
    $stringToAdd="";    //File into

    if (!$exists){
        foreach($_POST as $name => $value) {
            $stringToAdd.="$name,";
        }
        $stringToAdd.="\n";
        $new=False;
        fwrite($handle, $stringToAdd);
    }
    $stringToAdd="";
    //add subject and contents
    foreach($_POST as $name => $value) { 
        // print "$name : $value<br>";
        // $msg .="$name : $value\n";
        $stringToAdd.="$value,";
    }
    $stringToAdd.=$newfilename; //add filename in the last column
    $stringToAdd.="\n";

    fwrite($handle, $stringToAdd);
    //now close the file
    fclose($handle); 





?>