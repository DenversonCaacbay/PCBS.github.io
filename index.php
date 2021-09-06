<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
        <link rel="stylesheet" href="indexstyle.css">
        <link rel="stylesheet" href="btnstyle.css">
        <link rel="stylesheet" href="logostyle.css">
    </head>

<body style="background-color: #ff4d4d">
    <nav>
    <div class="border">
        <div class="logo">
       <h4>PCBS</h4>
        </div>
        </div>
        <ul class="nav-links">
                <a class="nav-button" href="#">Home</a>
                <a class="nav-button" href="about1.php">About Us</a>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        </div>
    </nav>

    <div class="jam">
        <div class="i-left">
           <h1>Buy Best Products of all the world</h1>
           <p><i>"Bringing god's words within your reach"</i></p>
           <br>
            
            <div class="form-box">
                
                <div class="open-btn">
                 <button class="open-button" onclick="addForm()">
                 <strong>Login</strong>
                 </button>
               </div>
               <div id="addPopup">
                 <div class="form-popup" id="popupForm">
                   <form action="validation.php" method = "post" class="form-container">
                     <h2>Login</h2>
                     <label for="username">
                     <strong>Username</strong>
                     </label>
                     <input type="text" id="email" placeholder="" name="username" required>
                     <label for="password">
                     <strong>Password</strong>
                     </label>
                     <input type="password" id="psw" placeholder="" name="password" required>
                     <button type="submit" class="btn">Login</button>
                     <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
                   </form>
                 </div>
               </div>

               <div class="open-btn">
                <button class="open-button" onclick="signForm()">
                <strong>Sign Up</strong>
                </button>
              </div>
              <div id="signPopup">
                <div class="form-popup" id="popupForm">
                  <form action="signup.php" method = "post" class="form-container">
                    <h2>Sign Up</h2>
                    <label for="username">
                    <strong>Username</strong>
                    </label>
                    <input type="text" id="email" placeholder="" name="username" required>
                    <label for="email">
                    <strong>Email</strong>
                    </label>
                    <input type="text" id="email" placeholder="" name="email" required>
                    <label for="password">
                    <strong>Password</strong>
                    </label>
                    <input type="text" id="email" placeholder="" name="password" required>

                    <button type="submit" class="btn">Add</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
                  </form>
                </div>
              </div>
           </div>
           
        </div>
        <div class="i-right">
           <img src="main/logo2.jpg">
        </div>
      </div>

    <script src="app.js"></script>
    <script src="loginpopup.js"></script>
</body>
</html>