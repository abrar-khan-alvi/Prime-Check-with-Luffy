<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Check</title>
</head>
<body>
<?php
include('header.php');
?>
<div class="article">
    <h3>About</h3>
    <h2>Monkey D. Luffy</h2>
    <p>Monkey D. Luffy, also known as "Straw Hat Luffy" and commonly as "Straw Hat", is the founder
        and captain of the increasingly infamous and powerful Straw Hat Pirates, as well as the most 
        powerful of its top fighters. He desires to find the legendary treasure left behind by the 
        late Gol D. Roger and thereby become the Pirate King,which would help facilitate an unknown 
        dream of his that he has told only to Shanks, his brothers, and crew.
        He believes that being the Pirate King means having the most freedom in the world.</p>
</div>
<div class="content">
    <form action="result.php" method="get">
        <label for="number">Enter a number:</label></br></br>
        <input type="text" name="number" required></br></br>
        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
