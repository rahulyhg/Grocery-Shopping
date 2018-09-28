<?php
    
        
    
    $pid = $pname = $categoryname = $pcost = $pquantity = "";
    $received = NULL;
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
        echo "connection successful";
        if(isset($_POST["submit1"]))
        {
       
        $stmt = $conn->prepare("INSERT INTO product (pid, pname, categoryname,pcost,pquantity) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issii",$pid, $pname, $categoryname, $pcost,$pquantity );    
        $stmt->execute();
        $stmt->close();
        
        echo "<script type='text/javascript'> window.alert('Record Inserted Successfully') </script>";
        header("location: productdet.html"); 
        
        }
        if(isset($_POST["submit2"]))
{
    $res=mysqli_query($conn,"select * from product");
echo "<table border=1>";
  
    echo "<tr>";
    echo "<th>"; echo "product_name"; echo "</th>";
    echo "<th>"; echo "product_price"; echo "</th>";
    echo "<th>"; echo "product_qty"; echo "</th>";
    
    echo "<th>"; echo "product_category"; echo "</th>";
    
    echo "</tr>";
       
    while($row= mysqli_fetch_array($res))
    {
            echo "<tr>";
            echo "<td>"; echo $row["pname"]; echo "</td>";
            echo "<td>"; echo $row["pcost"]; echo "</td>";
            echo "<td>"; echo $row["pquantity"]; echo "</td>";
            
            echo "<td>"; echo $row["categoryname"]; echo "</td>";
            
            echo"</tr>";
        
    }        
    
            
    echo"</table>";
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
    