<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>about me</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
</head>
<body>
    <div class="flex-container">
        <div class="header">
            <?php include 'logo.inc.php'?>
            <?php include 'toolbar.php'?>
        </div>
        <div class="aboutMe">
            <h1> <?php echo $a?> </h1>
                <div class="data">
                    <div class="myimg">
                        <?php echo '<img src="picture/cat.jpg" alt="spycat" width="200" height="120">';?>
                    </div>
                    <div class="name">
                        <p>
                            My name is <?php echo $name, ' ', $surname.'<br><br>';
                            echo 'town', ' ', $town; ?>
                        </p>
                        <p>
                        i'm <?php echo $age; ?> years old
                        </p>
                        <p> i create variables and make simple things with it </p>
                    </div>
                </div>
            <div class="knowledge">
                <?php include 'knowledge.inc.php';?>
                <?php echo $a, ' ', $b, ' ', $c;?> <br>
                <?php
                    $x = 5;
                    $y = 7;
                    $z = $x + $y;
                    echo "5 + 7 = $z";
                ?><br>
                <?php
                    echo $s
                ?>
            </div>

            <div class="article">
                <p class="text">
                    Some text some text some text some text
                    some text some text some try harder text some text
                </p>
            </div>
        </div>
        <?php include 'footer.inc.php'?>
    </div>

</body>

</html>