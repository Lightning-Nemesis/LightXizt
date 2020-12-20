<?php
    session_start();

if(isset($_POST['signup-investor'])){

    require ('config.php');

    $investorname = $_POST['user_name'];
    $email = $_POST['user_email'];
    $phone = $_POST['phone'];
    $income=$_POST['income'];
    $user_name=$_SESSION['userName'];
    $employement=$_POST['radio'];
    $invested=$_POST['invested'];
  

    if(empty($investorname) || empty($email) || empty($phone) || empty($income)){
        header("Location: investordetails.php?somethingWentWrong");
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("[a-zA-Z0-9]*$",$investorname)) 
    {
        header("Location: investordetails.php?EmailOrUserName");
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: investordetails.php?error=Emailid");
        exit();
    }
    
    $sql = "SELECT name FROM investors WHERE name=?;";
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
            $sql= "INSERT INTO investors (user_name,name,email,phone,income,employement) VALUES (?,?,?,?,?,?);";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: investordetails.php?InsertProb");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"sssiis",$user_name,$investorname,$email,$phone,$income,$employement);
                mysqli_stmt_execute($stmt);
                header("Location: index.php?signup=success");
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($conn);

}
else{
    header("Location:investordetails.php");
}
