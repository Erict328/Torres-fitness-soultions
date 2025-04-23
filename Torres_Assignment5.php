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
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white"></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white"></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white"></a>
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
      <h1 class="w3-text-teal">Who is Jeff Nippard?</h1>
      <p>Jeff Nippard is a popular fitness influencer, bodybuilder, and science-based fitness educator known for his evidence-driven approach to training and nutrition. With a background in kinesiology, Jeff combines his academic knowledge with practical experience to provide insightful and accessible content on YouTube and other platforms. He covers a wide range of topics including muscle growth, strength training, fat loss, and health optimization, all while breaking down complex fitness concepts into easy-to-understand advice. Jeff's goal is to help individuals reach their fitness goals through intelligent, well-researched methods, making him a trusted source in the fitness community.</p> 
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
      <h1 class="w3-text-teal">Video Resource </h1>
      <p><iframe width="560" height="315" src="https://www.youtube.com/embed/M4K0s792wAU?si=2E-KkXW9dFqlP7Xd" title="YouTube video player" style="border: none;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
      <h1 class="w3-text-teal">Self Assesment</h1>
      <p>Please specify at which level in your fitness journey you are at based upon the information in the video.
      
      <form action="form3Data.php" method="post">
        <fieldset>
        
        Steroid user: <input type="radio" name="Steroid" id="Steroid" value="Uses Steroids" required>
        Non-Steroid user: <input type="radio" name="Steroid" id="nSteroid" value="Does Not Use Steroids" required><br>
        Fitness Level: <select name="fitness_level" required>
          <option value="">Select your fitness level</option>
          <option value="New Lifter">New Lifter</option>
          <option value="Overweight/Obese">Overweight/Obese</option>
          <option value="Detrainee">Detrainee</option>
          <option value="Sub-optimized">Sub-optimized</option>
          <option value="Optimized">Optimized</option>
        </select><br>
        <input type="submit" value ="Submit Form">
        </fieldset>
      </form>

      
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
      <a class="w3-button w3-hover-black" href="Torres_FinalProject.php">»</a>
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