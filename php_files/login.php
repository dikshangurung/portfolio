<?php
if(isset($_POST['submit2'])){
    $name2 = $_POST['email'];
    $_SESSION["username"] = $name2;
    $pass2 = $_POST['password'];
    $select2 = "SELECT * FROM websitedata WHERE name='$name2' && password='$pass2'";
    $result2 = mysqli_query($conn,$select2);
    //error handler
    function emptyData($name2,$pass2){
        if(empty($name2) || empty($pass2)){
            return true;
        }
        else{
            return false;
        }
    }
    function notMatch(){
        if(mysqli_num_rows($result2) >0){
            return false;
        }
        else{
            return true;
        }
    }
    if(emptyData($name2,$pass2)!==false){
        $_SESSION['error5'] = "Data not entered";
    }
    if(alreadyExist($result2)!==true){
        $_SESSION['error6'] = "Password or email invalid";
    }
    else{
        echo '<script type="text/javascript">';
        echo 'window.location.href="../admin/money.html";';
        echo '</script>';
        // header('location:../user/home.php');
    }
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
    <div class="hide_login">
        <div>
            <h1>Welcome back</h1>
            <h2>Please login to your account</h2>
            <?php
            if(isset($_SESSION["error5"])){
                echo "<h2 class='error_msg'>Data not entered</h2>";
            }
            else if(isset($_SESSION["error6"])){
                echo "<h2 class='error_msg'>Email or Password is invalid</h2>";
            }
            ?>
        </div>
        <div class="bottom">
        <form method="POST">
            <div class="form-group">
                <label for="name">EMAIL</label><br />
                <input type="text" id="email" placeholder=" " name="email" />
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
            <!-- <div class="form-group">
                <input
                type="checkbox"
                id="remember"
                name="Remember"
                value="Remember"
                />
                <label for="name" class="remember">Remember me</label>
                <a>Forgot password?</a>
            </div> -->
            <div class="form-group">
                <input type="submit" value="LOGIN" name="submit2"/>
            </div>
        </form>  
        </div>
    </div>
</body>
</html>