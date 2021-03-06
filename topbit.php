<!DOCTYPE HTML>

<html lang="en">

<?php
    
    session_start();
    include("config.php")
    
    // Connect to database
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if (mysqli_connect_errno())
        
    {
        echo "Connection failed:".mysqli_connect_error(); exit;
    }
    
?>
 


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book Review Database">
    <meta name="keywords" content="books, reading, fiction, non-fiction, genre, reviews ">
    <meta name="author" content="Ibrahim aljayab">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Nexus Book Reviews</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/bookstyle.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="images/gen_logo.png" width="150" height="150" alt="generic logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Orichid Reading</h1>
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box nav">
            <a href="index.html">Home</a> | 
            <a href="page1.html">Page 1</a> | 
            <a href="page2.html">Page 2</a> | 
            <a href="page3.html">Page 3</a> | 
            <a href="contact.html">Contact</a>
        </div>    <!-- / nav -->        
        
        <div class="box side">
        
        <h2>Search | <a class="side" href="showall.php">Show All</a></h2>
            
        <i>Type part of the title / author name id desired</i>
            
        <hr />
            
        Title Search<br />
        Author Search<br />
        Genre Search<br />
        Rating Search
            
        </div> <!-- / side bar -->
        