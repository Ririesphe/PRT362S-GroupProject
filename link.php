<?php
include("database.php");
session_start();

//echo "The session ID: ". $_SESSION["id"] . "<br>";
$loggedID =  $_SESSION["email"];
$sql = "SELECT * FROM customer WHERE email = '$loggedID'";
$result = mysqli_query($conne, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        //echo "Name: " . $row["name"] . "<br>";
        $_SESSION["name"] = $row["name"];

        //echo "Email: " . $row["email"]. "<br>";
        $_SESSION["email"] = $row["email"];

        //echo "Address: " . $row["email"]. "<br>";
        $_SESSION["address"] = $row["address"];

        //echo "Phone Number: " . $row["phone"] . "<br>";
        $_SESSION["phone"] = $row["phone"];
    }
} else {
    echo "No results found";
}

mysqli_close($conne);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="link.css">
</head>
<title>Document</title>
</head>

<body>
    <main>
        <div style="text-align: center;">
            <h1 id="t" style="text-align: center;">Welcome <?php echo $_SESSION["name"] ?></h1>
            <p id="t" style="text-align: center;">Login successful</p>
            <button><a href="TicketPage.php" class="button">CLick to continue</a></button>
        </div>
    </main>
</body>

</html>