<?php
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
  text-align: center;
  background-color: #000714;
  color: #ffffff;
  padding: 10px;
  text-align: left;
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
  background-color:lightgray;
  padding: 20px;
  margin-bottom: 20px;
  border-radius: 5px;
}

article h3 {
  margin: 10px 0 25px 0;
}
article p {
  margin-top: 16px;
  line-height: 24px;
}
</style>
<body>
<header>
  <h1>LightXizT</h1>
</header>
<main>

<?php
require('config.php');

$userName = $_SESSION['userName'];
$sql="SELECT B.investorname,B.amount,B.stake from bid B ,startup S where S.userName='$userName' AND B.startup=S.startup_name ";
$results=$conn->query($sql);
  ?>

<?php foreach ($results as $result): ?>
<article>
    
    <h2>Investor:    <i><?php echo $result['investorname'];?></i></h2>
    <p><b><i>>Asking Amount:   ₹<?php echo $result['amount']; ?></b></i></p>      
    <p><b><i>>Stake: <?php echo $result['stake']; ?>%</b></i></p><br>
</article>
<?php endforeach?> 
</main>

</body>
</html>