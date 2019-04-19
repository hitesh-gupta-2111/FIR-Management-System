
<?php
  function evidence ($conn, $caseid)
  {
	$query = "SELECT *
          	FROM Evidence
          	WHERE  Evidence.Case_Id= ".$caseid ." ";
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

  echo "<h1>Table: Evidence </h1>";
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
	// $row = mysqli_fetch_array($result);
	// if ($row['First_name'] === NULL)
	// {
	//   die(" No such officer exists");
	// }
	//
	// echo '
	//   <div class="container">
	//   <h2>Cases solved by this guy </h2>
	//
	//   <table class="table table-striped">
	// 	<thead>
	//   	<tr>
	//     	<th>Case_ID</th>
	//     	<th>A no</th>
	//
	//   	</tr>
	// 	</thead>
	// 	<tbody>
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
	//   $row = mysqli_fetch_array($result);
	// }
	//
	// echo '
	// 	</tbody>
	//   </table>
	//   </div>
	// ';
  }
?>
