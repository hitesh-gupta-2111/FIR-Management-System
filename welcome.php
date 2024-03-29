<?php
   include('session.php');
?>
<html>

   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <title>Admin Query Search </title>
   </head>

   <body>
     <div class="container">
       <h1 class="text-center"><u>FIR Management System</u></h1>
       <br>

       <form name="form1" method="post" action="handle_req.php">

         <h2> Case Details: </h2>
         <br>
         <h5> Case ID: </h5>
         <div class="form-row">
           <div class="col">
             <input type="text" name="caseid" class="form-control" placeholder="Enter Case Id...">
           </div>
         </div>
         <br>
         <div class="form-group row">
           <div class="col-sm-10">
             <input type="submit"  name="cased_cid" value="Get details" class="btn ">
           </div>
         </div>

         <h5> Victim Name: </h5>
         <div class="form-row">
           <div class="col">
             <input type="text" name="vname" class="form-control" placeholder="Enter Victim Name...">
           </div>
         </div>
         <br>
         <div class="form-group row">
           <div class="col-sm-10">
             <input type="submit"  name="cased_vic" value="Get details" class="btn "/>
           </div>
         </div>

         <h5> Fill case_id for getting Witness-suspect-evidence: </h5>
         <div class="form-row">
           <div class="col">
             <input type="text" name="case_id2" class="form-control" placeholder="Enter Case Id...">
           </div>
         </div>
         <br>
         <div class="form-group row">
           <div class="col-sm-10">
             <input type="submit"  name="cased_wit" value="Get details" class="btn "/>
           </div>
         </div>

         <!-- <h5> Police past cases </h5>
      <div class="form-row">
        <div class="col">
          <input type="text" name="inchargeid" class="form-control" placeholder="Enter Police ID...">
        </div>
      </div>
      <br>
      <div class="form-group row">
        <div class="col-sm-10">
          <input type="submit"  name="policeid" value="Get details" class="btn "/>
        </div>
      </div> -->

 <h5> Last 5 years cases </h5>
      <div class="form-row">
        <div class="col">
          <input type="text" name="crime_type" class="form-control" placeholder="Enter Police ID...">
        </div>
      </div>
      <br>
      <div class="form-group row">
        <div class="col-sm-10">
          <input type="submit"  name="crime_name" value="Get details" class="btn "/>
        </div>
      </div>

      <h5> Find Case Id's of a particular Crime </h5>
     <div class="form-row">
       <div class="col">
         <input type="text" name="critype" class="form-control" placeholder="Enter Criminal Type...">
       </div>
     </div>
     <br>
     <div class="form-group row">
       <div class="col-sm-10">
         <input type="submit"  name="typeof" value="Get details" class="btn "/>
       </div>
     </div>

     <h5> Criminal Record </h5>
     <div class="form-row">
       <div class="col">
         <input type="text" name="criminalid" class="form-control" placeholder="Enter Criminal ID...">
       </div>
     </div>
     <br>
     <div class="form-group row">
       <div class="col-sm-10">
         <input type="submit"  name="crimid" value="Get details" class="btn "/>
       </div>
     </div>

     <h2> Registered Cases </h2>
      <br>
      <h5> Date: </h5>
      <div class="form-row">
        <div class="col">
          <input type="date" name="date" class="form-control" placeholder="Enter Date">
        </div>
      </div>
      <br>
      <div class="form-group row">
        <div class="col-sm-10">
          <input type="submit"  name="reg_cases" value="Get details" class="btn ">
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh5U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>

</html>
