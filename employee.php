<?php

require 'db_conn.php';

if(isset($_POST["submit"])){
  $fname = $_POST["fname"];
  $mname = $_POST["mname"];
  $lname = $_POST["lname"];
  $remarks = $_POST["remarks"];
  $status = $_POST["status"];
 

  
  }

  $query = "INSERT INTO employee VALUES('', '$fname', '$mname', '$lname', '$remarks', '$status')";

  mysqli_query($conn,$query);
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <style>
body {
  background-image: url('');
}
</style>
  <style>
    
      form {
  border-style: solid;
  border-width: medium;
  position: relative;
  height: 450px;
  width:28%;
  bottom: 10px;
  padding:  30px;
  font-size: 20px;
  line-height: 2;
  background-color: gray;
  margin-left: auto; 
  margin-right: auto;
}
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Timesnewroman;
  font-size: 20px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}
.s {
  position: fixed;
}

.content {
  position: fixed;
  width: 100%;
  
  
}


#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

      </style>
       <video autoplay muted loop id="myVideo">
  <source src="https://cdn.discordapp.com/attachments/1038080109070004254/1114813977919225946/gsgas-highlight.mp4" type="video/mp4">
</video>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
  
<div class="content">
  <center><h2>"FORM"</h2></center>
  <div class="s">
    <a href="indexx.php">&#8592;</a>
</div>
    <form class="" action="" method="post" autocomplete="off">
    <center>  
      <label for="fname">Firstname:</label>
      <input type="text" name="fname" required value="">

<label for="mname">Middlename:</label>
      <input type="text" name="mname" required value="">
<label for="lname">Lastname:</label>
      <input type="text" name="lname" required value="">
<label for="remarks">Remarks:</label>
      <input type="text" name="remarks" required value="">
<label for="status">Status:</label>
      <input type="text" name="status" required value="">
</center>

      <br>
      <center><button type="submit" name="submit">Submit</button></center>
      <a href="indexxxxx.php">View</a>
      
      </div>    
    
    </form>
  </body>
</html>