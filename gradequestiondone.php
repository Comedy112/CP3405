<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<header>
 
</header>
  
<nav>
  <ul>
    <li><a href="index.html" class='active'>Home</a></li>
    <li><a href="contactus.html">Contact Us</a></li>
    <li><a href="help.html">Help!</a></li>
    <li><a href="settings.html">Settings</a></li>
    <li><a href="logout.html">Log Out</a></li>
  </ul>
</nav>
<?php

$answer3 = $_POST['question3answers'];

$totalCorrect = $_POST['totalCorrect'];

if ($answer3 == "a") { $totalCorrect++; }

?>
<article>


<p><h1>Congratulations!</h1><p>
<br><br>

<p>You have successfully completed this module!<p>
<br><br>

<p>Your score was: <?php
echo"<div id='results'>$totalCorrect / 3 </div>"
?> <p>

<div class="tryagain">
    <ul>
        <li><a href="variabletypesanddeclarations.html"><img border="0" alt="Try Again" src="tryagainbutton.png" width="303" height="40"></a></li>
    </ul>
    </div>

    <div class="chooseanewmodule">
    <ul>
        <li><a href="studentdashboard.html"><img border="0" alt="Choose a new Module" src="chooseanewmodulebutton.png" width="302" height="40"></a></li>
    </ul>
    </div>

<footer>Copyright &copy; codecorrect.com</footer>

</body>
</html>