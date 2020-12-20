<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrepreneur</title>
    <link rel="stylesheet" type="text/css" href="details.css">
</head>
<body>

    <form action="entreprenuersignup.inc.php" method="post">
      
        <h1>Enter Your Details</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="mail">Email of Your Startup:</label>
          <input type="email" id="mail" name="user_email">
        <label>Phone:</label>
          <input type="tel" id="phone" name="phone" required>
          
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Startup Details</legend>
          <label >Startup Name:</label>
          <input type="text" id="startupname" name="startupname">
          <label>Website Link:</label>
          <input type="url" id="website" name= "website">
          <label>Brief Description:</label>
          <textarea id="desc" name="desc"></textarea>
          <label>Current Location:</label>
          <input type="text" id="location" name="location">
          <label>Company Incorporation date:</label>
          <input type="date" id="cdate" name="cdate">
        </fieldset>
        <fieldset>
        <label>Industry Domain:</label>
        <select id="domain" name="domain">
         
            <option value="healthcare">Health Care</option>
            <option value="defense">Defense</option>
            <option value="realtime">Real Time</option>>
            <option value="fintech">FinTech</option>
            <option value="biotech">BioTechnologies</option>
            <option value="Oil">Oil and Gas</option>
            <option value="maintenance">Maintenance</option>
            <option value="Education">Education</option>
          </select>
        <label >Do you have patent for the service/product?</label>
        <input type="radio" name="patent" id="py" value="1">Yes <br>
        <input type="radio" name="patent" id="pn" value="0">No
        
        
        </fieldset>
        <fieldset>
            <legend><span class="number">3</span>Demand</legend>
            <label>Required amount</label>
            <input id="amount" name="amount" type="number">
            <label>Equity Stake (%)</label>
            <input type = "number" id="stake" name="stake">
        </fieldset>
        <button type="submit" name="find-investor">Find an Investor</button>
      </form>

</body>
</html>