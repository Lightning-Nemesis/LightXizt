<?php
session_start();

if(isset($_POST['find-investor'])){

    require 'config.php';

    $user_name=$_SESSION['userName'];
    $startupname = $_POST['startupname'];
    $email = $_POST['user_email'];
    $phone = $_POST['phone'];
    $website=$_POST['website'];
    $location = $_POST['location'];
    $date = $_POST['cdate'];
    $domain = $_POST['domain'];
    $amount = $_POST['amount'];
    $stake = $_POST['stake'];
    $idea =$_POST['desc'];


    if(empty($startupname) || empty($email) || empty($phone) || empty($website) || empty($amount) || empty($stake) || empty($website)){
        header("Location: signup.php?error:somethingwrong");
        exit();
    }
     else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("[a-zA-Z0-9]*$",$startupname)) 
     {
         header("Location: signup.php?error&email:wrong&startup_name:error");
         exit();
     }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: signup.php?&email:error");
        exit();
    }
    
    $sql = "SELECT startup_name FROM startup WHERE startup_name=?";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: signup.php?sqlerro");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,'s',$startupname);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resulcheck= mysqli_stmt_num_rows($stmt);
        if($resulcheck>0){
            header("Location: signup.php?error=namealreadyexist");
            exit();
        }
        else{
            $sql= "INSERT INTO startup (username,startup_name,email,phone,domain,website,location,amount,cid,stake,idea) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: signup.php?sqlinserterror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"sssisssisis",$user_name,$startupname,$email,$phone,$domain,$website,$location,$amount,$date,$stake,$idea);
                mysqli_stmt_execute($stmt);
                header("Location: signup.php?signup=success");
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($conn);

}
else{
    header("Location: signup.php?databaseeror");
}
