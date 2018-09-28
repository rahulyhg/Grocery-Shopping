<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
             .header{
                padding: 16px;
                text-align:center;
                background-color: #00d3ff;
                color: white;
                font-size: 30px;
                font-weight: 600;
            }
       
        form{
                padding: 10px;
                margin-top: 5px;
                margin-left: 15px;
            }
            th,td{
                padding:10px;
                border:1px solid black;
                 
            }
            #table1{
                margin-left:25px;
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <div class="header">
            Updation of products
        </div>
        <form id='form1' action = "UpdateDelete.php" method="POST">
            <table id='table_form'>
                <tr>
                    <td>ID </td>  <td><input type="text" name="pid" id="pid" > </td>
                </tr>
                <tr>
                    <td>Name </td>  <td><input type="text" name ="pname" id ="pname" > </td>
                </tr>
                <tr>
                    <td>Category </td> <td><input type="text" name="categoryname" id="categoryname"> </td>
                </tr>
                <tr>
                    <td>Price </td> <td><input type="text" name="pcost" id="pcost"> </td>
                </tr>
                <tr>
                    <td>Quantity </td> <td><input type="text" name="pquantity" id="pquantity"> </td>
                </tr>
                <tr>
                    <td> </td> <td><input type="submit" name="Update" value="Update"> <input type="Submit" name="Delete" value="Delete" </td>
                </tr>
            </table>
        </form>
        
        <?php
            $pid = $pname = $categoryname = $pcost = $pquantity = "";
            $received = NULL;
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "miniproject";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * from product";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {?>
                <table id='table1' >
                
  
            <tr>
            <th><?php echo "product Id"?></th>
            <th><?php echo "product_name"?> </th>
            <th><?php echo "product_category"?></th>
            <th><?php echo "product_price"?></th>
    
            <th><?php echo "product_qty"?></th>
    
            </tr>
                <?php
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["pid"] . "</td>";
                    echo "<td>" . $row["pname"] . "</td>";
                    echo "<td>" . $row["categoryname"] . "</td>";
                    echo "<td>" . $row["pcost"] . "</td>";
                    echo "<td>" . $row["pquantity"] . "</td>";
                    echo "</tr>";
                }?>
                </table>
        <?php
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>        
        
        <script type='text/javascript'>
            let table = document.getElementById('table1'), iIndex;
            for(let i = 0; i < table.rows.length; i++){
                table.rows[i].onclick = function() {
                    rIndex = this.rowIndex;
                    document.getElementById('pid').value = this.cells[0].innerHTML;
                    document.getElementById('pname').value = this.cells[1].innerHTML;
                    document.getElementById('categoryname').value = this.cells[2].innerHTML;
                    document.getElementById('pcost').value = this.cells[3].innerHTML;
                    document.getElementById('pquantity').value = this.cells[4].innerHTML;
                }
            }
        </script>
    </body>
</html>