<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="utf-8">
    <title>Car Rental Agency</title>  
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <script src="<?php echo base_url('assets/js/jquery-3.1.0.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

<style>
    body{
        /* background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)),  url(images/image1.jpg); */
        background: url(images/image13.jpg);
        background-attachment: fixed; 
        font-family: 'Open Sans', sans-serif;
        background-size: cover;
    }
    
    h1{
        color: dark !important;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 400;
        text-align: center;
    }
    
    .myform{
        background: whitesmoke; 
        opacity: 0.8;  /*just remove this line or change it to 0.9 or 0.7*/
        width: 60%;
        height: auto;
        padding: 25px 25px 25px 25px;
        border-radius: 10px;
        margin: auto;
    }




</style>

</head>
<body id="userlogin">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo site_url('Welcome');?>">Car Rental Agency</a>
    </nav>
    
