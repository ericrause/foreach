<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RSS READER</title>
    <link rel="stylesheet" href="/bootstrap/css/theme.css"/>
    <script src="/application/jQuery/jQuery.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand">RSS READER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <?php
                if ((isset($_SESSION['active']) ? $_SESSION['active'] : false) === false) {
                    echo '<li class="nav-item active">';
                    echo '<a class="nav-link" href="';
                    echo base_url();
                    echo '">Home <span class="sr-only">(current)</span></a></li>';
                } ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>links/addLink">Add Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>links">Show links</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <?php
                if ((isset($_SESSION['active']) ? $_SESSION['active'] : false) === true) {
                    echo ' <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">hello, ' . $_SESSION['username'] . '</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
      <a class="dropdown-item" href="#">Profile</a>
      <a class="dropdown-item" href="#">Help</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="' . base_url() . '">Logout</a>
    </div>
  </li>';
                } else {
                    ?>
                    <a class="nav-link" href="<?php echo base_url(); ?>login">Login</a>
                    <a class="nav-link" href="<?php echo base_url(); ?>signup">Sign up</a>
                <?php } ?>
            </ul>


        </div>
    </div>
</nav>


<!--    <div class="container">-->
<!--        <a href="../" class="navbar-brand">RSS READER</a>-->
<!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarResponsive">-->
<!--            <ul class="navbar-nav">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="-->
<?php //echo base_url(); ?><!--">Home <span class="sr-only">(current)</span></a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?php //echo base_url(); ?><!--posts">Posts</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?php //echo base_url(); ?><!--links/addLink">addLink</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?php //echo base_url(); ?><!--links">links</a>-->
<!--                </li>-->
<!--            </ul>-->
<!---->
<!--            <ul class="nav navbar-nav ml-auto">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?php //echo base_url(); ?><!--" >login</a>-->
<!--                    <a class="nav-link" href="--><?php //echo base_url(); ?><!--" >sign up</a>-->
<!--                </li>-->
<!--            </ul>-->
<!---->
<!--        </div>-->
<!--    </div>-->


<div class="container mt-5 w-75" id="content">