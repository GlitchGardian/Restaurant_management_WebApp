<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
            background-image: url('assets/back2.jpeg');
            background-size: cover;
        }

        .box {
            width: 400px;
            margin-top: 100px;
            background: linear-gradient(to bottom, transparent 0%, #ffffff5a 0%);
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.3), 0 6px 20px 0 rgba(237, 237, 237, 0.408);
        }

        .logo {
            margin: 30px 110px 0 110px;
        }

        .logo img {
            width: 180px;
        }

        h2 {
            text-align: center;
            color: white;
            font-weight: 100;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .input {
            padding: 15px 10px;
            margin: 20px 40px;
            border: 1px solid;
            border-color: #ffffff;
            background: linear-gradient(to bottom, transparent 0%, #ffffff43 0%);
            border-radius: 5px;
            font-size: medium;
        }

        ::placeholder{
            color: #9c005d;
            opacity: 0.7;
        }

        .radio {
            display: flex;
            margin-left: 45px;
            font-size: larger;
            gap: 10px;
        }

        input[type=radio] {
            width: 18px;
            accent-color: #ff0099;
        }

        .button {
            padding: 12px;
            margin-top: 30px;
            margin-bottom: 30px;
            width: 150px;
            background-color: #ff0099;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: medium;
            cursor: pointer;
            align-self: center;
        }

        .button:hover {
            background-color: #7d004b;
        }


        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="logo">
            <img src="assets/logo_t.png" alt="logo">
        </div>
        <h2>Sign Up</h2>
        <form id="loginForm" method="post">
          

            <input type="text" id="username" name="username" class="input" placeholder="Username"
                required>

            <input type="text" id="email" name="email" class="input" placeholder="Email" required>

            <input type="password" id="password" name="password" class="input" placeholder="Password"
                required>

            <div class="radio">
                <input type="radio" name="type" id="work" value="work" checked>
                <p>Work</p>
                <input type="radio" name="type" id="hire" value="hire">
                <p>Hire</p>
            </div>

            <input type="submit" name="signup" id="signup" value="Sign Up" class="button">
        </form>
    </div>



</body>

</html>

<?php
    if (isset($_POST['signup'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "workeefy";
    
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $userType = isset($_POST["type"]) ? $_POST["type"] : "";
    
            $errors = array();
            $squery = "SELECT * FROM users WHERE username = '$username'";

            if (empty($username) || empty($email) || empty($password)) {
                $errors[] = "All fields are required.";
            }
            elseif (preg_match('/^[_@0-9]/', $username)) {
                $errors[] = "Username should not start with _, @, or a number.";
            }
            elseif (strlen($password) < 6 || strlen($password) > 12) {
                $errors[] = "Password length should be between 6 and 12 characters.";
            }
            elseif(mysqli_num_rows(mysqli_query($conn, $squery)) > 0) {
                echo "<script>
                    function showAlert() {
                       alert('Username is already exist...');
                    }
                    showAlert();
                    </script>";
            } 
            else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username, email, password, user_type) VALUES ('$username', '$email', '$hashed_password', '$userType')";
                mysqli_query($conn, $sql);
                header('Location: login.php');
                exit();
            }
    }
}
?>