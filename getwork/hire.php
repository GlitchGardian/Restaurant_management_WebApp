<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire</title>
    <style>
        body{
    background: linear-gradient(to top, #ffffff 70% ,  #db0084 70%);
    height: 175vh;
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.box1{
    width: 640px;
    margin:  0 auto;
    padding-top: 90px;
}

.container{
    max-width: 600px;
    width: 100%;
    padding-inline: 20px;
}

.headings h1{
    color: white;
}

.headings p{
    color: white;
}

.fill-details{
    background-color: white;
    width: 100%;
    height: 125vh;
    border: 0.5px rgb(134, 134, 134) solid;
    box-shadow: 0 4px 8px 0 rgba(41, 41, 41, 0.3), 0 6px 20px 0 rgba(63, 63, 63, 0.408);
    margin-top: 30px;
}

.head{
    color: #66848e;
}

hr{
    border: 0.5px solid #66848e;
}

input{
    padding: 15px 10px;
    margin: 20px 0;
    border: 1px solid;
    border-radius: 5px;
    font-size: medium;
}
select{
    padding: 15px 10px;
    margin: 20px 0;
    border: 1px solid;
    border-radius: 5px;
    font-size: medium;
}

.fullbox{
    width: 100%;
}

.halfbox{
    width: 47%;
}

.space{
    margin-left: 20px;
}

.center{
    justify-content: center;
    display: flex;
}

.submit{
    padding: 15px 50px;
    background-color: #db0084;
    color: white;
    font-size: large;
    cursor: pointer;
    margin-top: 40px;

}

.submit:hover{
    background-color: #96025b;
}
    </style>
</head>
<body>
    <div class="box1">
        <div class="container">
            <div class="headings">
                <img src="assets/logo_white_t.png" alt="logo" width="130px">
                <h1>Tell us what you need</h1>
                <p>Contect with staff fast and hire for only hours when you need them. Also give a review according their work.</p>
            </div>
        </div>
        <div class="fill-details">
            <div class="container">
                <h2 class="head">Details About Work</h2>
                <hr>
                <br>
                <form method="post">
                    <input type="text" name="name" id="name" placeholder="Enter Your Restaurant Name" required class="fullbox">
                    <input type="text" name="owner_name" id="woner_name" placeholder="Enter Your Name" required class="fullbox">
                    <input type="text" name="work_info" id="work_info" placeholder="Enter Your Work Details" required class="fullbox">
                    <input type="text" name="address" id="address" placeholder="Enter Your address please" required class="fullbox">
                    <input type="text" name="contect" id="contect" placeholder="Enter Your Contect Number" required class="halfbox"> 
                    <select name="select" id="select" class="halfbox space">
                    <option vaule="Kaliyabid">Kaliyabid</option>
                    <option vaule="Bhavnagar City" >Bhavnagar City</option>
                    <option vaule="Chitra" >Chitra</option>
                    <option vaule="Sastrinagar" >Sastrinagar</option>
                    </select>
                    <input type="text" name="date" id="date" onfocus="(this.type='date')" placeholder="Enter Date" required class="halfbox">
                    <input type="number" name="days" id="days" placeholder="Enter Days(default 1)" class="halfbox space">
                    <input type="text" name="time_start" id="time_start" onfocus="(this.type='Time')" placeholder="Start Time" required class="halfbox">
                    <input type="text" name="time_end" id="time_end" onfocus="(this.type='Time')" placeholder="End Time" required class="halfbox space">
                    <!-- <input type="range" name="price" id="price" min="20" max="10000" value="50"> -->
                    <input type="number" name="price" id="price" placeholder="Enter price per hour" required class="halfbox"><br>
                    <div class="center">
                    <input type="submit" name="submit" id="submit" class="submit" value="Submit">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "workeefy";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $name = $_POST["name"];
        $owner = $_POST["owner_name"];
        $info = $_POST["work_info"];
        $add = $_POST["address"];
        $contect = $_POST["contect"]; 
        $area = $_POST["select"];
        $date = date('Y-m-d',strtotime($_POST["date"]));
        $days = $_POST["days"];
        $tstart = $_POST["time_start"];
        $tend = $_POST["time_end"];
        $price = $_POST["price"];

        if (empty($name) || empty($owner) || empty($info) || empty($add) || empty($contect) || empty($area) || empty($date) || empty($tstart) || empty($tend) || empty($price)) {
            $errors = "Please fill all details please";
            echo "$errors";
        }
        elseif(empty($days)){
            $sql = "INSERT INTO hire (res_name, owner_name, details, adress, contect, area, date, s_time, e_time, price, username) VALUES ('$name','$owner','$info','$add','$contect','$area','$date','$tstart','$tend','$price','Nisarg123')";
            mysqli_query($conn, $sql);
            header('Location: home2.php');
            exit();
            }
        else{
            $sql = "INSERT INTO hire (res_name, owner_name, details, adress, contect, area, date, days, s_time, e_time, price, username) VALUES ('$name','$owner','$info','$add','$contect','$area','$date','$days','$tstart','$tend','$price','Nisarg123')";
            mysqli_query($conn, $sql);
            header('Location: home2.php');
            exit();
        }
    }
}

?>