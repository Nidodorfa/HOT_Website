<!DOCTYPE html>

<html lang="de">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet" media="all">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script> 
  $(document).ready(function(){
      $("#menu").click(function(){
          $("#nav").slideToggle("slow");
      });
  });
  </script>
  
  <title>Haunold Orienteering Team</title>
</head>

<body class="home">
<?php    
include "config.inc.php";

//Mit der Datbenbank verbinden
$conn=mysqli_connect($db_server,$db_user,$db_passwort,$db_name);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
?>
<header>
  Haunold Orienteering Team
</header>
<nav>
  <div id="menu"><img src="bilder/menu.png" alt="Menu" height="20"></div>
  <ul id="nav">
    
    <?php
      
      $sql = "SELECT BEZEICHNUNG_DE, LINK FROM HOT_MENUPUNKTE";
      $result = mysqli_query($conn,$sql) or die (mysqli_connect_error());
    
      echo '<a href="index.html"><li>Home</li></a>';
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
		  echo '<a href="'.$row['LINK'].'"><li>'.$row['BEZEICHNUNG_DE'].'</li></a>';
        }
      
        
    ?>
  </ul>
</nav>	
<main>
  <section>
    
  </section>
</main>
<div id="clearfix"></div>
<footer id="sponsoren">
  Test
</footer>
<footer>
  &copy; Haunold Orienteering Team
</footer>

<?php
  $conn->close();
?>

</body>

</html>
