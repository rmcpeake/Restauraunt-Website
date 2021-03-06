<!--<?php
    //setcookie("CookieName", NULL, time() + (86400 * 30), "/");
    //setcookie("CookieAddress", NULL, time() + (86400 * 30), "/");

?>-->

<head>
    <meta charset="UTF-8">
    <title>Order</title>
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
            background-color: #73685d;
            font-weight: bold;
            color: #fff;
        }

        td:hover {
            background-color: red;
        }

        .row {
            margin-left:-5px;
            margin-right:-5px;
        }
  
        .column {
            float: left;
            width: 50%;
            padding: 5px;
        }

        .row::after {
             content: "";
             clear: both;
             display: table;
        }
        * {
             box-sizing: border-box;
        }

        body{
            background-color: dimgrey;
        }

    </style>
</head>

<body >
    <div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="Menu.html">Menu</a></li>
            <li><a href="Order1.php">Order</a></li>
            <li style="float:right"><a href="Contact.html">Contact</a></li>
        </ul>
    </div>

    <div>
        <form method="post" action="Order.php">

        <div class="row">
        <div class="column">    
            <table>
                <tr>
                    <th>Dish</th>
                    <th>Price</th>
                    <th>Add Item</th>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#PepperoniPizza'">Pepperoni Pizza</td>
                    <td>$10.00</td>
                    <td><input type="checkbox" name="PepperoniPizza"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#SupremePizza'">Supreme Pizza</td>
                    <td>$15.00</td>
                    <td><input type="checkbox" name="SupremePizza"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#BreadSticks'">Bread Sticks</td>
                    <td>$6.00</td>
                    <td><input type="checkbox" name="BreadSticks"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#FilledBreadSticks'">Filled Bread Sticks</td>
                    <td>$8.00</td>
                    <td><input type="checkbox" name="FilledBreadSticks"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#PepperoniCalzone'">Pepperoni Calzone</td>
                    <td>$12.00</td>
                    <td><input type="checkbox" name="PepperoniCalzone"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#SupremeCalone'">Supreme Calzone</td>
                    <td>$14.00</td>
                    <td><input type="checkbox" name="SupremeCalone"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#Mostaccioli'">Mostaccioli</td>
                    <td>$15.00</td>
                    <td><input type="checkbox" name="Mostaccioli"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#Lasagna'">Lasagna</td>
                    <td>$15.00</td>
                    <td><input type="checkbox" name="Lasagna"></input></td>
                </tr>

            </table>
        </div>
        <div class="column" style=" float: right;">

            
            <table >
                <tr>
                    <th>Info</th>
                    <th>Text</th>
                </tr>
                <tr>
                    <td>Name</td>

                    <?php if(!isset($_COOKIE["CookieName"])){
                    print "<td><input type='textbox' name='Name' placeholder='John Doe'></input></td>";}
                    else{
                        $name = $_COOKIE["CookieName"];
                        print "<td><input type='textbox' name='Name' value='$name'></input></td>";
                    }

                    ?>
                </tr>
                <tr>
                    <td>Credit Card Number</td>
                    <td><input type="textbox" placeholder="1234 1234 1234 1234" name="creditcard"></input></td>
                </tr>
                <tr>
                    <td>Delivery Address</td>
                    
                    <?php if(!isset($_COOKIE["CookieAddress"])){
                    print "<td><input type='textbox' name='Address' placeholder='100 Main St, Ypsilanti, MI'></input></td>";}
                    else{
                        $Address = $_COOKIE["CookieAddress"];
                        print "<td><input type='textbox' name='Address' value='$Address'></input></td>";
                    }

                    ?>

                </tr>
                <tr>
                    <td><input type="reset" value="Clear"></td>
                    <td><input type="submit" value="Place Order"></td>
                </tr>


            </table>
        </div>
    </div>

        </form>
    </div>
</body>

</html>