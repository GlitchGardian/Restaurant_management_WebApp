<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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
    height: 520px;
    margin-top: 150px;
    background : linear-gradient(to bottom,transparent 0%,#ffffff5a 0%);
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.3), 0 6px 20px 0 rgba(237, 237, 237, 0.408);
}

.logo{
    margin: 30px 110px 0 110px;
}

.logo img{
    width: 180px;
}

h2{
    text-align: center;
    color: white;
    font-weight: 100;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
    margin-top: 40px;
    padding: 0px 40px;
    font-weight: 500;
}

.input {
    padding: 15px 10px;
    margin: 20px 40px;
    border: 1px solid;
    border-color: #ffffff;
    background: linear-gradient(to bottom,transparent 0%,#ffffff43 0%);  
    border-radius: 5px;
    font-size: medium;
}

::placeholder {
    color: #9c005d;
    opacity: 0.7; /* Firefox */
  }

.button {
    padding: 12px;
    margin-top: 50px;
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

    </style>
</head>
<body>
    <div class="box">
        <div class="logo">
            <img src="assets/logo_t.png" alt="logo">
        </div>
        <h2>Welcome Back</h2>
        <form id="loginForm" method="post">
            <!-- <label for="username">Username:</label> -->
            <input type="text" id="username" name="username" class="input" placeholder="Username / Email" required>

            <!-- <label for="password">Password:</label> -->
            <input type="password" id="password" name="password" class="input" placeholder="Password" required>

            <input type="submit" onclick="login()" name="login" id="login" value="Log In" class="button">
        </form>
    </div>
    
    <Script>
        function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username && password) {
        alert("Login successful!");
    } else {
        alert("Please enter both username and password.");
    }
}

    </Script>
</body>
</html>


<?php

if (isset($_POST['login'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "workeefy";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $errors = array();
    if (empty($username) || empty($password)) {
        $errors[] = "Please Enter Username & password";
    }
    else{
        $sql = "Select * From users where username = '$username' or email = '$username'";
        $select = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($select);
        if (password_verify($password,$row['password'])) {
            echo "loginup successful!";
            if($row['user_type'] == 'hire'){
                header('Location: hire.php');
            }
            else{
                header('Location: home.php');
            }
        } else {
            echo "<script>
                    function showAlert() {
                       alert('Password is Incorrect...');
                    }
                    showAlert();
                    </script>";
        }
    }
}
}
?>