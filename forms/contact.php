<?php 
$servername = "localhost"; 
$username = "victory";
$password = "ST@alu2020";
    // Create connection 
    $conn = new mysqli($servername, $username, $password, "hack"); 
    // Check connection 
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

    
  
    //insert into the database
  
    if(isset($_POST['submit']))
  {    
      $name= $_POST["name"];
      $email = $_POST["email"];
      $nationality = $_POST["nationality"];
      $location = $_POST["location"];
      $language = $_POST["language"];
       $sql = "INSERT INTO users (name,email,nationality,location,language) 
       VALUES ('$name','$email','$nationality','$location','$language')";
       if (mysqli_query($conn, $sql)) {
          echo "Account created succesfully successfully !";
       } else {
          echo "Error: " . $sql . ":-" . mysqli_error($conn);
       }
      
  }
    $conn->close(); 
  
    ?>