<?php 
session_start()
?>
<style>
    body {
        font-family: 'verdana';
        text-align: center;
        top: 50%;
        background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),url(https://res.cloudinary.com/akhisulaymaan/image/upload/v1568659398/web-001_____2_ailjds.png);
        /* height: 100vh; */
        background-size: center;
        background-size: cover;
    
    }
    
    a {
        text-decoration: none;
        color: tomato;
    
    }
    h1  {
        margin-top: 20%;
        color: purple;
        font-weight: bold;
        font-size: 250%;
    }
    
    a:hover {
        color: purple; 
    }
    
    </style>
    
    <!doctype html>
    <head>
        <title>success</title>
    </head>
    <body>
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <a href="login.signpage.html">Click Here To Sign Out?</a>
    </body>