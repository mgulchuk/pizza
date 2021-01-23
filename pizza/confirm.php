<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thank you for your order!</h1>
    <pre>
    <?php
    /*
        var_dump($_POST);

            array(7) {
      ["firstName"]=>
      string(4) "Mike"
      ["lastName"]=>
      string(7) "Gulchuk"
      ["address"]=>
      string(14) "123 2nd ave sw"
      ["method"]=>
      string(6) "pickup"
      ["toppings"]=>
      array(2) {
        [0]=>
        string(6) "olives"
        [1]=>
        string(9) "anchovies"
      }
      ["size"]=>
      string(6) "medium"
      ["terms"]=>
      string(2) "on"
    }
    */

    $isValid = true;

    if(validName($_POST['firstName']))
        $fname = $_POST['firstName'];
    else {
        echo "<p>First name is required</p>";
        $isValid = false;
    }

    if(validName($_POST['firstLast']))
        $lname = $_POST['firstLast'];
    else {
        echo "<p>Last name is required</p>";
        $isValid = false;
    }

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $address = $_POST{'address'};
    $toppings = $_POST{'toppings'};
    $toppingsString = implode(", ", $toppings);
    $size = $_POST{'size'};

    echo "<h1>Thank you for your order, $fname!</h1>";
    echo "<h2>Order Summary</h2>";
    echo "<p>Name: $fname $lname</p>";
    echo "<p>Address: $address</p>";
    echo "<p>Toppings: $toppingsString</p>";
    echo "<p>Pizza size: $size</p>";

    //Send email

    $formAddress = "poppa@gmail.com";
    $toAddress = "mgulchuk@mail.greenriver.edu";
    $subject = "Order Confirmation";
    $headers = "From: Poppa's Pizza <$formAddress>";
    $message = "Your order has been confirmed";
    $message .= "Name: $fname $lname\r\n";
    $message .= "Address: $address\r\n";
    mail($toAddress, $subject, $message, $headers);


    ?>
    </pre>
</body>
</html>