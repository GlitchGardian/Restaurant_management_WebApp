<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Your Work</title>
    <style>
        body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #13151a;
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

  /* Button Styles */
  .navbar button {
    width: 100px;
    background-color: #ff0099;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    margin: 10px;
    font-weight: bolder;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .navbar button:hover {
    background-color: #7d004b;
  }

  .box2{
    background-image: url('./assets/back1.jpeg');
    height: 100vh;
    background-size: cover;
    opacity: 0.8;
    margin-top: 0;
  }
  
  .details{
    padding-top: 200px;
  }

  .heading1{
    color: white;
    font-size: 55px;
    width: 600px;
  }

  .details ul{
    color: white;
    font-size: larger;
    font-family: Verdana, monospace;
    line-height: 40px;
    font-weight: bold;
  }

  .hire{
    background-color: #ff0099;
    color: white;
    padding: 17px 50px;
    border: none;
    border-radius: 3px;
    margin: 10px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .hire:hover {
    background-color: #7d004b;
  }
  
  .work{
    background : linear-gradient(to bottom,transparent 0%,#ffffff33 100%);
    color: white;
    padding: 17px 50px;
    border-radius: 3px;
    border-color: white;
    border: 1px solid;
    margin: 10px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .work:hover{
    background : linear-gradient(to bottom,transparent 0%,#ffffff33 0%);
    border-color: #c7c7c7;
  }

  .hotels{
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .hotels p{
    color: white;
    font-size: large;
  }

  .box3 h1{
    color: white;
    font-size: 40px;
    padding-top: 50px;
  }

  .features{
    display: flex;
    justify-content: space-between;
  }

  .features h3{
    color: white;
  }

  .features p{
    color: white;
    font-size: 15px;
    line-height: 30px;
    font-weight: 100;
    width: 220px;
  }

  hr{
    border: 1px solid #ffffff33;
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
                <div class="button">
                   <a href="login.php"><button>Log In</button></a> 
                   <a href="signup.php"><button>Sign Up</button></a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Home -->
    <div class="box2">
        <div class="container">
            <div class="details">
                <h1 class="heading1">Hire the best Staff for your restaurant, online.</h1>
                <ul>
                    <li>Find Staff Easily</li>
                    <li>Pay only for working hours</li>
                    <li>Get staff when you need them</li>
                </ul>
                <a href="hire.php"><button class="hire">Hire A Staff</button></a>
                <a href="home.php"><button class="work">Get Work In Restaurant</button></a>
            </div>
        </div>
    </div>

    <div class="box3">
        <div class="container">
            <Br>
            <div class="hotels">
                <p>Hotels</p>
                <img src="assets/logo_white_t.png" alt="2" width="120px">
                <img src="assets/logo_white_t.png" alt="1" width="120px">
                <img src="assets/logo_white_t.png" alt="3" width="120px">
                <img src="assets/logo_white_t.png" alt="4" width="120px">
                <img src="assets/logo_white_t.png" alt="5" width="120px">
                <img src="assets/logo_white_t.png" alt="6" width="120px">
            </div>
            <br>
            <hr>
            <h1>Need something done?</h1>
            <div class="features">
                <div class="f1">
                    <h3>Post a job</h3>
                    <p>It’s free and easy to post a job. Simply fill in a title, description and budget and competitive bids come within minutes.</p>
                </div>
                <div class="f1">
                    <h3>Post a job</h3>
                    <p>It’s free and easy to post a job. Simply fill in a title, description and budget and competitive bids come within minutes.</p>
                </div>
                <div class="f1">
                    <h3>Post a job</h3>
                    <p>It’s free and easy to post a job. Simply fill in a title, description and budget and competitive bids come within minutes.</p>
                </div>
                <div class="f1">
                    <h3>Post a job</h3>
                    <p>It’s free and easy to post a job. Simply fill in a title, description and budget and competitive bids come within minutes.</p>
                </div>
            </div>
            <br>
            <br>
            <hr>
            <h1>What's great about it?</h1>
            <div class="features">
                <div class="f1">
                    <h3>Post a job</h3>
                    <p>It’s free and easy to post a job. Simply fill in a title, description and budget and competitive bids come within minutes.</p>
                </div>
                <div class="f1">
                    <h3>Post a job</h3>
                    <p>It’s free and easy to post a job. Simply fill in a title, description and budget and competitive bids come within minutes.</p>
                </div>
                <div class="f1">
                    <h3>Post a job</h3>
                    <p>It’s free and easy to post a job. Simply fill in a title, description and budget and competitive bids come within minutes.</p>
                </div>
                <div class="f1">
                    <h3>Post a job</h3>
                    <p>It’s free and easy to post a job. Simply fill in a title, description and budget and competitive bids come within minutes.</p>
                </div>
            </div>
            <br>
            <br>
            <hr>
        </div>
    </div>
      
</body>
</html>