<!DOCTYPE html>
<html>
<head>
    
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.bg-img {
    /* The image used */
    background-image: url("logo.jpg");

    min-height: 750px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

/* Add styles to the form container */
.container {
    position: Centered;
    right: 0;
    margin: 50px;
    max-width: 300px;
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 10px;
    border: none;
    width: 40%;
    opacity: 0.9;
}
.btn {border-radius: 12px;}

.btn:hover {
    background-color: #e7e7e7;
    color: white;
}
.btn:hover {
    opacity: 1;
    
}
@media (max-width: 600px) {  
                .col1, .col2 {width:100%;
                    font-size:1.8rem;} /*1rem = 16px*/
                }
 
                @media screen and (min-width:900px){
                body{
                        font-size:1.6rem;
                        center:50%
                    }
                }
                .col1{
                    float:left;
                    width:25%
                }
                .col2{
                    float:left;
                }
                
           
</style>
</head>
<body>
<center>
<h2></h2>
<div class="bg-img">
    
    <?php
        session_start();
        if(isset($_SESSION['user'])){
            header("location: http://localhost/miniproject/purchase.php"); 
        }
    ?>
    
    <form name = "login" method="post" action="checklogin.php" onsubmit="return validateForm()" class="container">
    <h1>Login</h1>
    <table>

        <tr>
            <th class="col1">Username </th> <td class="col2"> <input type="text" placeholder="Enter Username" class="form-control" name="uname"> </td>
        </tr>
       <!-- </tr><label for="uname"><b>UserName</b></label>
    <input type="text" placeholder="Enter Username" name="uname" >-->
       
       <tr>
            <th class="col1">Password </th> <td class="col2"> <input type="password" placeholder="Enter password" class="form-control" name="Password"> </td>
        </tr>

   <!-- <label for="Password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" >-->

   <!-- <label>
    <input type="checkbox" checked="checked" name="remember me" style="margin-bottom:15px" >Remember Me
    </label>-->
    
   <tr>
       <th class="col1"
   </th>
   <td class="col2"><button type="submit" name="submit">Login</button> </td>
   </tr>
    <!--<button type="submit" class="btn">Login</button>-->
    
  </form>
</div>

</body>
</html>