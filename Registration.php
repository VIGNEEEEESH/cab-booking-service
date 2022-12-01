
<html>
    <head>
        <link rel="stylesheet" href="registration.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $("#login_details").hide(0000);
            $("#toggle").click(function(){
            $("#signup_details").toggle(000);
            $("#login_details").toggle(000);
            
        });
        

       
            
        });
    </script>
    <style>
        body{
    background-color:rgb(197, 192, 192);
  }
       
     

  #toggle {
            position : relative ;
            display : inline-block;
            width : 390px;
            height : 56px;
            background-color:lightcoral;
            border-radius: 200px;
            border: 2px solid gray;
            margin-top:20px;
            margin-left:27.5px;
            
        }

        #toggle:after {
            content: '';
            position: absolute;
            width: 190px;
            height: 50px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            border-bottom-left-radius: 25px;
            border-bottom-right-radius: 25px;
            background-color: gray;
            top: 1px;
            left: 1px;
            transition:  all 0.5s;
        }

        .checkbox:checked + #toggle::after {
            left :50.3%;
        }

        .checkbox:checked + #toggle {
            background-color: yellow;
        }

        .checkbox {
            display : none;
        }
        
  


    </style>  
    <script src="Registration.js"></script>  
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark  bg-danger">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Grandpa's trip</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
        </div> 
    </nav>
   
    
        <div id="main">
            <div id="flex1" style="background-color:coral;">
             
                <input type="checkbox" id="switch"
                            class="checkbox" />
                <label for="switch" id="toggle"> <h2 id="h2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log-in   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sign-up</h2>
        
        
                </label> 
                <br>
                <br>
                <div id="signup_details">
                <form action="insert.php" method="post">
                        <h5 class="h5">First Name<br>
                    <input type="text"  class="first_name" name="First_name" required></h5>
                    <h5 class="h5">Last Name<br>
                        <input type="text"  class="last_name" name="Last_name" required></h5>
                        <h5 class="h5">E-Mail<br>
                        <input type="text"  class="email" name="Email" required>
                        <h5 class="h5">Mobile No.<br>
                            <input type="text"  class="mobile" name="Mobile" required></h5>
                            <h5 class="h5">Address<br>
                                <input type="textarea"  class="address" name="Address1" required></h5>
                        <h5 class="h5">Create Password<br>
                            <input type="password"  id="create_password" name="Password1" required>
                            <h5>  <input type="checkbox" onclick="myFunction1()" id="checkbox2"> &nbsp; Show Password</h5>
                            <br>
                        <h5>ID proof<input type="file" required> <br></h5>
        
                        <input type="submit" id="submit" name="submit">
                
                </div>    
    </form>  <form action="login.php" method="post">
                <div id="login_details">
                    
                        <h5 class="h5">Name<br>
                    <input type="text"  class="name" name="name"></h5>
                    
                        <h5 class="h5">Password<br>
                        <input type="password"  id="password" name="password"></h5>
                        
                      <h5>  <input type="checkbox" onclick="myFunction()" id="checkbox1"> &nbsp; Show Password</h5>

                        
        
                        <input type="submit" id="submit" name="save">
                </form>
                </div>  
    </div>

               
      
    </div>

 <?php 

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="signup1";
    
    
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed" .$conn->connect_error);
    }
    
    /*$sql="CREATE DATABASE signup1";
    if($conn->query($sql)===TRUE){
        echo "Database created successfully";
    }else{
        echo "Error creating database:".$conn->error;
    }*/
    
    $sql="CREATE TABLE new_users1(
        ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        First_name varchar(30) NOT NULL,
        Last_name varchar(30) NOT NULL,
        Email varchar(100) NOT NULL,
        Mobile int ,
        Address1 varchar(100) NOT NULL,
        Password1 varchar(50) NOT NULL
        )";
    if($conn->query($sql)===TRUE){
        echo"table is created";
    }else{
        echo "error creating table";
    }

    


    
    $conn->close();
    
    

  



 ?>

   
        

         
        </body>
        </html>