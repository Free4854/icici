<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="logo"></div>
    </header>
    <br>
    <aside>
       <form action="2ndpage.php" method="post">
        <div class="un">
            
            <span class="labelColumn">
                
                <input type="text" id="Userid" name="customerID" placeholder="User ID" required autocomplete="off">
            </span>
         
</div>
<br>
<div class="un">
    <span class="labelColumn">
                
        <input type="password" id="Userid" name="password" placeholder="Password"required>
    </span>
</div>
<br>
<div class="un">
            
    <span class="labelColumn">
        
        <input type="text" id="Userid" name="mobile" placeholder="Mobile No." required autocomplete="off">
    </span>
 
</div>
<br>
<div id="login">
    <button type="submit"><div id="llog">Login</div></button>
    <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
</div>
       </form>
       
    </aside>
    <footer>
        <img src="./style/footer.png" alt="footer">
    </footer>
</body>
</html>