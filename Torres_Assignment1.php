<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Torres Fitness Solutions</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1"><img src="Caduceus.png" alt="TFS Logo" style="height: 30px;"></a>
    <a href="https://www.cdc.gov/physical-activity/php/about/index.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">First Resource</a>
    <a href="https://www.acefitness.org" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Second Resource</a>
    <a href="https://www.nsca.com" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Third Resource</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white"></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white"></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white"></a>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="index.php">Home</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="Torres_Assignment1.php">Assignment 1</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="Torres_Assignment2.php">Assignment 2</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="Torres_Assignment3.php">Assignment 3</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="index.php">Assignment 4</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="Torres_Assignment5.php">Assignment 5</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="Torres_FinalProject.php">Final Project</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="Privacy_Policy.php">Privacy Policy</a>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Basics of Physical Fitness</h1>
      <p><img src="Caduceus.png" alt="image of exercise"     width="150" height="150">
      <h2>Why Physical Fitness is important?</h2>
      <?php echo ' Basic Physical fitness is crucial because it lays the fountation for a healthy lifestyle. Regular excersice leads to improveds muscular and cardiovascular health, as well as increased ability to preform regular daily tasks with ease. Maintaining just a moderate level of physical activity not only contributes to the prevention of chronic diseases but also those of the mental variety like stress and anxiety. Overall regular physical stimuli greatly expands ones capacity to handle adversity and will gives quality of life benefits. ';?><br>
      <h2>The Essentials for Fitness Safety</h2>
      <?php echo ' Fitness safety is essential to prevent injuries and to ensure that exercise is sustainable and effective. Employing simple habits, including proper hydration, stretching and heart rate monitoring can vastly reduce the risk of a range of injuries. Utilizing the correct tools, and gear for each activity will also be instrumental to the extended lifespan of your joints and muscles. Prioritizing your safety ensures that you can continue your fitness journey without setbacks and brings with it health benefits as consistency is increased.  ';?><br>
      <h2>The different kinds of physical fitness</h2>
      <?php echo ' Physical fitnesss can be broken down into 5 broad components all of which target a different aspect of health. Muscular strenth is the training of your muscules to produce power and the exertion of force, typically achived from lifing weights of some sort. Muscular endurance is the capacity at which your muscles can produce consistent energy output of an extended period, rowwing or boxing are common activites. Cardiovascular works closely with muscular endurance but they differ in that it pertains specifically to heart and lung health so that energy levels can be maintained. Flexibility is the range of motion of your joints and muscles to reduce the risk of injury, this can be achived simply by stretching before a work out.Finally Body composition is the culmination of all aspects of health that is cut into a proportion of fat to lean tissue in the body and can be a key indicator to overall fitness levels. ';?><br> 
    </div>
    <!--
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div>
    -->
  </div>
  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">The First Tasks Before Physical Activity</h1>
      <ol>
        <li>Check your form and understand how each exercise is done properly.</li>
        <li>Warm up properly including stretching addequetly and bringing the heart rate to appropriate levels. </li>
        <li>Check all gear that will be used and ensure it's in proper working order.</li>
        <li>Hydrate before and after every session.</li>
      </ol>
      <h3>A List of Begginer Level Exercises </h3>
      <img src="crunch.jpg" alt="image of exercise"     width="150" height="150">
      <ul>
        <li>Crunches</li>
        <li>Pushups</li>
        <li>Squats</li>
        <li>Plank</li>
        </ul>
        <img src="https://ik.imagekit.io/02fmeo4exvw/exercise-library/large/304-1.jpg" alt="image of exercise via URL"     width="150" height="150">
      
    </div>
    <!--
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div>
    -->
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Extra Required Content</h1>
      <?php 
        $number1=2.5;
        $number2=7.2;
        $number3=100;
        $number4=11;
        $addition=$number1+$number2;
        $subtraction=$number1-$number2;
        $multiplication=$number1*$number2;
        $division=$number1/$number2;
        $modulus=$number3%$number4;
        echo("$number1+$number2=$addition");
        echo("$number1-$number2=$subtraction");
        echo("$number1*$number2=$multiplication");
        echo("$number1/$number2=$division");
        echo("$number3%$number4=$modulus");

      ?>
    </div>

    <!--
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div>
    -->
  </div>

  
  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a class="w3-button w3-black" href="Torres_Assignment1.php">Assignment 1</a>
      <a class="w3-button w3-hover-black" href="Torres_Assignment2.php">Assignment 2</a>
      <a class="w3-button w3-hover-black" href="Torres_Assignment3.php">Assignment 3</a>
      <a class="w3-button w3-hover-black" href="index.php">Assignment 4</a>
      <a class="w3-button w3-hover-black" href="Torres_Assignment5.php">Assignment 5</a>
      <a class="w3-button w3-hover-black" href="Torres_Assignment2.php">»</a>
    </div>
  </div>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Template is aquired from w3.css and is used in compliance with the W3C standards.</h4> 
      <?php echo "User is: " . $_SESSION["username"];?><br>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>