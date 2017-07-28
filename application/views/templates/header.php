<!DOCTYPE html>
<html>
<head>
  <title>AquaAdmin</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/test.css">
  <script src="<?php echo base_url(); ?>assets/js/action.js"></script>
  <script src="http://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
</head>
<body>
<!-- <nav class="navbar navbar-inverse"> -->
   <nav>
    <div class="topnav">
          <div class="nav-right">
              <a href="<?php echo base_url(); ?>" class="button">帳號 <i class="fa fa-user-circle"></i></a>
              <a href="<?php echo base_url(); ?>" class="button2">登出 <i class="fa fa-sign-out"></i></a>                
         </div> 
       <div class="navbar-left">
          <div class="navbar-logo"><a href="<?php echo base_url(); ?>index.php/login/index""><img src="<?php echo base_url();?>/assets/images/aquaLogo.png" style="width: 170px;"></a></div>
          <h6 style="margin-left: 20px; margin-top: -5px;">Welcome to Aqua-Feb Admin</h6>
       </div> 
     </div>   
     </nav>
             <div class="main-section">
            <div id="navbar">
          <div class="navbar-content">
            <!--
           <form action="go_purchase" method="POST">
            <div class="tablink"><input type="submit" name="" value="查看進貨">
           </form>
            -->
            <a class="tablink" href="<?php echo base_url(); ?>index.php/purchase_controller/index">總進貨</a>
            <a class="tablink" href="<?php echo base_url(); ?>year">年度</a>
            <a class="tablink" href="<?php echo base_url(); ?>monthly">月份</a>
                </div>
               </div>
              <br>
              <br>

            <div class="container2">



