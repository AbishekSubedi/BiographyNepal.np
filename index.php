<?php
require './db.php';
error_reporting(0);

function time_elapsed_string($datetime, $full = false)
{
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

$sql = "SELECT * FROM comments_01 ORDER BY CreatedAt DESC;";

$data = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiographyNepal.np</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <div id="head">
        <header>
            <div id="sub_head">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><button class="btn_head" onclick="display()">About</button></li>
                    <li><button class="btn_head" onclick="show()">Search</button></li>
                    <li>Contact</li>
                </ul>
            </div>
        </header>
    </div>
    <div id="main">
        <div>
            <center>
                <h1>Some Important & Famous Figures</h1>
            </center>
            <p>Hello. Welcome to my website. In this website you can learn about many famous persons and be motivated by reading their biography. Please fill free to leave comments if you like me to add your favorite persons. Thank you! Please enjoy your time reading. In the future I will also add other persons from every field.</p><br><br>
            <hr>
            <hr><br><br>
        </div>
        <div class="main-container">
            <div class="cards-container">
                <div class="container1">
                    <center>
                        <h3>1. Abraham Lincoln</h3>
                        <a href="Abraham Lincoln.html"><img src="Abraham1.jpeg" alt="Abraham Lincoln"></a>
                    </center>
                    <p><b>Abraham Lincoln</b>, byname <b>Honest Abe, the Rail-Splitter</b>, or <b>the Great Emancipator</b>, (born February 12, 1809... <br>
                        <b>Click on image to Read More.</b>
                    </p>
                </div>
                <div class="container2">
                    <center>
                        <h3>2. Albert Einstein</h3>
                        <a href="Albert Einstein.html"><img src="Albert1.jpeg" alt="Albert Einstein" width="500px"></a>
                    </center>
                    <p><b>Albert Einstein</b>, (born March 14, 1879, Ulm, Württemberg, Germany—died April 18, 1955, Princeton, New Jersey, U.S.), German-born physicist...<br>
                        <b>Click on image to Read More.</b>
                    </p>
                </div>
                <div class="container3">
                    <center>
                        <h3>3. Charles Babbage</h3>
                        <a href="Charles Babbage.html"><img src="Charles1.jpeg" alt="Charles Babbage" width="500px"></a>
                    </center>
                    <p><b>Charles Babbage</b>, (born December 26, 1791, London, England—died October 18, 1871, London), English mathematician and inventor...<br>
                        <b>Click on image to Read More.</b>
                    </p>
                </div>
                <div class="container1">
                    <center>
                        <h3>4. Cristiano Ronaldo</h3>
                        <a href="Cristiano Ronaldo.html"><img src="Cristiano3.jpeg" alt="Cristiano Ronaldo"></a>
                    </center>
                    <p><b>Abraham Lincoln</b>, byname <b>Honest Abe, the Rail-Splitter</b>, or <b>the Great Emancipator</b>, (born February 12, 1809... <br>
                        <b>Click on image to Read More.</b>
                    </p>
                </div>
                <div class="container2">
                    <center>
                        <h3>5. Isaac Newton</h3>
                        <a href="Isaac Newton.html"><img src="Isaac1.jpeg" alt="Isaac Newton" width="500px"></a>
                    </center>
                    <p><b>Isaac Newton</b>, in full <b>Sir Isaac Newton</b>, (born December 25, 1642 [January 4, 1643, New Style], Woolsthorpe, Lincolnshire...<br>
                        <b>Click on image to Read More.</b>
                    </p>
                </div>
                <div class="container3">
                    <center>
                        <h3>6. Lionel Messi</h3>
                        <a href="Lionel Messi.html"><img src="Lionel3.jpeg" alt="Lionel Messi" width="500px"></a>
                    </center>
                    <b>Lionel Messi</b>, in full <b>Lionel Andrés Messi</b>, also called <b>Leo Messi</b>, (born June 24, 1987, Rosario, Argentina), Argentine-born football (soccer) player who was named Fédération Internationale de...<br>
                    <b>Click on image to Read More.</b></p>
                </div>
                <div class="container1">
                    <center>
                        <h3>7. Marie Curie</h3>
                        <a href="Marie Curie.html"><img src="Marie3.jpeg" alt="Marie Curie"></a>
                    </center>
                    <p><b>Marie Curie</b>, née <b>Maria Sklodowska</b>, was born in Warsaw on November 7, 1867, the daughter of a secondary-school teacher. She received a general education in local schools... <br>
                        <b>Click on image to Read More.</b>
                    </p>
                </div>
                <div class="container2">
                    <center>
                        <h3>8. Nikola Tesla</h3>
                        <a href="Nikola Tesla.html"><img src="Nikola1.jpeg" alt="Nikola Tesla" width="500px"></a>
                    </center>
                    <p><b>Nikola Tesla</b>, (born July 9/10, 1856, Smiljan, Austrian Empire [now in Croatia]—died January 7, 1943, New York, New York, U.S.), Serbian...<br>
                        <b>Click on image to Read More.</b>
                    </p>
                </div>
                <div class="container3">
                    <center>
                        <h3>9. Stephen Hawking</h3>
                        <a href="Stephen Hawking.html"><img src="Stephen3.jpeg" alt="Charles Babbage" width="500px"></a>
                    </center>
                    <p><b>Stephen Hawking</b>, in full <b>Stephen William Hawking</b>, (born January 8, 1942, Oxford, Oxfordshire, England—died March 14, 2018, Cambridge, Cambridgeshire)...<br>
                        <b>Click on image to Read More.</b>
                    </p> <br>
                </div>
            </div><br>
            <hr>
            <hr>
            <div class="comments">
                <center>
                    <form action="update.php" method="POST">
                        Name: <input class="form-control" type="text" name="name" placeholder="Enter your name" value="<?php echo $name; ?>" required><br>
                        Comments: <textarea class="form-control" name="comment" placeholder="Enter your comment" required><?php echo $comments; ?></textarea><br>
                        <button class="btn_form" type="submit" onclick="comments()">Send</button>
                    </form>
                </center>
            </div>
            <hr>
            <hr>
            <div id="getcomments">
                <?php
                if ($data) {
                    while ($row = $data->fetch_assoc()) {
                ?>
                        <div class="comm" style="border: 2px solid gray; border-radius: 5px; padding: 10px;">
                            <strong><?php echo $row['Name']; ?></strong> <span style="color: #8b0000;"> commented</span><br>
                            <?php echo $row['Comments']; ?>
                            <p><?php echo time_elapsed_string($row['CreatedAt'], true) ?></p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
</body>

</html>