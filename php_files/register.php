<?php
if(isset($_POST['submit'])){
    $name = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $user = "user";
    $select = "SELECT * FROM websitedata WHERE name='$name'";
    $result = mysqli_query($conn,$select);
    //error handlers
    if(emptyInput($name,$pass,$cpass)!== false){
        $_SESSION['error1'] = "Data not entered";
    }  
    if(passNotMatch($pass,$cpass)!==false){
        $_SESSION['error2'] = "Password Not Match";
    }
    if(alreadyExist($result)!==false){
        $_SESSION['error3'] = "User already exists";
    }
    if(invalidEmail($name)){
        $_SESSION['error4'] = "Invalid email";
    }
    else{
        $insert = "INSERT INTO `websitedata`(name,password,user_type) VALUES('$name','$pass','$user')";
        mysqli_query($conn,$insert);
    }
    // if(mysqli_num_rows($result)>0){
    //     $error[] = "USER ALREADY EXISTS";
    // }
    // else{
    //     if($pass != $cpass){
    //         $error[] = "Password not matched";
    //     }
    //     else{
    //         $insert = "INSERT INTO `websitedata`(email,password,user_type) VALUES('$email','$pass','$user')";
    //         mysqli_query($conn,$insert);
    //     }
    // }
    // echo "<script>document.querySelector('.error_msg').style.display = 'none';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="hide_registration">
        <div>
            <h1>Welcome</h1>
            <h2>Lets get you on board</h2>
            <?php
            if(isset($_SESSION["error1"])){
                echo "<h2 class='manipulate'>Data not entered</h2>";
            }
            else if(isset($_SESSION["error2"])){
                echo "<h2 class='manipulate'>Password not matched</h2>";
            }
            else if(isset($_SESSION["error3"])){
                echo "<h2 class='manipulate'>User already exists</h2>";
            }
            else if(isset($_SESSION["error4"])){
                echo "<h2 class='manipulate'>Invalid email</h2>";
            }
            ?>
            
        </div>
        <div class="bottom">
            <form method="POST">
            <div class="form-group">
                <label for="name">Email</label><br />
                <input type="text" id="name" placeholder=" " name="email" />
            </div>
            <div class="form-group">
                <label for="name">PASSWORD</label><br />
                <input
                type="password"
                id="password"
                placeholder=" "
                name="password"
                />
            </div>
            <div class="form-group pass">
                <label for="name">CONFIRM</label><br />
                <input
                type="password"
                id="cpassword"
                placeholder=" "
                name="cpassword"
                />
            </div>
            <div class="form-group">
                <input type="submit" value="Create" name="submit" />
            </div>
            </form>
        </div>
    </div>
                  
</body>
</html>