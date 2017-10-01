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
    <li><a href="index.html">Home</a></li>
    <li><a href="contactus.html">Contact Us</a></li>
    <li><a href="help.html">Help!</a></li>
    <li><a href="settings.html">Settings</a></li>
    <li><a href="logout.html">Log Out</a></li>
  </ul>
</nav>

<article>
    <div class="goback">
        <button id="goback" type="image" onclick="history.go(-1)" src="backbutton.jpg" alt="Go Back">
    </div>
<br><br><br><br>
<form method="post" action="">
    <label>First Name</label>
    
    <input type="text" name="first_name"/>


    <br><br>
 
    
    <label>Last Name</label>
    
    <input type="text" name="last_name"/>

    <br><br>

    <label>Student Email</label>
    
    <input type="text" name="stu_email"/>

    <br><br>

    <label>Parent/Guardian Email</label>
    
    <input type="text" name="par_email"/>

    <br><br>

<input type="submit" value="Add Student">
</form>
    
</article>


<footer>Copyright &copy; codecorrect.com</footer>

</body>
</html>
