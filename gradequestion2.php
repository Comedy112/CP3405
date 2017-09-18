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

$answer2 = $_POST['question2answers'];

$totalCorrect = $_POST['totalCorrect'];

if ($answer2 == "a") { $totalCorrect++; }

?>
<article>
    <div id="variabletypesanddeclarationsquiz">
    <br><br>
    <p><h1>Variable Types and Declarations</h1><p>
    <br>
    <nav>
      <ul>
         <li><a href="">Question 1</a></li>
         <li><a href="">Question 2</a></li>
         <li><a href="" class='active'>Question 3</a></li>
      </ul>
    </nav>
    </div>

<br>
    <p>Can you declare more than one variable at a time?<p>

<form action="gradequestiondone.php" method="post" id="question1">
    
    <input type="radio" name="question3answers" id="question3answersa" value="a"/><label>Yes</label>
    <br>

    <input type="radio" name="question3answers" id="question3answersb" value="b"/><label>No</label>
    <br>

    <input type="radio" name="question3answers" id="question3answersc" value="c"/><label>I dont know</label>
    <br>

    <input type="radio" name="question3answers" id="question3answersd" value="d"/><label>Can you repeat the question</label>
    <br>

    <input type="radio" name="question3answers" id="question3answerse" value="e"/><label>You're not the boss of me now</label>
    <br>

    

    <br><br>

    <input type="hidden" name="totalCorrect" id="totalCorrect1" value="<?php echo htmlspecialchars($totalCorrect); ?>" />

<input type="submit" value="Next Question">

<?php
echo"<div id='results'>$totalCorrect / 3 correct</div>"
?>

</form>
</article>

<footer>Copyright &copy; codecorrect.com</footer>

</body>
</html>