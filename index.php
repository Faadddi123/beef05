<?php
    $servername = 'localhost';
    $user = 'root';
    $pass = '123';
    $dbname = 'ELECTRONACER';

    // Create connection
    $conn = new mysqli($servername, $user, $pass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Close the connection
    $conn->close();
    session_start();


    // Create connection
    $conn = new mysqli($servername, $user, $pass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Login successful
            $_SESSION['username'] = $username;
            header("Location: page.php");
            exit();
        } else {
            // Login failed
            $error = "Invalid username or password";
        }
    }

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    
    <section>
        <form  method="post">
            <div class="mini_table">
                <h1> Log in</h1>
                <div>
                    <div>
                        Nom
                    </div>
                    <div>
                        <input type="username" name="username">
                    </div>
                </div>
                <div>
                    <div>
                        Password
                    </div>
                    <div>
                        <input type="password" name="password">
                    </div>
                </div>
                <div>
                    <a>
                        <button name="lpotona">log in</button>
                    </a>


                </div>
            </div>


        </form>


    </section>
</body>

</html>