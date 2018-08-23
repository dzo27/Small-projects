<?php
include "database.php";
//Create Select Query
$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SHOUT IT</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <header>
                <h1>SHOUT IT Shoutbox</h1>
            </header>
            <div class="shouts">
                <ul>
                    <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
                        <li class="shout">
                            <span><?php echo $row["time"] ?> - </span><strong><?php echo $row["user"] ?>:</strong> <?php echo $row["message"] ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="input">
                <?php  if (isset($_GET['error'])) :?>
                    <div class="error">
                        <?php echo $_GET['error']; ?>
                    </div>
                <?php endif ?>
                <form class="form" action="process.php" method="post">
                    <input type="text" name="user" placeholder="Enter your name" >
                    <input type="text" name="message" placeholder="Enter your message" >
                    <br>
                    <input class="shout-btn" type="submit" name="submit" value="Shout it out!" placeholder="Enter your name" >
                </form>
            </div>
        </div>
    </body>
</html>
