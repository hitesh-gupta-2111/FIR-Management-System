<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number], input[type=tel], input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=number]:focus, input[type=tel]:focus, input[type=date]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
     align = center;
  }
}
</style>
<body>

<form action="process.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="AadharNumber"><b>Aadhar Number</b></label>
    <input type="number" placeholder="Enter Aadhar Number" name="AadharNumber" required>

    <label for="First Name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="FirstName" required>

    <label for="Last Name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="LastName">

    <label for="Address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="Address" required>

    <label for="Crime Type"><b>Crime Type (Embezzlement, Harrasment, Murder, CyberCrime, Kidnapping, Rape, Theft, Trafficking, Ragging, ChildAbuse, Others)</b></label>
    <input type="text" placeholder="Enter Type Of Crime" name="CrimeType">

    <label for="Phone Number"><b>Phone Number</b></label>
    <input type="tel" placeholder="Enter Phone Number" name="PhoneNumber" required>

    <label for="Description"><b>Description</b></label>
    <input type="text" placeholder="Details about Crime" name="Description">

    <label for="Date Of Crime"><b>Date Of Crime</b></label>
    <input type="date" placeholder="Enter Date Of Crime" name="DateOfCrime">

    <label for="Place Of Crime"><b>Place Of Crime</b></label>
    <input type="text" placeholder="Place Of Crime" name="PlaceOfCrime">


    <!-- <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label> -->

    <!-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

    <div class="clearfix">
      <!-- <button type="button" class="cancelbtn">Cancel</button> -->
      <button type="submit" class="signupbtn"><center>SUBMIT FIR</center></button>
    </div>
  </div>
</form>

</body>
</html>
