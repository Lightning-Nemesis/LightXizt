<?php
if(isset($_POST['signUp'])){

    require 'config.php';

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $repassword=$_POST['repassword'];
    $email = $_POST['email'];

    if(empty($user_name) || empty($email) || empty($password) || empty($repassword) ){
        header("Location:signup.php?error:somethingwrong");
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("[a-zA-Z0-9]*$",$user_name)) 
    {
        header("Location:signup.php?error&email:wrong&username:error");
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location:signup.php?&email:error");
        exit();
    }
    elseif($password!==$repassword){
        header("Location:signup.php?passwordDidNotMatch");
        exit();
    }
    
    $sql = "SELECT user_name FROM signin WHERE user_name=?";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:signup.php?sqlerro");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,'s',$username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resulcheck= mysqli_stmt_num_rows($stmt);
        if($resulcheck>0){
            header("Location:signup.php?error=namealreadyexist");
            exit();
        
        }
        else{
            
            $stmt = mysqli_stmt_init($conn);
            $sql ="INSERT INTO signin (user_name,email,password) VALUES(?,?,?)";
            
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:signup.php?sqlinserterror");
                exit();
            }
            else{
                $hashedpwd= password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt,"sss",$user_name,$email,$hashedpwd);
                mysqli_stmt_execute($stmt);
                header("Location:SignIn.php?signup=success");
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($conn);

}
else{
    header("Location:signup.php?databaseeror");
}
