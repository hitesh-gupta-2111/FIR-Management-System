<?php
  function fetch_vic_data ($conn, $vname)
  {
    $query = "SELECT Victim.First_name, Registration.Aadhar_Number
              FROM Registration inner join  Victim on Registration.Aadhar_Number = Victim.Aadhar_Number
              WHERE  Victim.First_name= '".$vname ."'";
    // if ($caseid !== "") victim.First_name, registration.Adhar_No
    // { registration.Adhar_No = victim.Adhar_No AND
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

      // $row is array... foreach( .. ) puts every element
      // of $row to $cell variable
      foreach($row as $cell)
          echo "<td>$cell</td>";

      echo "</tr>\n";
  }
  mysqli_free_result($result);
    // $row = mysqli_fetch_array($res);
    // if ($row['First_name'] === NULL)
    // {
    //   die(" No such employee exists");
    // }
    //
    // echo '
    //   <div class="container">
    //   <h2>Employee Search</h2>
    //
    //   <table class="table table-striped">
    //     <thead>
    //       <tr>
    //         <th>First Name</th>
    //         <th>A no</th>
    //
    //       </tr>
    //     </thead>
    //     <tbody>
    // ';
    //
    // while ($row !== NULL)
    // {
    //   echo '
    //   <tr>
    //   <td>' . $row['First_name'] . ' </td>
    //   <td>' . $row['Adhar_No'] . ' </td>
    //
    //   </tr>';
    //
    //   $row = mysqli_fetch_array($res);
    // }
    //
    // echo '
    //     </tbody>
    //   </table>
    //   </div>
    // ';
  }
?>
