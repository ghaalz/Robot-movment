<html> 
<head> 
  <meta charset="utf-8">
</head>
<body>    
  <?php
    
    

   $move = $_POST["move"];
   $stop = $_POST["stop"];
   

    $servername = "localhost";
    $username = "root" ;
    $password = "" ;
    $db = "directions";

    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO directions (name) 
    VALUES ('$move')";

    if ($conn->query($sql) === TRUE) {
     echo " ";
    } 
    else {
     echo "Error" . $conn->error;
    }

    $sql = "SELECT name FROM directions"; 
    $result = mysqli_query($conn, $sql); 
     
    if(isset($_POST["stop"])) {
    if (mysqli_num_rows($result) > 0) { 
      if ($row = mysqli_fetch_assoc($result)) { 
          echo " last direction is: " . $row["name"]. "<br>"; 
      } 
      echo "s";
  }  }

    print("<h2>$move</h2>");
    
    $conn->close();
    
  ?> 
</body>
</html> 
