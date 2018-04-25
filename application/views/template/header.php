<!-- 
* Developed and Designed by Shahnewaz Ahmed
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>User Authentication</title>
    <!--<link rel="icon" type="image/gif" href="<?php echo base_url(); ?>assets/images/logo.jpg" />-->

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    
    <!-- jquery-ui 1.12.1 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery-ui/jquery-ui.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Authentication</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="#">Documentation</a></li>
            <li><a href="#">Learn</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <?php if($this->session->userdata('phone') != "") { ?>
                <li><a href="<?php echo base_url(); ?>HomeController/profile"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('name'); ?></a></li>
                <li><a href="<?php echo base_url(); ?>logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            <?php } else { ?>
                <li><a href="<?php echo base_url(); ?>signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="<?php echo base_url(); ?>login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php } ?>

          </ul>
        </div>
      </div>
    </nav>
    
        
