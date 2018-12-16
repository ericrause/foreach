<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RSS READER</title>
    <link rel="stylesheet" href="/bootstrap/css/theme.css" />
    <script src="/application/jQuery/jQuery.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="#">RSS READER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>links/addLink">addLink</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>links">links</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <?php
                if (($_SESSION['active'] ?? false) === true) {
                    echo '<a class="nav-link" href="'. base_url().'logout" >logout</a>';
                } else {
                ?>
                <a class="nav-link" href="<?php echo base_url(); ?>login" >login</a>
                <a class="nav-link" href="<?php echo base_url(); ?>signup" >sign up</a>
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
<!--                    <a class="nav-link" href="--><?php //echo base_url(); ?><!--">Home <span class="sr-only">(current)</span></a>-->
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





<div class="container mt-5" id="content">