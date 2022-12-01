 <?php
      $servername="localhost";
$username="root";
$password="";
$dbname="signup";
      $conn=new mysqli($servername,$username,$password,$dbname) or die("connection failed");
if(!empty($_POST['save']))
{
    $firstname=$_POST['name'];
    $pass=$_POST['password'];
    $query="select * from new_users where First_name='$firstname' and Password1='$pass'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        echo "Login Succesful";
        header("location: ./home.html");
    }else{
        echo "Incorrect password/username";
    }
}

?>