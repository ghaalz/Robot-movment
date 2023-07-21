<html> 
<head> 
  <meta charset="utf-8">
</head>
<body>    
  <?php
    
    

   $move = $_POST["move"];
   $right = $_POST["move"]=="right";
   $left = $_POST["move"]=="left";
   $forward = $_POST["move"]=="forward";
   $backward = $_POST["move"]=="backward";
   

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

    print("<h2>$move</h2>");
    
    $conn->close();
    
  ?> 
</body>
</html> 