<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About Us</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="logostyle.css">
    </head>

<body>
    <nav>
        <div class="border">
        <div class="logo">
       <h4>PCBS</h4>
        </div>
        </div>
        <ul class="nav-links">
                <a class="nav-button" href="indexlogin.php">Home</a>
                <a class="nav-button" href="books.php">Books</a>
                <a class="nav-button" href="accessories.php">Accessories</a>
                <a class="nav-button" href="#">About Us</a>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        </div>
    </nav>
    <div class="p">
    <center>
    <p>
        <center><b>About Us</b></center>
        Philippine Christian Book Store (PCBS), a ministry of Philippine Christian Literature, Inc. is an inter-denominational, non-stock, non-profit Christian organization that aims to spread the gospel and Christian teachings through the nationwide distribution of Bibles and Christian Literature. We provide books and resources that will nurture spiritual growth and develop Christ like values, attitude and perceptions in our daily living
    </p>
    <p>
        <center><b> Our Calling</b></center>
        To be a major contributing force in the transformation of lives through Christian Literature and related products.
    </p>
    <p>    
      <center><b> Our Goal</b></center>
        To glorify God through excellent management, marketing and distribution of Christian Literature and related products to the Body of Christ in the mission field in fulfillment of the Great Commission.
    <p>    
        <center> <b> Our Guiding Verse</b></center>
        And do not be conformed to this world: but be ye transformed by the renewing of your mind, that ye may may prove what is good, and acceptable, and perfect, will of God. Romans 12:2</p>
    

    <div class="form-box">
                
        <div class="open-btn">
         <button class="open-button" onclick="addForm()">
         <strong>CONTACT US</strong>
         </button>
       </div>
       <div id="addPopup">
         <div class="form-popup" id="popupForm">
           <form action="/action_page.php" class="form-container">
             <h2>CONTACT US</h2>
             <br>
             You may email us directly at pcbs.ph@gmail.com or fill out this form to get started.<br><br>

             
             Tel. #:(02) 404 3381<br><br>
             
             Address: 568 Sierra Madre St., Brgy. Highway Hills, Mandaluyong City, Metro Manila<br><br>
             
             You may also directly reach the nearest PCBS for faster transaction, Click here for all our branches contact details.<br><br>
             
             Follow us on social media:


             <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
           </form>
         </div>
       </div>
    </center>














   



    <script src="app.js"></script>
    <script src="loginpopup.js"></script>
</body>
</html>