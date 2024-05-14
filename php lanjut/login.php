<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        .error {
            color: red;
            font-size: 12px;
        }
    </style>

</head>
<body>
    <?php
    $name = $email = "";
    $nameErr = $emailErr = "";

    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    try {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["u"])) {
                throw new Exception("Masukkan username");
            } else {
                $name = bersihkan_input($_POST["u"]);
            }
            if (empty($_POST["p"])) {
                throw new Exception("Masukkan password");
            } else {
                $email = bersihkan_input($_POST["p"]);
            }

            // Simulasi autentikasi (gantilah dengan autentikasi yang sesuai)
            if ($name === "admin" && $email === "wisnubaik") {
                // Set session variables
                session_start();
                $_SESSION["username"] = $name;
                // Redirect to welcome page
                header("Location: welcome.php");
                exit();
            } else {
                throw new Exception("Username atau password salah");
            }
        }
    } catch (Exception $e) {
        // Tangkap pengecualian dan atur pesan kesalahan
        if (strpos($e->getMessage(), "username") !== false) {
            $nameErr = $e->getMessage();
        }
        if (strpos($e->getMessage(), "password") !== false) {
            $emailErr = $e->getMessage();
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="u">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        <input type="submit" value="Login">
    </form>
    
</body>
</html>
