<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url("selectbag.png");
            background-size: cover;
            font-family: "Montserrat", sans-serif;
            font: weight 500;
        }
        #leftbox { 
                float:left; 
                width:20%; 
                height:280px; 
                padding: 10px;
                margin: 10px;
                border-radius: 10px;
  	            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			                0 10px 10px rgba(0,0,0,0.22);
            } 
            #middlebox{ 
                float:left; 
                width:20%; 
                height:280px;
                padding: 10px;
                margin: 10px;
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			                0 10px 10px rgba(0,0,0,0.22);
            } 
            #rightbox{ 
                float:right; 
            } 
            h1{ 
                color:#1E1E1E;
                text-align:center; 
            }
            button {
                text-align: center;
                border-radius: 20px;
                border: 1px solid #FF4B2B;
                background-color: #FF4B2B;
                color: #FFFFFF;
                font-size: 12px;
                font-weight: bold;
                padding: 12px 45px;
                letter-spacing: 1px;
                text-transform: uppercase;
                transition: transform 80ms ease-in;
                
            }
            p{
                font-weight: bold;
                font-size: 35px;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
        
    </style>
</head>
<body>
    <div id="boxes">
        <h1>LightXizT</h1><br><br><br>
        <p>Matching Entrepreneurs<br> with Investors</p>
    
    <div id= "leftbox"><h1>For Investors</h1><br>
        The next big thing in tech launches every day. A friendly community of millions of makers & early adopters awaits.Grab all the crzy ideas you can.<br><br><br>
        <button id="btn"><a href="investordetails.php" style="text-decoration: none; color: #FFFFFF;">Explore innovative ideas</a></button>      
    </div>
    <div id="middlebox"><h1>For Entrepreneurs</h1><br>
        Shark Tank is the leading destination for company insights from early-stage startups to the Fortune 1000. Get insights into your competition.<br><br><br>
        <button id="btn"><a href="entrepreneurdetails.php" style="text-decoration: none; color: #FFFFFF;">Battle for your invention</a></button> 
    </div>
     
</body>
</html>