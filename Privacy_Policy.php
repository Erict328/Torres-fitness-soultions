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
<?php
$_SESSION["username"] = "Eric_user";
?>
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
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Final Project</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="Privacy_Policy.php">Privacy Policy</a>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Privacy Policy</h1>
      <p>Privacy Policy

      

      At [Your Company Name] ("we," "us," or "our"), we value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website [insert website URL], use our services, or engage with us in other ways. By accessing or using our website, you agree to the collection and use of information in accordance with this Privacy Policy.

      We may collect various types of information, including personal information such as your name, email address, phone number, and any other details you provide when contacting us or creating an account. Additionally, we collect usage data, such as your IP address, browser type, operating system, and other information regarding how you interact with our website. We also use cookies and similar technologies to track your activity on our website, which helps us enhance your experience and improve our services.

      We use the information we collect for several purposes, including providing and maintaining our services, communicating with you, responding to inquiries, analyzing and improving our website and services, and complying with legal obligations. We do not sell or rent your personal information to third parties. However, we may share your information with service providers or business partners who assist us in operating our website or providing our services. We may also share your information to comply with legal requirements or respond to legal requests from authorities, and in connection with a business transfer, such as a merger or acquisition.

      We take reasonable precautions to protect your personal information from unauthorized access, use, or disclosure, though no method of transmission over the internet or electronic storage is completely secure, and we cannot guarantee absolute security. Depending on your location, you may have certain rights regarding your personal data, such as the right to access, update, or delete your personal information. If you wish to exercise these rights or have any questions about how we handle your data, please contact us at [insert contact email].

      To enhance your experience, we use cookies and similar tracking technologies on our website. A cookie is a small file placed on your device to collect information about your activity on our site. We use several types of cookies, including essential cookies that are necessary for the operation of our website, performance cookies that help us analyze how visitors use our website, functional cookies that allow the website to remember your preferences, and advertising cookies that deliver targeted advertising based on your interests. You can control cookies through your browser settings, where you can choose to disable cookies or be alerted when they are being sent. However, disabling cookies may affect the functionality of some parts of our website.

      Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of those websites and encourage you to review their privacy policies. We reserve the right to update or modify this Privacy Policy at any time, and any changes will be posted on this page with an updated effective date. We encourage you to review this Privacy Policy periodically for any changes.

      If you have any questions or concerns about this Privacy Policy, please contact us using the information provided on our contact us page.
      
      Effective Date: 04/5/2025
      </p> 
    </div>
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
      <h1 class="w3-text-teal">Cookies agreement</h1>
      <p><form action="form4Data.php" method="post">
        <fieldset>

        Allow Cookies: <input type="radio" name="Cookie" id="Cookies" value="Yes" required>
        Do not allow Cookies: <input type="radio" name="Cookie" id="nCookies" value="No" required><br>
        
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

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Sources</h1>
      <p>Sources for this websites information and links to their origin.
      </p>

      <ul>
        <li>CDC. (2024, May 10). About Physical Activity. Physical Activity. https://www.cdc.gov/physical-activity/php/about/index.html

        ‌</li>
        <li>ACE | Certified Personal Trainer | ACE Personal Trainer. (n.d.). Www.acefitness.org. https://www.acefitness.org

        ‌</li>
        <li>National Strength and Conditioning Association (NSCA). (n.d.). Www.nsca.com. https://www.nsca.com

        ‌</li>
        <li>Jeff Nippard. (2023, October 17). The 5 Levels of Fitness - What They Are and How to Improve Yours - Jeff Nippard. YouTube. https://www.youtube.com/embed/M4K0s792wAU?si=2E-KkXW9dFqlP7Xd</li>
      </ul>
      
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Owner Statement</h1>
      <p>This semester i learned how intricate the web can be and how much work goes into making a simple webpage. I learned how to use HTML, CSS, and PHP to create a website that is both functional and aesthetically pleasing. I also began using GitHub to manage my programming portfolio and how to use it to track my changes. I am proud of the work that I have done this semester and I am excited to continue learning and growing as a programmer. The next step for me is to refine my skills in python and use it to further myself in the machine learning world. I am looking forward to using my skills learned this semester to create a website for my families small business and to help them grow their online presence. I plan to use my code from this website as a template for future projects and a guide for future projects asa well as add to my github portfolio. The most difficult part of the course was learning how to keep organized and easy to maintain code throughout the project. The course flowed smoothly and I count this call as one of the most concise and well taught courses I have taken.
      </p>

     

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
      <a class="w3-button w3-hover-black" href="#">»</a>
    </div>
  </div>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Template is aquired from w3.css and is used in compliance with the W3C standards. </h4> 
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