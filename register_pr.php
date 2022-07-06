<?php
include 'include/function.php';

if($_POST){
    $errors=[];
    // register validate
    if(!$_POST['name'])
    {
        $errors['name']="Bạn chưa nhập tên tài khoản !";
    }
    if(!$_POST['diachi'])
    {
        $errors['diachi']="Bạn chưa nhập địa chỉ!";
    }
    if($_POST['sdt'])
    {
        if(strlen($_POST['sdt'])<10)
    {
        $errors['sdt']="Số điện thoại không đúng định dạng !";
    }
      
    }else{
        $errors['sdt']="Bạn chưa nhập số điện thoại!";
    }
    

    if(!$_POST['birthdaytime'])
    {
        $errors['birthdaytime']="Bạn chưa chọn thời gian !";
    }

    if($_POST['email']){
        $email = ($_POST["email"]);
        if (false==filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email']=$_POST['email'];
        $errors['email'].=" là email không đúng định dạng";
     }
     
    }else{
        $errors['email'] = "Bạn chưa nhập email!";
    }
    if (strlen($_POST["pass"]) <= '8') {
        $errors['pass']= "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$_POST["pass"])) {
        $errors['pass'] = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$_POST["pass"])) {
        $errors['pass'] = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$_POST["pass"])) {
        $errors['pass'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
    
    // login process
    if($errors){
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] =  $_POST ;
      
        redirect('/baitapbuoi3-php-co-well/index.php');
       
    }


}else{
    redirect('/baitapbuoi3-php-co-well/index.php');
}
?>