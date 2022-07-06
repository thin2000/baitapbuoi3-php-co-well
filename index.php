<?php
session_start();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
  @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
  
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
padding : 50px 0;
}
.banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);
  width: 50%;
}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}
.invalid-feedback1 {
    /* display: none; */
    width: 100%;
    margin-top: 0.25rem;
    font-size: 80%;
    color: #dc3545;
}
  </style>
<section class="login-block">
    <div class="container">

  <div class="">
    <div class=" login-sec">
        <h2 class="text-center">Đăng ký tài khoản</h2>
        <form class="login-form" action="register_pr.php" method="post">
          <div class="row">
          <div class="col-md-8">
  <div class="form-group">
    <label  class="text-uppercase">Tên đăng nhập</label>
    <input type="text" name="name" class="form-control" placeholder="tên đăng nhập" value="<?php if(isset($_SESSION['old']['name'])) {
              echo $_SESSION['old']['name'];
              } ?>">
    <div class="invalid-feedback1">
              <?php 
              if(isset($_SESSION['errors']['name'])){

              echo $_SESSION['errors']['name'];
             
              }
              ?>
              
            </div>
  </div>
  </div>
  <div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control " placeholder="mật khẩu" name="pass" value="<?php if(isset($_SESSION['old']['pass'])) {
              echo $_SESSION['old']['pass'];
              } ?>">
    <div class="invalid-feedback1">
              <?php 
              if(isset($_SESSION['errors']['pass'])){

              echo $_SESSION['errors']['pass'];
             
              }
              ?>
              
            </div>
  </div>
  </div>
  
  </div>
  <div class="row">
          <div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Email</label>
    <input type="text" class="form-control  <?php

if(isset($_SESSION['errors']['email'])):?>is-invalid<?php endif?>
?>" placeholder="email" name="email" value="<?php if(isset($_SESSION['old'])) {
              echo $_SESSION['old']['email'];
              } ?>">
    <div class="invalid-feedback1">
              <?php 
              if(isset($_SESSION['errors']['email'])){

              echo $_SESSION['errors']['email'];
             
              }
              ?>
              
            </div>
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label  class="text-uppercase">Số điện thoai</label>
    <input type="number" class="form-control" placeholder="số điện thoai" name="sdt" value="<?php if(isset($_SESSION['old']['sdt'])) {
              echo $_SESSION['old']['sdt'];
              } ?>">
    <div class="invalid-feedback1">
              <?php 
              if(isset($_SESSION['errors']['sdt'])){

              echo $_SESSION['errors']['sdt'];
             
              }
              ?>
              
            </div>
  </div>
  </div>
  
  </div>
  
  <div class="row">
          <div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Địa chỉ</label>
    <input type="text" class="form-control" placeholder="địa chỉ" name="diachi" value="<?php if(isset($_SESSION['old']['diachi'])) {
              echo $_SESSION['old']['diachi'];
              } ?>">
    <div class="invalid-feedback1">
              <?php 
              if(isset($_SESSION['errors']['diachi'])){

              echo $_SESSION['errors']['diachi'];
             
              }
              ?>
              
            </div>
    
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label  class="text-uppercase">Năm sinh</label>
    <input type="datetime-local" id="birthdaytime" name="birthdaytime" class="form-control"value="<?php if(isset($_SESSION['old']['diachi'])) {
              echo $_SESSION['old']['birthdaytime'];
              } ?>" >
    <div class="invalid-feedback1">
              <?php 
              if(isset($_SESSION['errors']['birthdaytime'])){

              echo $_SESSION['errors']['birthdaytime'];
             
              }
              ?>
              
            </div>
  </div>
  </div>
  
  </div>
  <div class="row">
    <div class="col-md-6">
  <label  class="text-uppercase">giới tính</label>
  <div class="row">
 
  <div class="form-check">
    <div class="col-md-3">
  <input class="form-check-input" type="radio" id="check1" name="option1" value="something" checked>
  <label class="form-check-label">Nam </label>
</div>
</div>
<div class="col-md-3">
<div class="form-check">
  <input class="form-check-input" type="radio" id="check1" name="option1" value="something" >
  <label class="form-check-label">Nữ</label>
</div>

</div>
</div>


</div>
</div>
<div class="text-center">
<button type="submit" class="btn btn-primary">Đăng ký </button>
</div>
</form>

    
  </div>
</div>
</section>         
<?php
unset($_SESSION['errors']);
unset($_SESSION['old']);
?>