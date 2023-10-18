<?php
//Sign up/Register
function emptyInput($name,$pass,$cpass){
    if(empty($name)||empty($pass)||empty($cpass)){
        return true;
    }
    else{
        return false;
    }
}
function passNotMatch($pass,$cpass){
    if($pass!==$cpass){
        return true;
    }
    else{
        return false;
    }
}
function invalidEmail($name){
    if(!filter_var($name,FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}
function alreadyExist($result){
    if(mysqli_num_rows($result)>0){
        return true;
    }
    else{
        return false;
    }
}