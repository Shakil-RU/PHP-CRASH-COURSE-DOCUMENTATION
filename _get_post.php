// Getting information from the user

<?php
$looking = isset($_GET['title']) || isset($_GET['author']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Bookstore</title>
</head>
<body>
 <p>You lookin'? <?php echo (int) $looking; ?></p>
 <p>The book you are looking for is</p>
 <ul><li><b>Title</b>: <?php echo $_GET['title']; ?></li>
 <li><b>Author</b>: <?php echo $_GET['author']; ?></li>
 </ul>
</body>
</html>

/* Now access the link, http://localhost:8000/?author=HarperLee&title=To 
Kill a Mockingbird. You will see that the page prints some of the information that 
you passed on to the URL. */
