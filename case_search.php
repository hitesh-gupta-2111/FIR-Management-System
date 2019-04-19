<?php
  function fetch_case_data ($conn, $caseid)
  {
    $query = "SELECT *
              FROM Registration inner join  Victim on Registration.Aadhar_Number = Victim.Aadhar_Number
              WHERE  Registration.Case_Id= ".$caseid ." ";
    // if ($caseid !== "")
    // {
    //   $query = $query . "AND (registration.Case_id= ".$caseid.")";
    //   echo $query ;
    // }
    // if ($last_name !== "")
    // {
    //   $query = $query . "AND (employees.last_name = '$last_name')";
    // }
    // if ($dept_name !== "")
    // {
    //   $query = $query . "AND (departments.dept_name = '$dept_name')";
    // }
    // else
    // {
    //   die("No data provided");
    // }
    // echo $query ;
    // Get employee details
    $result = mysqli_query($conn, $query)
      or die("Failed to query in database: " . mysqli_error($conn));


  $fields_num = mysqli_num_fields($result);

  echo "<h1>Table: Case Details </h1>";
  echo "<table border='1'><tr>";
  // printing table headers
  for($i=0; $i<$fields_num; $i++)
  {
      $field = mysqli_fetch_field($result);
      echo "<td>{$field->name}</td>";
  }
  echo "</tr>\n";
  // printing table rows
  while($row = mysqli_fetch_row($result))
  {
      echo "<tr>";

      foreach($row as $cell)
          echo "<td>$cell</td>";

      echo "</tr>\n";
  }
  mysqli_free_result($result);

  }
?>
