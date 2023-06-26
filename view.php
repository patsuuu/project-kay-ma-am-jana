<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url('https://img.freepik.com/free-photo/green-slate_1205-377.jpg?1&w=740&t=st=1687790184~exp=1687790784~hmac=6ea88ec472b2d1a743976b11ed66b5832ef43918279c100ca96ac70b2f357e4d');
}
</style>
	<title>View</title>
	
</head>
<body>
     <a href="home.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['image_url']?>">
             </div>
          		
    <?php } }?>
</body>
</html>