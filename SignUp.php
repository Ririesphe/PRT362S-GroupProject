<?php
include("database.php");
?>
<!------------------------------------------------------------------------------>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="SignUp.css">
</head>

<body>

    <main>

        <div style="text-align: center;">
            <img src="pic/Logo2.1.jpg" alt="img" id="img">
        </div>

        <br>
        <div id="box1">Sign Up</div>
        <br>
        <!--// (htmlspecialchars) is a filter becoz ($_SERVER["PHP_SELF"]) id vulnerable cross-site scripts-->
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">

            <br>
            <label id="t" for="name">Name And Surname: </label>
            <br>
            <input type="text" id="name" name="name" placeholder="SpongeBob SquarePants" required>
            <br>

            <br>
            <label id="t" for="email">Email Address: </label>
            <br>
            <input type="email" id="email" name="email" placeholder="sbsp@gmail.com" required>
            <br>

            <br>
            <label id="t" for="phone">Phone Number: </label>
            <br>
            <input type="tel" id="phone" name="phone" placeholder="1234567890"  minlength="10" maxlength="10" required>
            <br>
            
            <br>
            <label id="t" for="address">Address: </label>
            <br>
            <input type="text"" id="address" name="address" placeholder="124 Conch Street, Bikini Bottom" required>
            <br>

            <br>
            <label id="t" for="password">Password: </label>
            <br>
            <input type="password" id="password" name="password" minlength="6" maxlength="16" required>
            <br>

            <br>
            <div style="text-align: center;">
                <input type="reset" id="submit">
            </div>

            <br>
            <div style="text-align: center;">
                <input type="submit" id="submit" name="submit">
            </div>

            </div>
            <a href="Login.php" id="sign">Log In</a>
        </form>

        <br>

    </main>

</body>

</html>

<!------------------------------------------------------------------------------>
<?php
// to access the sever using the super global variable($_SERVER)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // this filters the input incase of malicious software
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);


    // for security it encryps the password
    $hash1 = password_hash($password, PASSWORD_DEFAULT);
    //sql query/ how to add to the table
    $sql = "INSERT INTO customer (name, email, address, phone, password)
                    VALUES ('$name','$email','$address','$phone','$hash1')";

    mysqli_query($conne, $sql);
    header("Location: Login.php");
    //echo "Successfully added to database👌";

}
mysqli_close($conne);
?>