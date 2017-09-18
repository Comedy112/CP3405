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



$answer1 = $_POST['question1answers'];


$totalCorrect = 0;

if ($answer1 == "e") { $totalCorrect++; }



?>
<article>
    <div id="variabletypesanddeclarationsquiz">
    <br><br>
    <p><h1>Variable Types and Declarations</h1><p>
    <br>
    <nav>
      <ul>
         <li><a href="">Question 1</a></li>
         <li><a href="" class='active'>Question 2</a></li>
         <li><a href="">Question 3</a></li>
      </ul>
    </nav>
    </div>

<br>
    <p>Which of the following declarations are correct for declaring an integer?<p>

<form action="gradequestion2.php" method="post" id="question1">
    
    <input type="radio" name="question2answers" id="question2answersa" value="a"/><label>x = 3</label>
    <br>

    
    <input type="radio" name="question2answers" id="question2answersb" value="b"/><label>x - 3</label>
    <br>
    
    
    <input type="radio" name="question2answers" id="question2answersc" value="c"/><label>x = '3'</label>
    <br>
    
    
    <input type="radio" name="question2answers" id="question2answersd" value="d"/><label>x = (3)</label>
    <br>

    <input type="radio" name="question2answers" id="question2answerse" value="e"/><label>x 3</label>
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