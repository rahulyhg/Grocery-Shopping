<?php
    
        
    
    $name = $uname= $mobile_no = $address = $email = $Password = "";
    $received = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
        $name = clean_input($_POST["name"]);
        $uname= clean_input($_POST["uname"]);
        $mobile_no = clean_input($_POST["mobile_no"]);
        $address = clean_input($_POST["address"]);
        $email = clean_input($_POST["email"]);
        $Password = clean_input($_POST["Password"]);
        
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "miniproject";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "connection successful";
        if(isset($_POST["submit"]))
        {
       
        $stmt = $conn->prepare("INSERT INTO signup (name,uname,mobile_no,address,email,Password) VALUES ( ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisss", $name ,$uname, $mobile_no, $address, $email, $Password);    
        $stmt->execute();
        $stmt->close();
        
        echo "<script type='text/javascript'> window.alert('Record Inserted Successfully') </script>";
        header("location: login.php"); 
        
        }
        
}

     
   
    
        
            
    
        $conn->close();
     function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
        }
?>
    