
<html>
  <head>
    <title> Registration form data </title>
  </head>
  <body>
    <h1> Capturing data from Assignment3 </h1>
    <?php
    if(isset($_POST['fname']) && $_POST['fname'] != "")
    {
      $fname = $_POST['fname'];
      echo("<p>First Name: $fname<br/></p>");
    }
    
    if(isset($_POST['lname']) && $_POST['lname'] != "")
    {
      $lname = $_POST['lname'];
      echo("<p>Last Name: $lname<br/></p>");
    }
    if(isset($_POST['email']) && $_POST['email'] != "")
    {
      $email = $_POST['email'];
      echo("<p>Email: $email<br/></p>");
    }
    if(isset($_POST['address']) && $_POST['address'] != "")
    {
      $address = $_POST['address'];
      echo("<p>Address: $address<br/></p>");
    }
    if(isset($_POST['Student']) && $_POST['Student'] != "")
    {
      $student = $_POST['Student'];
      echo("<p>Student?: $student<br/></p>");
    }
    if(isset($_POST['education_level']) && $_POST['education_level'] != ""){
      echo("Education Level: ".$_POST['education_level']."<br/>");
    }

    ?>
  </body>
</html>
