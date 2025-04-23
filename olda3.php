<html>
  <head>

    <title>PHP Test [Eric Torres] </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  <div id="container">  
    <div id="header">
    <h2>Registration Form</h2>
    </div>
</head>

  <body>
<div id="main">
     <img src="Caduceus.png" alt="image of exercise"     width="150" height="150"> <br>

      <form action="form3Data.php" method="post">
        <fieldset>
        First Name: <input type="text" name="fname" id="fname" required><br> 
        Last Name: <input type="text" name="lname" id="lname" required><br>
        Email: <input type="email" name="email" id="email" required><br>
        Address: <input type="text" name="address" id="address" required><br>
        Student: <input type="radio" name="Student" id="Student" value="Is Student" required>
        Non-Student: <input type="radio" name="Student" id="nStudent" value="Not Student" required><br>
        Education Level: <select name="education_level" required>
          <option value="High School">High School</option>
          <option value="Some College">Some College</option>
          <option value="Bachelors Degree">Bachelors Degree</option>
          <option value="Masters Degree">Masters Degree</option>
          <option value="Doctorate Degree">Doctorate Degree</option>
        </select><br>
        <input type="submit" value ="Submit Form">
        </fieldset>
      </form>

    <table>
      <tr>
        <th></th>
      </tr>

      <?php
      echo "After submitting the registration form online, you will receive a confirmation email containing your registration details and further instructions on how to complete your account setup. Our team will be happy to assist you in completing your registration process. Please ensure that all required information, including your full name, address, and email, is provided to ensure a smooth registration experience. <br>";
      ?>
    </div>

      <div id="content"
      <div id="nav">
        <h3>Navigation</h3>
        <ul class= "menu">
         <li><a href="index.php">Home (index.php)</a></li>
         <li><a href="Torres_Assignment1.php">Assignment 1</a></li></a></li>
         <li><a href="Torres_Assignment2.php">Assignment 2</a></li></a></li>
         <li><a href="Torres_Assignment3.php">Assignment 3</a></li></a></li>
         <li><a href="index.php">Assignment 4</a></li>
         <li><a href="#">Assignment 5</a></li>
         <li><a href="#">Final Project</a></li>
         <li><a href="#">Privacy Policy</a></li>

        </ul>
      </div>


  </body>



</html>