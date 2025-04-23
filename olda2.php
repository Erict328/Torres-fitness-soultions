<html>
  <head>

    <title>PHP Test [Eric Torres] </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
<div id="container">
    <div id="header">
    <h2>Contact Us</h2>

    </div>
  <body>
<div id="main">
     <img src="Caduceus.png" alt="image of exercise"     width="150" height="150"> <br>
    <img src=TFSlogo.png alt="logo" width="500" height="150"><br>

    <?php
    echo "This is a contact page where you can get in touch with the training staff who run the fitness page. Here, you can ask questions related to fitness and health and expect an intelligent response from a team member in a timely manner. User feedback and suggestions for improvement are also welcome. This is our prefered means of communication, but here are other ways to get in contact with our team. Thank you for your interaction, and we look forward to receiving your questions and comments! <br>";
    ?>

    <ul>
      <li>Email address: TorresFitness@gmail.com</li>
      <li>Phone number: 850-111-2345</li>
      <li>Address: 1100 Imaginary Hwy 11111 Fake city FL</li>
    </ul>
<p>
    <form action="form2Data.php" method="get">
      <fieldset>
      First Name: <input type="text" name="fname" id="fname" required><br> 
      Middle Name: <input type="text" name="mname" id="mname" ><br>
      Last Name: <input type="text" name="lname" id="lname" required><br>
      Email: <input type="email" name="email" id="email" required><br>
      Subject: <input type="text" name="subject" id="subject" ><br>
      Message:<br/>
      <textarea name="message" id="message" rows="4" cols="40"  required>
        Type message here.
      </textarea><br>
      <div style="text-align: right; margin-top: 10px;">
        <input type="submit" value="Submit Form" id="button">
      </div>
      </fieldset>
    </form>
</p>
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