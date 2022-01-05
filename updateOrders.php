<?php 
include '../dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Employee Login</title>
    <link href="styles.css" rel="StyleSheet">
    <style>
        table {
            border: 1px #a39485 solid;
            font-size: 1.5em;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .25);
            width: 400px;
            height: 200px;
            border-collapse: collapse;
            border-radius: 5px;
            overflow: hidden;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            margin-top: 150px;
        }

        td,
        th {
            padding: 1em .5em;
            vertical-align: middle;
        }

        td {
            border-bottom: 1px solid rgba(0, 0, 0, .1);
            background: #fff;
            color: black;
        }

        tr {
            background-color: #73685d;
            font-weight: bold;
            color: #fff;
        }

        td:hover {
            background-color: red;
        }
    </style>
</head>

<body style="background-color: dimgrey;">
        <div style="margin: auto;">
            <h2 class="a">Orders</h2>
        </div>
    <?php
         $orderID = $_GET["orderID"];

         //$query = "DELETE FROM orders where  =$row[""] ;
         //$result = mysqli_query($conn, $query);

         $query = "SELECT * FROM orders";

         $result = mysqli_query($conn, $query);
 
         $num_rows = mysqli_num_rows($result);
         print "<table>";
         print "<tr><th>ID</th><th>Name</th><th>Credit Card</th><th>Address</th><th>Food Order</th><th>Prices</th><th>Total</th></tr>";
         for ($i = 0; $i < $num_rows; $i++) {
             $row = mysqli_fetch_assoc($result);
             $id = $i + 1;

             $name = $row["name"];
             $creditcard = $row["creditcard"];
             $address = $row["address"];
             $food = $row["food"];
             $prices = $row["prices"];
             $total = $row["total"];
            
            
            print "<tr><td>";
            print "#$id</td><td>";
            print "$name</td><td>";
            print "$creditcard</td><td>";
            print "$address</td><td>";
            print "$food</td><td>";
            print "$prices</td><td>";
            print "$total";
            print "</td></tr>";
         }
         print "</table>";
    
    ?>
     <br>

<form method="get" action="updateOrders.php" style="margin-left: 45%;">
    <input type="number" size="10" , maxlength="3" , name="orderID"></input>
    <input type="submit" value="Update"></input>
</form>
    


</body>

</html>