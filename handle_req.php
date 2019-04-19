<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include 'case_search.php';
    include 'vic_search.php';
    include 'wit_sus_evid.php';
    include 'police_pastcases.php';
    include 'past_case_crimewise.php';
    include 'crimetype.php';
    include 'criminal.php';
    include 'datewise.php';
    include 'evi.php';
    include 'case_stat.php';
    $database = include('config.php');
    // Create connection
    $conn = new mysqli($database['host'], $database['user'], $database['pass'], $database['name']);
    // Check connection
    if ($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }


      echo "<title>FIR Management System</title>";

  ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  if (isset($_POST['cased_cid2']))
  {
    // if (preg_match("/^[0-9]*$/", $_POST['caseid'])
    // {
        fetch_case_status($conn, $_POST['caseid2']);
    // }
  }
    if (isset($_POST['cased_cid']))
    {
      // if (preg_match("/^[0-9]*$/", $_POST['caseid'])
      // {
          fetch_case_data($conn, $_POST['caseid']);
      // }
    }
    if (isset($_POST['cased_vic']))
    {
      // if (preg_match("/^[0-9]*$/", $_POST['caseid'])
      // {
          fetch_vic_data($conn, $_POST['vname']);
      // }
    }
    if (isset($_POST['cased_wit']))
    {
      // if (preg_match("/^[0-9]*$/", $_POST['caseid'])
      // {
          fetch_witness_data($conn, $_POST['case_id2']);
      // }
    }

    if (isset($_POST['policeid']))
  	{
    	// if (preg_match("/^[0-9]*$/", $_POST['caseid'])
    	// {
        	poilce_past_cases($conn, $_POST['inchargeid']);
    	// }
  	}
    if (isset($_POST['crime_name']))
  	{
    	// if (preg_match("/^[0-9]*$/", $_POST['caseid'])
    	// {
        	past_crime_cases($conn, $_POST['crime_type']);
    	// }
  	}


if (isset($_POST['evidence_found']))
  	{
    	// if (preg_match("/^[0-9]*$/", $_POST['caseid'])
    	// {
        	evidence($conn, $_POST['caseid']);
    	// }
  	}

    if (isset($_POST['typeof']))
  	{
    	// if (preg_match("/^[0-9]*$/", $_POST['caseid'])
    	// {
        	crimetype($conn, $_POST['critype']);
    	// }
  	}

    if (isset($_POST['crimid']))
  	{
    	// if (preg_match("/^[0-9]*$/", $_POST['caseid'])
    	// {
        	criminal_records($conn, $_POST['criminalid']);
    	// }
  	}

    if (isset($_POST['reg_cases']))
  	{
    	// if (preg_match("/^[0-9]*$/", $_POST['caseid'])
    	// {
        	reg_cases($conn, $_POST['date']);
    	// }
  	}
      // elsevi
      //   {
      //     die("Incorrect inputs For case search");
      //   }


    // elseif (isset($_POST['larg_dept']))
    // {
    //   $largest = get_largest_department($conn);
    //   echo "<br><h3 class='text-center'>Largest department: " . ucwords($largest['dept_name']) . ", No. of Employees : " . $largest['count'] . "<h3>" ;
    // }
    //
    // elseif (isset($_POST['dept_det']))
    // {
    //   if (preg_match("/^[A-Za-z]+$/", $_POST['department']))
    //   {
    //     echo '<h1 class="text-center"><u>Department of ' . ucwords($_POST['department']) . '</u></h1>';
    //     get_tenure_ordered($conn, $_POST['department']);
    //   }
    //   else
    //     die("Incorrect Department Name");
    // }
    // elseif (isset($_POST['gr_dept_det']))
    // {
    //   if (preg_match("/^[A-Za-z]+$/", $_POST['gr_department']))
    //   {
    //     $gr = get_gender_ratio($conn, $_POST['gr_department']);
    //     echo "<br><h3 class='text-center'>Gender ratio (females/males) in " .  ucwords($_POST['gr_department']) . " department = " . $gr . '<h3>' ;
    //   }
    //   else
    //     die("Incorrect Department Name");
    // }
    // elseif (isset($_POST['gpr_dept_det']))
    // {
    //   if (preg_match("/^[A-Za-z]+$/", $_POST['gpr_department']))
    //   {
    //     $gpr = get_pay_ratio($conn, $_POST['gpr_department']);
    //     echo "<br><h3 class='text-center'>Gender pay ratio (females/males) in " .  ucwords($_POST['gpr_department']) . " department = " . $gpr . '<h3>' ;
    //   }
    //   else
    //     die("Incorrect Department Name");
    // }
  ?>
</body>
</html>
