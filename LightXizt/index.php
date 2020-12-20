<?php 
session_start();
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HomePage</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    </head>
    <body >

        
            <header>
                <img class="logo" src="images/logo.png" alt="logo" width="80px" height="80px" >
                <nav>
                    <ul class="nav__links">
                    <?php
                        if(isset($_SESSION['userName'])){                    
                        echo'
                        <li><a href="#">Previous Investment</a></li>
                        <li><a href="select.php">Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">About</a></li>';
                        }
                        else{
                            echo'<li><a href="#">Previous Investment</a></li>
                            <li><a href="#">About</a></li>';
                        }?>
                    </ul>
                </nav>
                <?php if(isset($_SESSION['userName'])){

                echo '<a class="cta" href="logout.php">Log Out</a>';
            }
                
                else{
                    echo '<a class="cta" href="signup.php">Sign In</a>' ;                   
                }
                ?>
            </header>
            
    
    <div class="container">
        <img src="images/background.jpg " alt=""  width="1900px" height="700px" style="z-index: -1;" class="shallow">
        <div class="top-left">
            <div class="flip-card" >
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/wow.jpg" alt="Avatar" style="width:410px;height:280px;">  

                    </div>
                    <div class="flip-card-back">
                    
                        <h1>John Doe</h1>
                        <p>Food and Beverages</p> <br><br>
                        <p>The company is headquartered in Kolkata, West Bengal. In 2019, after Tiger Global Management's investment of ₹130cr, the company was valued 
                        at over ₹860 crore. The company was founded by Sagar Jagdish Daryani and Binod Kumar Homagai, who started selling steamed momos </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="flip-card" >
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/button.jpg" alt="Avatar" style="width:410px;height:280px;">
                    </div>
                    <div class="flip-card-back">
                    <h1>Fulgur Ventures</h1> 
                        <p>Fintech Industries</p> 
                        <br><br>
                        <p> It is a perfect app for people who trade cryptocurrency on the go. With the app, instead of using a third-party 
                        platform to trade currencies, they can do it with the Telegram communication app. Button Wallet is fast and secure.</p>
                    
                       
                    
                    </div>
                </div>
            </div>
            </div>
           
        
        <div class="top-mid">
            <div class="flip-card" >
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                    <img src="images/grab.jpg" alt="Avatar" style="width:410px;height:280px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Grab</h1> 
                        <p>Transport</p> <br><br>
                        <p>Grab started as a ride-hailing platform to connect commuters with riders in Singapore. 
                        It has topped the list of the best startups to invest in 2019. After getting funds from multiple companies it has introduced new services like GrabTaxi</p>

                    </div>
                </div>
            </div>
            <br>
            <div class="flip-card" >
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                     <img src="images/airalo.jpg" alt="Avatar" style="width:410px;height:280px;">   
                    </div>
                    <div class="flip-card-back">
                  <h1>Airalo</h1> 
                        <p>Travel</p> <br><br>
                        <p>Are you planning to travel abroad? With new startup Airalo, getting an eSIM is more affordable than ever. The Airalo SIM lets you travel to multiple 
                        destinations of your choice. It covers over 100 destinations. You can get the eSIMs at an affordable price from around the world.</p>
                    
                       
                    
                    </div>
                </div>
            </div>  
        </div>
        
        <div class="top-right">
             <div class="flip-card" >
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/hqo.jpg" alt="Avatar" style="width:410px;height:280px;">
                    </div>
                    <div class="flip-card-back">
                   <h1>HqO</h1> 
                        <p>Mobile Apps</p> <br><br>
                        <p>HqO is an app that helps landlords carve places that their tenants love. It is an onsite retail and services app that helps landlords know in real-time about the features that are not available at the premises.
                         As a result, they can take quick action and solve the problem on time. They can even set a time for the repair and renovation with the tenant through the app.</p>
                   
                       
                    
                    </div>
                </div>
            </div>  
            <br>
            <div class="flip-card" >
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/mythical.jpg" alt="Avatar" style="width:410px;height:280px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Mythical Games</h1> 
                        <p>Blockchain industries</p> <br><br>
                        <p>The Mythical Games studio is setting new benchmarks for the gaming industry with its blockchain-based games. The company aims to bring game developers and content creators closer to the games they love. With a team of veteran game and platform experts,
                         it is developing world-class products that help consumers adopt for the distributed ledger technology through games.</p>
                    
                       
                    
                    </div>
                </div>
            </div>  
       </div>

    </div>
    <div class = "footer">
        <br>
        <i><h1><font color=white>__About Us___</font></i></h1><br><hr>
        <font size="4"><p style="padding: 30px;font-family: Verdana;">LightXizt is an online platform for investors and entrepreneurs to interact
             with each other.
             We provide an ecosystem where investors and entrepreneurs coexist and companies flourish.
             About 10,000 of companies have achieved QVC title by meeting on this platform. <br>
             Working at a startup is a great place to build upon your existing skill sets, gain experiences in many functional areas, 
             and take on a ton of responsibility. As the company grows quickly, so will your opportunities for career advancement.</p></font>
        
    </div>
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Light<span>XizT</span></h3>

            <p class="footer-links">
                
            </p>
            <p class="footer-company-name">Since &copy;2020</p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
        </div>
        <div class="footer-right">
            <p>Contact Us</p>
            <form action="#" method="post">
                <input type="text" name="email" placeholder="Email">
                <textarea name="message" placeholder="Message"></textarea>
                <button>Send</button>
            </form>
        </div>
    </footer>
    <div class="last">&copy; LightXizT | Designed by Prakshal and Amrit</div>

    <script type="text/javascript" src="mobile.js"></script>
    </body>
</html>