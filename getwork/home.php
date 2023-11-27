<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: white;
  }

  .container{
    max-width: 1200px;
    width: 100%;
    margin: auto;
  }

  .box1{
    background-color: white;
    position: fixed;
    z-index: 100;
    width: 100%;
    box-shadow: 0 1px 1px 0 rgba(41, 41, 41, 0.167), 0 6px 20px 0 rgba(63, 63, 63, 0.184);
  }

  .navbar {
    overflow: hidden;
    display: flex;
    justify-content: space-between;
    height: 70px;
    align-items: center;
  }

  .link{
    display: flex;
    align-items: center;
  }

  .links{
    width: 100px;
    text-align: center;
    display: block;
    color: black;
    font-size: 14px;
    padding: 27px 16px;
    text-decoration: none;
    font-family: Arial, sans-serif;
    transition: background-color 0.3s ease;
  }

  .links:hover {
    background-color: #ff00cc;
  }

  /* Logo Styles */
  .navbar img {
    height: 50px;
    margin-right: 10px;
  }

  .user-info{
    text-decoration: none;
    color: #13151a;
    font-size: 13px;
  }

  .user{
    border: 0.5px rgb(134, 134, 134) solid;
    border-radius: 5px;
    padding: 2px 0px 2px 10px; 
    display: flex;
    align-items: center;
  }

  .user img{
    height: 30px;
    width: 30px;
    margin-left: 10px;
    border-radius: 50%;
  }
  
  .box2{
    padding-top: 100px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .data{
    margin:30px 0;
    height: 330px;
    width: 90%;
    border: 0.5px rgb(134, 134, 134) solid;
    border-radius: 10px;
    padding: 0px 30px 20px 30px;
    display: flex;
    flex-direction: column;
  }

  .details{
    display: flex;
    gap: 50px;
  }

  .left , .right{
    height: 210px;
    width: 48%;
    line-height: 30px;
    color: #626262;
  }

  .line{
    height: 210px;
    border: 0.7px solid;
    color: #626262;
  }

  table{
    padding: 11px;
  }

  tr{
    height: 30px;
    color: #626262;
  }

  .data button{
    align-self: center;
    padding: 10px 20px;
    margin-top: 15px;
    cursor: pointer;
    border-radius: 3px;
    background: #ff0099;
    color: white;
    border: none;
  }
    </style>
</head>
<body>
    <div class="box1">
        <div class="container">
            <div class="navbar">
                <div class="link">
                    <img src="assets/grtwork_logo.png" alt="Logo">      
                    <a href="#how" class="links">How to hire</a>
                    <a href="#about" class="links">how to get work</a>
                </div>
                <a href="login.php" class="user-info"><div class="user">
                  <p>Nisarg3092</p>
                  <img src="assets/back1.jpeg" alt="user_img">
                </div></a>
            </div>
        </div>
    </div>
    <div class="box2">
        

        <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "workeefy";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            else{

              $sql = "Select * From hire";
              $select = mysqli_query($conn , $sql);
              while($row = mysqli_fetch_array($select)){
                echo '<div class="data">
                      <h2>' . $row['res_name'] . '</h2>
                      <div class="details">
                      <div class="left">
                          <p><b>Name :</b> ' . $row['owner_name'] . '<br>
                              <b>Work details :</b> ' . $row['details'] . '</p>
                      </div>
                      <div class="line"></div>
                      <div class="right">
                          <table>
                              <tr>
                                  <td valign="top">Address</td>
                                  <td valign="top">:</td>
                                  <td valign="top">' . $row['adress'] . '</td>
                              </tr>
                              <tr>
                                  <td valign="top">Area</td>
                                  <td valign="top">:</td>
                                  <td valign="top">' . $row['area'] . '</td>
                              </tr>
                              <tr>
                                  <td valign="top">Contect</td>
                                  <td valign="top">:</td>
                                  <td valign="top">' . $row['contect'] . '</td>
                              </tr>
                              <tr>
                                  <td valign="top">Date</td>
                                  <td valign="top">:</td>
                                  <td valign="top">' . $row['date'] .'('.$row['days'].' Day)</td>
                              </tr>
                              <tr>
                                  <td valign="top">Time</td>
                                  <td valign="top">:</td>
                                  <td valign="top">' .$row['s_time'].' - '.$row['e_time']. '</td>
                              </tr>
                              <tr>
                                  <td valign="top">Price</td>
                                  <td valign="top">:</td>
                                  <td valign="top">'.$row['price'].' Rs/Hr</td>
                              </tr>
                              </table>
                              </div>
                          </div>
                          <button>Send Request</button>
                          </div>';
              }
            }
        ?>
            
        
    </div>  
</body>
</html>