
<html>
  <head>
    <title> Capture form data </title>
  </head>
  <body>
    <h1> Capturing data from index.php </h1>
    <?php
    if(isset($_GET['fname']) && $_GET['fname'] != "")
    {
      $fname = $_GET['fname'];
      echo("<p>First Name: $fname<br/></p>");
    }
    if(isset($_GET['mname']) && $_GET['mname'] != "")
    {
      $mname = $_GET['mname'];
      echo("<p>Middle Name: $mname<br/></p>");
    }
    if(isset($_GET['lname']) && $_GET['lname'] != "")
    {
      $lname = $_GET['lname'];
      echo("<p>Last Name: $lname<br/></p>");
    }
    if(isset($_GET['email']) && $_GET['email'] != "")
    {
      $email = $_GET['email'];
      echo("<p>Email: $email<br/></p>");
    }
    if(isset($_GET['subject']) && $_GET['subject'] != "")
    {
      $subject = $_GET['subject'];
      echo("<p>Subject: $subject<br/></p>");
    }
    if(isset($_GET['message']) && $_GET['message'] != "")
    {
      $message = $_GET['message'];
      echo("<p>Message: $message<br/></p>");
    }
    
    ?>
  </body>
</html>
