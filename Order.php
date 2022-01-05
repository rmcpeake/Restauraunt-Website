<?php

include '../dbConnection.php';


$name = $_POST["Name"];
$creditcard = $_POST["creditcard"];
$address = $_POST["Address"];

//insert cookie commands here.
setcookie("CookieName", $name, time() + (86400 * 30), "/");
setcookie("CookieAddress", $address, time() + (86400 * 30), "/");


$food = array();
$foodPrice = array();

if (isset($_POST["PepperoniPizza"])=="on"){
    $PPizza = "PepperoniPizza";
    $PPPrice = 10;
    array_push($food,$PPizza);
    array_push($foodPrice,$PPPrice);
}
if (isset($_POST["SupremePizza"])=="on"){
    $sPizza = "SupremePizza";
    $sPPrice = 15;
    array_push($food,$sPizza);
    array_push($foodPrice,$sPPrice);
}
if (isset($_POST["BreadSticks"])=="on"){
    $BreadSticks = "BreadSticks";
    $bSPrice = 6;
    array_push($food,$BreadSticks);
    array_push($foodPrice,$bSPrice);
}
if (isset($_POST["FilledBreadSticks"])=="on"){
    $fBSticks = "FilledBreadSticks";
    $fBSPrice = 8;
    array_push($food,$fBSticks);
    array_push($foodPrice,$fBSPrice);
}
if (isset($_POST["PepperoniCalzone"])=="on"){
    $pCalzone = "PepperoniCalzone";
    $pCPrice = 12;
    array_push($food,$pCalzone);
    array_push($foodPrice,$pCPrice);
}
if (isset($_POST["SupremeCalzone"])=="on"){
    $sCalzone = "SupremeCalzone";
    $sCPrice = 14;
    array_push($food,$sCalzone);
    array_push($foodPrice,$sCPrice);
}
if (isset($_POST["Mostaccioli"])=="on"){
    $mostaccioli = "Mostaccioli";
    $mPrice = 15;
    array_push($food,$mostaccioli);
    array_push($foodPrice,$mPrice);
}
if (isset($_POST["Lasagna"])=="on"){
    $lasagna = "Lasagna";
    $lPrice = 15;
    array_push($food,$lasagna);
    array_push($foodPrice,$lPrice);
}



$total=0;
for($i=0; $i<count($foodPrice); $i++){
    $total += $foodPrice[$i];
}
//convert array to string
$foodString= implode(", ",$food);
$foodPriceString = implode(", ",$foodPrice);

$query = "INSERT INTO orders(name,creditcard,address,food,prices,total) VALUES('$name','$creditcard','$address','$foodString','$foodPriceString','$total')";
$result = mysqli_query($conn,$query);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
    <link href="styles.css" rel="StyleSheet">
    <style>

        table {
            border: 1px #a39485 solid;
            font-size: .9em;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .25);
            width: 500px;
            height: 700px;
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
            background-color: grey;
            font-weight: bold;
            color: #fff;
        }

        td:hover {
            background-color: orange;
        }

        body{
            background-color: dimgrey;
        }
    </style>
</head>

<body>
    <div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="Menu.html">Menu</a></li>
            <li><a href="Order.html">Order</a></li>
            <li style="float:right"><a href="Contact.html">Contact</a></li>
        </ul>
    </div>

    <div>
        <table>
            <tr><th colspan="2">Order Confirmation</th></tr>
            <tr><td>Name: </td><td><?php echo $name; ?></td></tr>
            <tr><td>Address: </td><td><?php echo $address; ?></td></tr>
            <tr><td>Credit Card: </td><td><?php echo $creditcard; ?></td></tr>
            <tr><td>Food Ordered: </td><td><?php echo $foodString ?></td></tr>
            <tr><td>Corressponding Prices: </td><td><?php echo "$ " . $foodPriceString ?></td></tr>
            <tr><td>Total: </td><td><?php echo "$".$total; ?></td></tr>
        </table>
    </div>

</body>
</html>