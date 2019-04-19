<?php
   include("config2.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;

         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>

   <head>
      <title>Main Page</title>

      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>

   </head>

   <body bgcolor = "#FFFFFF">
     <h3 style="color:blue;"><center>To file an FIR click here</center></h3>
     <form action="try.php" method="get" align="center">
     <input type="submit" value="Open Form">
     </form>



     <br><br>
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

            <div style = "margin:30px">

               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>



            </div>

         </div>

      </div>
 <br><br>
       <center>
              <form name="form1" method="post" action="handle_req.php">
           <h3> Enter Case ID to check your Case Status: </h3>
           <br>
           <div class="form-row">
             <div class="col">
               <input type="text" name="caseid2" class="form-control" placeholder="Enter Case Id...">
             </div>
           </div>
           <br>
           <div class="form-group row">
             <div class="col-sm-10">
               <input type="submit"  name="cased_cid2" value="Get details" class="btn ">
             </div>
           </div>
         </center>

   </body>
</html>
