<?php 
session_start();
if(isset($_POST['bid'])){
    require ('config.php');

    $username=$_SESSION['userName'];
    $amount=$_POST['amount'];
    $stake=$_POST['stake'];
    $startup_name=iwp;
    

    $sql= "INSERT INTO bid (investorname,startup,amount,stake) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: invlog.php?sqlinserterror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"ssii",$username,$startup_name,$amount,$stake);
        mysqli_stmt_execute($stmt);
        header("Location: invlog.php?BID=success");
    }
}