<html>
  <head>
    <title>DBMS Project</title>
  </head>
  <body>
    <?php
      $conn = new mysqli('localhost', 'ashish', 'Ashish@123', 'fir_management');
      if ($conn->connect_error)
      {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "
        INSERT INTO Registration (Aadhar_Number, First_Name, Last_Name, Address, Crime_Type, Phone_Number, Description, Date_Of_Crime, Place_Of_Crime)
        VALUES (" . $_POST["AadharNumber"] . ', "' . $_POST["FirstName"] . '", "' . $_POST["LastName"] . '", "' . $_POST["Address"] . '", "' . $_POST["CrimeType"] . '",' .$_POST["PhoneNumber"] . ',"'
        . $_POST["Description"] . '", "' . $_POST["DateOfCrime"] . '", "' . $_POST["PlaceOfCrime"] . '")
      ';

      if($conn->query($sql) == TRUE)
      {
        echo "<br><br><center><h2>New record created successfully</h2><br></center>";
      }
      else {
        echo '<span style="color: #ff0000;">Error: ' . $conn->error . "</span><br>";
      }

      $sql = "SELECT max(Case_Id) FROM Registration";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
          echo '<center><h3>Your CaseId is </h3></center>';
          echo '<center><h3><font color = red>'.$row["max(Case_Id)"].'</font></h3></center>';
          echo '<center><h3>Remember this for future reference </h3></center><br>';
//echo '<a href="https://www.w3schools.com/html/">Visit our HTML tutorial</a>';

        }
      }
      else {
        echo "0 results";
      }
      //<a href="https://www.w3schools.com/html/">Visit our HTML tutorial</a>
//       <div class="box">
    // <a href="http://www.someotherwebsite.com">
    //     <img src="file_location/media/img/twitter.png" alt="Image Decription">
    // </a>
// </div>
  $conn->close();
    ?>
    <center>
    <a href="login.php">Go to the Main Page</a>
  </center>
  <hr>
  </body>
</html>
