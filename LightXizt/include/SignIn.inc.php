<?php 
if (isset($_POST['signIn'])){

    require ('config.php');

    $user_name = $_POST['email'];
    $password = $_POST['password'];
    
    if(empty($user_name) || empty($password)){
        header("Location: signup.php?error:fillTheDetails");
        exit();
    }
    else{
        $sql= "SELECT * FROM signin WHERE user_name=? OR email=?;";
        $stmt= mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: signup.php?error:sqlErrror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"ss", $user_name , $user_name);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                $pwdCheck= password_verify($password, $row['password']);
                if($pwdCheck==false){
                    header("Location: SignIn.php?Error:wrongPass");
                    exit();
                }
                else{
                    session_start();
                    $_SESSION['userName']=$row['user_name'];
                    $_SESSION['idUser']=$row['user_id'];

                    header("Location: index.php?signIn=Success");
                }
            }
            else{
                header("Location: SignIn.php?error:NoUserFound");
                exit();
            }
        }
    }


}