<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>Assignment 1</title>
    </head>
    
    <body>
      <h1>Basics of Physical Fitness</h1>
      <img src="Caduceus.png" alt="image of exercise"     width="150" height="150">
      <h2>Why Physical Fitness is important?</h2>
      <?php echo '<p> Basic Physical fitness is crucial because it lays the fountation for a healthy lifestyle. Regular excersice leads to improveds muscular and cardiovascular health, as well as increased ability to preform regular daily tasks with ease. Maintaining just a moderate level of physical activity not only contributes to the prevention of chronic diseases but also those of the mental variety like stress and anxiety. Overall regular physical stimuli greatly expands ones capacity to handle adversity and will gives quality of life benefits. </p>';?><br>
      <h2>The Essentials for Fitness Safety</h2>
      <?php echo '<p> Fitness safety is essential to prevent injuries and to ensure that exercise is sustainable and effective. Employing simple habits, including proper hydration, stretching and heart rate monitoring can vastly reduce the risk of a range of injuries. Utilizing the correct tools, and gear for each activity will also be instrumental to the extended lifespan of your joints and muscles. Prioritizing your safety ensures that you can continue your fitness journey without setbacks and brings with it health benefits as consistency is increased.  </p>';?><br>
      <h2>The different kinds of physical fitness</h2>
      <?php echo '<p> Physical fitnesss can be broken down into 5 broad components all of which target a different aspect of health. Muscular strenth is the training of your muscules to produce power and the exertion of force, typically achived from lifing weights of some sort. Muscular endurance is the capacity at which your muscles can produce consistent energy output of an extended period, rowwing or boxing are common activites. Cardiovascular works closely with muscular endurance but they differ in that it pertains specifically to heart and lung health so that energy levels can be maintained. Flexibility is the range of motion of your joints and muscles to reduce the risk of injury, this can be achived simply by stretching before a work out.Finally Body composition is the culmination of all aspects of health that is cut into a proportion of fat to lean tissue in the body and can be a key indicator to overall fitness levels. </p>';?><br>
      
      <h3>The First Tasks Before Physical Activity</h3>
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
        <img src="https://ik.imagekit.io/02fmeo4exvw/exercise-library/large/304-1.jpg" alt="image of exercise via URL"     width="150" height="150">
        <li>Plank</li>
      </ul>
      
      <?php
  $home = "index.php";
  $page1 = "Torres_Assignment1.php";
  $page2 = "Torres_Assignment2.php";
  $source1 = "https://www.cdc.gov/physical-activity/php/about/index.html";
  $source2 = "https://www.acefitness.org";
  $source3 ="https://www.nsca.com";
?>
      <p>
        <?php echo "Resources and navigation links";?><br>
      <a href="<?php echo($source1);?>" >First source</a><br />
      <a href="<?php echo($source2);?>" >Second source</a><br />
      <a href="<?php echo($source3);?>" >Third source</a><br />
      <a href="<?php echo($home);?>" >home</a><br />
      <a href="<?php echo($page1);?>">current page</a><br/>
      <a href="<?php echo($page2);?>">Assignment 2</a>
        </p>

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
        echo("<p>$number1+$number2=$addition</p>");
        echo("<p>$number1-$number2=$subtraction</p>");
        echo("<p>$number1*$number2=$multiplication</p>");
        echo("<p>$number1/$number2=$division</p>");
        echo("<p>$number3%$number4=$modulus</p>");

      ?>
    </body>
</html>

