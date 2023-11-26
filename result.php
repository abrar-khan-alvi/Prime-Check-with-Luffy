<?php
include('header.php');
?>

<div class="content">
    <?php
    function isPrime($num)
    {
        for ($i = 2; $i*$i <= $num; $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    }

    if (isset($_GET['number'])) {
        $number = $_GET['number'];

        if (!is_numeric($number)||$number<0) {
            echo "<p class='error'>Invalid input: Please enter a number.</p></br>";
            echo "<img class='amne' src='sad.gif' ></br>";
        } 
        else {
            if (isPrime($number)) {
                echo "<p>{$number} is a prime number.</p></br>";
                echo "<img class='amne' src='happy.gif' ></br>";  
            } 
            else {
                echo "<p>{$number} is not a prime number.</p></br>";
                echo "<img class='amne'  src='nop.gif' ></br>";  
            }
        }
    }
    else {
        echo "<p class='error'>No number submitted for prime checking.</p>";
        echo "<img class='amne' src='sad.gif' ></br>";
    }
    ?>
    <a href="index.php"><button>Go back to Home</button></a>
</div>
