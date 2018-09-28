<?php
//echo "<script> window.alert('Hello'); </script>";
        
    session_start();
    if(isset($_SESSION['signup'])){
        header("location: http://localhost/miniproject/login.php"); 
    }
    $uname = $Password= "";
    $received = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = clean_input($_POST["uname"]);
        $Password = clean_input($_POST["Password"]);
                
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "miniproject";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        
        $sql = "SELECT Password from signup where uname  ='" .$uname. "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $pwd = $row['Password'];
       // echo 'Password from Database: ' . $pwd . '<br> Entered Password: ' . $Password;
        if (strcmp($pwd, $Password) == 0){
            echo 'Login Successful';
            $_SESSION['uname']=$uname;
            echo $_SESSION['uname'];
            header("location: http://localhost/miniproject/purchase.php"); 
        }else{
            header("location: http://localhost/miniproject/login.php"); 
        }
        
        $conn->close();
    }

    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>