<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pid = clean_input($_POST["pid"]);
        $pname = clean_input($_POST["pname"]);
        $categoryname = clean_input($_POST["categoryname"]);
        $pcost = clean_input($_POST["pcost"]);
        $pquantity = clean_input($_POST["pquantity"]);
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "miniproject";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        if(isset($_POST['Update'])) {
            $stmt = $conn->prepare("UPDATE product set pname = ?, categoryname = ?, pcost = ?, pquantity= ? where pid = ?");
            $stmt->bind_param("ssiii", $pname,$categoryname, $pcost, $pquantity, $pid);    
            $stmt->execute();
        } else if (isset($_POST['Delete'])) {
            $stmt = $conn->prepare("DELETE from product where pid = ?");
            $stmt->bind_param("i", $pid);    
            $stmt->execute();
        } else{
            echo 'Something went wrong';
        }
        $conn->close();        
        header("location: ModifyTable.php"); 
    }
    
    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>