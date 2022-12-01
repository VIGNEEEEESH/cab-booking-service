<?php
$First_name=$_POST['First_name'];
$Last_name=$_POST['Last_name'];
$Email=$_POST['Email'];
$Mobile=$_POST['Mobile'];
$Address1=$_POST['Address1'];
$Password1=$_POST['Password1'];


$servername="localhost";
$username="root";
$password="";
$dbname="signup1";

$conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die('Connect Error' .$conn->connect_error);
    }else{
      $stmt=$conn->prepare("INSERT INTO new_users(First_name, Last_name, Email, Mobile, Address1, Password1) values(?,?,?,?,?,?)");
      $stmt->bind_param("sssiss",$First_name, $Last_name, $Email, $Mobile, $Address1, $Password1);
    $stmt->execute();
    echo"registration succesful";
    $stmt->close();
    $conn->close();
    }

    if(isset($_POST['submit'])){
        $fileName=$_FILES['file']['name'];
        $fileTmpName=$_FILES['file']['tmp_name'];
        $fileSize=$_FILES['file']['size'];
        $fileError=$_FILES['file']['error'];
        $fileType=$_FILES['file']['type'];
      
        $fileExt=explode('.',$fileName);
        $fileActualExt= strtolower(end($fileExt));
      
        $allowed= array('png');
      
        if(in_array($fileActualExt, $allowed)){
          if($fileError===0){
              if($fileSize <1000000){
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination='Project'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                header("Location: Registration.php?uploadsuccess");
              }else{
                echo "file size shouldnt be more than 1GB";
              }
          }else{
            echo "error uploading the file";
          }
        }else{
          echo "You cannot upload the files of this type";
        }
      $conn->close;
      }
      

header("location: ./home.html");

?>