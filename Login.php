<?php
include("database.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <main>
        <div style="text-align: center;">
            <img src="pic/Logo2.1.jpg" alt="img" id="img">
        </div>
        <form action="Login.php" method="POST"><!--the action sends the info to the php page which is this coz i didn't want to make a extra file-->
            <label id="t" for="email">Email Address: </label>
            <br>
            <input type="email" id="email" name="email" placeholder="sbsp@gmail.com" required>
            <br>
            <br>
            <label id="t" password">Password: </label>
            <br>
            <input type="password" id="password" name="password" minlength="6" maxlength="16" required>
            <br>
            <br>
            <div style="text-align: center;">
                <input type="submit" id="submit" value="Login">
            </div>
        </form>

        <?php
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the user input
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Create a prepared statement
            $stmt = $conne->prepare("SELECT * FROM customer WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if the user exists
            if ($result->num_rows > 0) {
                $user_data = $result->fetch_assoc();

                // Verify the password
                if (password_verify($password, $user_data['password'])) {
                    // we giving the ID a global varible to be used on multiple sights
                    session_start(); // Start the session
                    $_SESSION["email"] = $email; // Set the ID as a session variable

                    header("Location: link.php"); // If we abbel to log in sends us to Ticket page
                    exit;
                } else {
                    echo "Invalid password" . "<br>" . "<br>";
                    echo "";
                }
            } else {
                echo "Username not found" . "<br>" . "<br>";
                echo "";
            }
        }
        // retrieve the data that we are looking for if its true and see if its true
        /*
        $ID = $_POST['id'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM student WHERE id = '$ID'";
        $result = mysqli_query($conne, $sql);
        if (mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        if (password_verify($password, $user_data['password'])) {
        // Login successful, redirect to a protected page
        //header("Location: protected_page.php");
        exit;
        } else {
        echo "Invalid password";
        }
        } else {
        echo "Username not found";
        }
        */
        ?>
        <a href="SignUp.php" id="sign">Sign Up</a>
        <br>
        <br>
        <a href="mailto:test@fake.com" title="info@nsfas.org.za" id="sign" >Forgot Password</a>

    </main>

</body>

</html>
<?php
mysqli_close($conne);
?>