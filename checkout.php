<!DOCTYPE html>
<html lang="en">
<head>
   
      
  <title>checkout</title>
  <h1>Billing Address</h1>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script type='text/javascript'>
            function validation()
            {
                if (document.checkout.name.value == "")
                {
                    alert("Name should not be empty")
                    return false;
                }
                if (document.checkout.email.value == "")
                {
                    alert("Email should not be empty")
                    return false;
                }
                if (document.checkout.address.value == "")
                {
                    alert("Address should not be empty")
                    return false;
                }
                if (document.checkout.state.value == "")
                {
                    alert("State should not be empty")
                    return false;
                }
                if (document.checkout.city.value == "")
                {
                    alert("City should not be empty")
                    return false;
                }
                if (document.checkout.pincode.value == "")
                {
                    alert("Pincode should not be empty")
                    return false;
                }
                return true;
            }       
        </script>
</head>
<body class="blue-background white-text">


  <form name='checkout' method="post" action="confirm.php" onsubmit="return validation()">
            <table>
                <tr>
                    <td>Name </td> <td> <input type="text" style="width:200px" class="form-control" placeholder="Parth" name="name"> </td>
                </tr>
                <tr>
                    <td>Email </td> <td><input type="email" style="width:200px" class="form-control" placeholder="parth123@gmail.com" name="email"> </td>
                </tr>
                <tr>
                    <td>Address </td> <td> <input type="text" style="width:200px" class="form-control" placeholder="B/22 Ram Street" name="address"> </td>
                </tr>
                <tr>
                    <td>State</td> <td> <input type="text" style="width:200px" class="form-control" placeholder="Maharashtra" name="state"> </td>
                </tr>
                <tr>
                    <td>City </td> <td> <input type="text" style="width:200px" class="form-control" placeholder="Mumbai" name="city"> </td>
                </tr>
                <tr>
                    <td>Pincode </td> <td> <input type="text" style="width:200px" class="form-control" placeholder="400001" name="pincode"> </td>
                </tr>
                <tr>
                    <td> <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing </td>
                </tr>
                
                               
            </table>
      <h1>Payment</h1> 
      
 
  <input type="radio" name="tip3" value="3" checked /> Cash On Delivery
  <input type="radio" name="tip3" value="4" /> Paytm

      <table>
          
          <tr>                    
                    <td></td>
                    <td><input type="submit" name="checkout"  value="Continue to Checkout"> </td>
                </tr> 
          
      </table>
        </form>