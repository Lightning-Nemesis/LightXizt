<?
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investor filtered</title>
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #1E1E1E;
  position: relative;
  padding-bottom: 58px;
  min-height: 100vh;
}
header {
  text-align: left;
  background-color: #000714;
  color: #ffffff;
  padding: 25px;
  width =100%
  position: fixed;
}
header h1 {
  font-size: 40px;
  margin-bottom: 30px;
}
header p {
  font-size: 22px;
}
main {
  width: 90vw;
  margin: 0 auto;
  padding: 30px 20px;
}
article {
  float:right;
  background-color:lightgray;
  padding: 20px;
  margin-bottom: 20px;
  border-radius: 5px;
  width:75%;
}

article h3 {
  margin: 10px 0 25px 0;
}
article p {
  margin-top: 16px;
  line-height: 24px;
}
nav{
  height: 100%;
  width: 350px;
  position: fixed;
  z-index: 1;
  top: 105px;
  left: 0;
  background-color: #000714;
  overflow-x: hidden;
  padding-top: 20px;
  
}
form{
    width: 300px;
    margin: 10px auto;
    padding: 10px 20px;
    background:#D3D3D3;
    border-radius: 10px;
    color: black;
  } 
  input[type="radio"],
  input[type="checkbox"] {
    margin: 0 4px 8px 0;
  }
  input[type="text"],
    input[type="password"],
    input[type="date"],
    input[type="datetime"],
    input[type="email"],
    input[type="number"],
    input[type="search"],
    input[type="tel"],
    input[type="time"],
    input[type="url"],  
  textarea,
  select {
    background: rgba(255,255,255,0.1);
    border: none;
    font-size: 16px;
    height: auto;
    margin: 0;
    outline: 0;
    padding: 15px;
    width: 90%;
    background-color: #e8eeef;
    color: #8a97a0;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
  }
  
  
  
  select {
    padding: 6px;
    height: 32px;
    border-radius: 2px;
  }
  fieldset {
    margin-bottom: 30px;
    border: none;
  }
  
  legend {
    font-size: 1.4em;
    margin-bottom: 10px;
  }
  
  label {
    display: block;
    margin-bottom: 8px;
  }
  button {
    
    padding: 19px 39px 18px 39px;
    color: #FFF;
    background-color: #1E1E1E;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 50%;
    border-width: 1px 1px 3px;
    border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25);
    margin-bottom: 10px;
  }
</style>
<body>
<header>
  <h1>LightXizT</h1>
</header>
<main>
<nav>


    <form>
    <fieldset>
        <label>Select Industry Domain:</label>
        <select id="domain" name="domain" >
         
            <option value="healthcare">Health Care</option>
            <option value="defense">Defense</option>
            <option value="realtime">Real Time</option>>
            <option value="fintech">FinTech</option>
            <option value="biotech">BioTechnologies</option>
            <option value="Oil">Oil and Gas</option>
            <option value="maintenance">Maintenance</option>
            <option value="Education">Education</option>
          </select>
        <label >Patent</label>
        <input type="radio" name="patent" id="py" value="1">Yes <br>
        <input type="radio" name="patent" id="pn" value="0">No
        
        
        </fieldset>
        <fieldset>
            <label>Max investment amount</label>
            <input id="amount" name="amount" type="number">
        </fieldset>
        <fieldset>
            <label>Required Location if </label>
            <input type="text" name="loc">
        </fieldset>
        <fieldset>
            <label>Company's age (years)</label>
            <input type="number" name="age">
        </fieldset>
        <button><a href="invlogfiltered.php" style="color:white;text-decoration: none;">Filter</a></button>
    </form>

</nav>
<?php 

require ('config.php');

include ('invlogfilter.inc.phc')
$results=$conn->query($sql);


?>

<?php foreach ($results as $result): ?>
<article>
    
    <h2>Startup Name:    <i><?php echo $result['startup_name'];?></i></h2>
    <h3>Date of Establishment: <i><?php echo $result['cid']; ?> </i></h3>
    <br> <b>Location:  </b><?php echo $result['location']; ?>
    <p><b>Idea:     </b><?php echo $result['idea'];?> </p>

    <p><b>Website  :</b><?php echo $result['website']; ?><br><b>Email ID  :</b><?php echo $result['email']; ?><br> <b>Domain:</b><?php echo $result['domain']; ?>   </p>      
    <p><b><i>>Asking Amount:   ₹<?php echo $result['amount']; ?></b></i></p>      
    <p><b><i>>Stake: <?php echo $result['stake']; ?>%</b></i></p>
      

   
</article>
<?php endforeach?> 
</main>

</body>
</html>