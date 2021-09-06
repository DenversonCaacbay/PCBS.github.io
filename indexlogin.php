<?php

session_start();



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="btnstyle.css">
        <link rel="stylesheet" href="logostyle.css">
        

    </head>

<style>
	

</style>

<body>
    <nav>
    <div class="border">
        <div class="logo">
       <h4>PCBS</h4>
        </div>
        </div>
        <ul class="nav-links">
                <a class="nav-button" href="#">Home</a>
                <a class="nav-button" href="books.php">Books</a>
                <a class="nav-button" href="accessories.php">Accessories</a>
                <!-- <a class="nav-button" href="#">Cart</a>
                <a class="nav-button" href="#">Profile</a> -->
                <a class="nav-button" href="about.php">About Us</a>
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
            
           <h1>Welcome &nbsp;<?php echo $_SESSION['username'];?></h1>
           <button class="open-button btn-logout" onclick="window.location.href= 'index.php'; alert('Logging out...');" style = "background: white; color: red;">
                 <strong>LogOut</strong>
                 </button>


           </div>
        <div class="i-right">
           <img src="main/logo2.jpg">
        </div>
      </div>
  <div class="na">
    <h3>Newest Products</h3>
  </div>
  
  <div class="imgko">
      <center>
    <div class="lalagyan">
    <div class="img1">
      <img src="main/img1.jpg">
      <div class="card">
        <h4><b>Christian Gold Pendant</b></h4>
        <h4><b>₱500.00</b></h4>
        <!--<button id = "cart">Add to cart</button>--> 
            <div class="form-box">
                
        <div class="open-btn">
         <button class="open-button" onclick="addForm()">
         <strong>BUY</strong>
         </button>
       </div>
       <div id="addPopup">
         <div class="form-popup" id="popupForm">
           <form action="order.php" class="form-container" method = "post">
              <h2>Fill up this Form</h2>
                     <label for="Name">
                     <strong>Enter Full Name</strong>
                     </label>
                     <input type="text" id="text" placeholder="" name="name" required>
                     <label for="Address">
                     <strong>Enter Address</strong>
                     </label>
                     <input type="text" id="address" placeholder="" name="address" required>
                     <label for="Email Address">
                     <strong>Enter Email Address</strong>
                     </label>
                     <input type="text" id="eaddress" placeholder="" name="emailaddress" required>
                     <label for="Address">
                     <strong>Enter Contact Number</strong>
                     </label>
                     <input type="text" id="contactno" placeholder="" name="contactno" required>
                     <button type="submit" class="btn">BUY</button>


             <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
           </form>
         </div>
       </div>
	</div>
  </div>
</div>
</div>
</div>

    <div class="lalagyan">
    <div class="img1">
      <img src="main/img2.jpg">
      <div class="card">
        <h4><b>Christian Gold Pendant</b></h4>
        <h4><b>₱500.00</b></h4>
        <!--<button id = "cart">Add to cart</button>--> 
        <div class="form-box">
        <div class="open-btn">
                 <button class="open-button" onclick="addForm()">
                 <strong>BUY</strong>
                 </button>
               </div>
               <div id="addPopup">
                 <div class="form-popup" id="popupForm">
                   <form class="form-container">
                     <h2>Fill up this Form</h2>
                     <h2>Fill up this Form</h2>
                     <label for="Name">
                     <strong>Enter Full Name</strong>
                     </label>
                     <input type="text" id="text" placeholder="" name="name" required>
                     <label for="Address">
                     <strong>Enter Address</strong>
                     </label>
                     <input type="text" id="address" placeholder="" name="address" required>
                     <label for="Email Address">
                     <strong>Enter Email Address</strong>
                     </label>
                     <input type="text" id="eaddress" placeholder="" name="emailaddress" required>
                     <label for="Address">
                     <strong>Enter Contact Number</strong>
                     </label>
                     <input type="text" id="contactno" placeholder="" name="contactno" required>
                     <button type="submit" class="btn">BUY</button>


             <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
                 </div>
               </div>
</div>
      </div>
    </div>
    </div>
  
  <div class="lalagyan">
    <div class="img1">
      <img src="main/img3.jpg">
      <div class="card">
        <h4><b>Christian Gold Pendant</b></h4> 
        <h4><b>₱500.00</b></h4>
        <div class="form-box">
        <div class="open-btn">
                 <button class="open-button" onclick="addForm()">
                 <strong>BUY</strong>
                 </button>
               </div>
               <div id="addPopup">
                 <div class="form-popup" id="popupForm">
                   <form class="form-container">
                     <h2>Fill up this Form</h2>
                     <h2>Fill up this Form</h2>
                     <label for="Name">
                     <strong>Enter Full Name</strong>
                     </label>
                     <input type="text" id="text" placeholder="" name="name" required>
                     <label for="Address">
                     <strong>Enter Address</strong>
                     </label>
                     <input type="text" id="address" placeholder="" name="address" required>
                     <label for="Email Address">
                     <strong>Enter Email Address</strong>
                     </label>
                     <input type="text" id="eaddress" placeholder="" name="emailaddress" required>
                     <label for="Address">
                     <strong>Enter Contact Number</strong>
                     </label>
                     <input type="text" id="contactno" placeholder="" name="contactno" required>
                     <button type="submit" class="btn">BUY</button>


             <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
                 </div>
               </div>
</div>
      </div>
    </div>
    </div>
  
  <div class="lalagyan">
    <div class="img1">
      <img src="main/img4.jpg">
      <div class="card">
        <h4><b>Christian Gold Pendant</b></h4> 
        <h4><b>₱500.00</b></h4>
        <div class="form-box">
        <div class="open-btn">
                 <button class="open-button" onclick="addForm()">
                 <strong>BUY</strong>
                 </button>
               </div>
               <div id="addPopup">
                 <div class="form-popup" id="popupForm">
                   <form class="form-container">
                     <h2>Fill up this Form</h2>
                     <h2>Fill up this Form</h2>
                     <label for="Name">
                     <strong>Enter Full Name</strong>
                     </label>
                     <input type="text" id="text" placeholder="" name="name" required>
                     <label for="Address">
                     <strong>Enter Address</strong>
                     </label>
                     <input type="text" id="address" placeholder="" name="address" required>
                     <label for="Email Address">
                     <strong>Enter Email Address</strong>
                     </label>
                     <input type="text" id="eaddress" placeholder="" name="emailaddress" required>
                     <label for="Address">
                     <strong>Enter Contact Number</strong>
                     </label>
                     <input type="text" id="contactno" placeholder="" name="contactno" required>
                     <button type="submit" class="btn">BUY</button>


             <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
                 </div>
               </div>
</div> 
      </div>
    </div>
</center>
    </div>





    <script src="app.js"></script>

    <script src="loginpopup.js"></script>

</body>
</html>