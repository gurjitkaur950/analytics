<html>
    <head>
        <title>My Website</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="header_left">
                    <img src="images/logo.png" height="80px">
                </div>
                <nav>
                <a href="#">Home</a>
                <a href="#">Attendance</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                
                
                </nav>
            </div>
        </header>
        <main>
            <h1>Welcome to my site.....!!!!</h1>
            <fieldset>
                <legend><h2>Your Info</h2></legend>
                Name:  <input type="text" name="name"><br/><br/>
                Mobile:  <input type="number" name="phone"><br/><br/>
                <input type="submit" name="Submit">
            
            </fieldset>
            <br/>
            <br/>
            <?php
            echo"<h2>Quote of the Day: </h2><h3><i>If we manage ego wisely, we get the upside it delivers followed by strong returns.</i></h3>";
?>
        </main>
         <footer>
               
                    <div id="foot">
                        <p class="p1">Copyright &copy; College Name 2018</p>
                        <span>Subscribe:</span> <input type="email" name="email" placeholder="Email Address"/>
                        <input type="Submit" name="Subscribe Now"/>
                        </div>
                    <div id="sign">
                        <span>Follow us:</span><a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-instagram"></a>
                    </div>
               
            </footer>
    </body>
</html>