<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investor</title>
    <link rel="stylesheet" type="text/css" href="details.css">
</head>
<body>
  
    <form action="investorsignup.inc.php" method="post">
      
        <h1>Enter Your Details</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label >Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
        <label>Phone:</label>
          <input type="tel" id="phone" name="phone" required>
          
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Investment Details</legend>
          <label >Why are you interested in joining?</label>
          <input type="checkbox" name="a1" id="a1">I want insider access to top startups<br>
          <input type="checkbox" name="a2" id="a2">I want to diversify my portfolio with high return potential startups<br>
          <input type="checkbox" name="a3" id="a3">I want to join and engage with an active startup community<br>
          <input type="checkbox" name="a4" id="a4">I want to browse investment opportunities<br>
          </fieldset>
        <fieldset>        
        
          <label>Interests:</label>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Development</label><br>
          <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Design</label><br>
          <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Business</label>
        
        </fieldset>
        <fieldset>
            <label>Have you previously invested in startups?</label>
            <input type="radio" name= "invest" id="iy" value="1">Yes, I have invested in startups<br>
            <input type="radio" name= "invest" id="in" value="0">No, I have no investments yet</fieldset>
            <fieldset>
                <label>Net Worth / Personal Income:</label>
                <input type= "number" id ="income" name="income">
            <label>Employement status</label>
            <input type="radio" name= "radio" value="employed">Employed<br>
            <input type="radio" name= "radio" value="selfemployed">Self Employed<br>
            <input type="radio" name= "radio" value="other">Other
        </fieldset>
        <button type="submit" name="signup-investor">Check out cool Startups</button>
      </form>
    
</body>
</html>