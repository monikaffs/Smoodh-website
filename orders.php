<?php 

if(isset($_GET['submit'])){
    $pname = $_GET['Pname'];
    $price = $_GET['price'];
}
//we get the info of the product 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>


<style>
    
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.form-container {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-container h3 {
    margin-top: 0;
    margin-bottom: 20px;
    text-align: center;
    color: #333;
}

/* Error message styles */
.error-msg {
    display: block;
    margin-bottom: 10px;
    color: #ff0000;
}

/* Input styles */
input[type="email"],
input[type="password"],
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    text-align: center;
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}


</style>

    <h1>Order</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    Name: <input type="text" name="name" >
                </td>
            </tr>
            <tr>
                <td>
                    Phone Number: <input type="text" name="Phone_Number" >
                </td>
            </tr>
            <tr> 
                <!-- user ka data form ke thru le rahe hai -->
                <td>
                    Address: <textarea name="Address" cols="10" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Product Name: <?php echo $pname;?>
                </td>
            </tr>
            <tr>
                <td>
                    Price: <?php echo $price;?>
                </td>
            </tr>
            <tr>
                <td>
                    Quantity: <input type="number" name="qty">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="Product_Name" value="<?php echo $pname;?>">
                    <input type="hidden" name="Price" value="<?php echo $price;?>">
                    <input type="submit" value="Submit" name="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>


<?php

$conn = mysqli_connect('localhost','root');
$db_select = mysqli_select_db($conn, "user_db");

session_start();

if(isset($_POST['submit'])){
//in this we store the data of the user as well as extra info
   $name = $_POST['name'];
   $Phone_Number = $_POST['Phone_Number'];
   $Address = $_POST['Address'];
   $pname = $_POST['Product_Name'];
   $price = $_POST['Price'];
   $qty = $_POST['qty'];
   $total = $qty * $price;

   $sql1 = "SELECT * FROM user_form WHERE `name` = '$name' "; // to check whether user exist in database or not 
    $res1 = mysqli_query($conn, $sql1); // query execution 
    if (!$res1) {
        echo "Error: " . mysqli_error($conn);
        exit;
     }
       
   
        $sql2 = "SELECT * FROM product WHERE P_name = '$pname' "; // fetching product details 
        $res2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($res2);  //fetch data in associative array format
    
        $pid = $row2['P_id'];
    
        $sql3 = "INSERT INTO orders SET `Name`='$name', Phone_Number='$Phone_Number', `Address`= '$Address', Product_Name='$pname', Product_ID=$pid, Price=$price, total=$total";
      
        $res = mysqli_query($conn, $sql3);  // this function is used for executing the query , then inserting in order table 
      
        if($res)
        {
            echo "Successfull";
        }else
        {
            echo "error";
        }
    }

?>
