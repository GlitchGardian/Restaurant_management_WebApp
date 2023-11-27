<?php
            // PHP code starts here
            $errors = array();

            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Connect to your database - replace these values with your actual database credentials
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "workeefy";

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Get form data
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $userType = isset($_POST["type"]) ? $_POST["type"] : ""; // Check if the radio button is set

                // Validate conditions
                if (empty($username) || empty($email) || empty($password)) {
                    $errors[] = "All fields are required.";
                } else {
                    if (preg_match('/^[_@0-9]/', $username)) {
                        $errors[] = "Username should not start with _, @, or a number.";
                    }

                    if (strlen($password) < 6 || strlen($password) > 12) {
                        $errors[] = "Password length should be between 6 and 12 characters.";
                    }
                }

                // If there are no errors, proceed to database insertion
                if (empty($errors)) {
                    // Hash the password before storing it in the database for security
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    // Insert data into the database
                    $sql = "INSERT INTO users (username, email, password, user_type) VALUES ('$username', '$email', '$hashed_password', '$userType')";

                    if (mysqli_query($conn, $sql)) {
                        echo "Signup successful!";
                    } else {
                        $errors[] = "Error: " . mysqli_error($conn);
                    }
                }
                header('Location: index.html');
            }
            // PHP code ends here

            // Display errors
            foreach ($errors as $error) {
                echo "<p class='error'>$error</p>";
            }
            
            ?>