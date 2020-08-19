<?php
    $page = basename($_SERVER['PHP_SELF']);
    $withoutphp = substr($page, 0, -4);
    $title = "Cleaning supplies - ". $withoutphp;

    $pagecolorOne = "white";
    $pagecolorTwo = "white";
    $pagecolorThree = "white";
    $pagecolorFour = "white";
    $pageOne = "index.php";
    $pageTwo = "store.php";
    $pageThree = "updates.php";
    $pageFour = "contact.php";

    if ($withoutphp == "index") {
        $pagecolorOne = "darkbrown";
        $pageOne = "#";
    }
    else if ($withoutphp == "store") {
        $pagecolorTwo = "darkbrown";
        $pageTwo = "#";
    }
    else if ($withoutphp == "updates") {
        $pagecolorThree = "darkbrown";
        $pageThree = "#";
    }
    else if ($withoutphp == "contact") {
        $pagecolorFour = "darkbrown";
        $pageFour = "#";
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>
        <?php
            echo $title;
        ?>
    </title>

</head>

<body>

    <?php

        if ($loggedIn == true) {
            include "php/navbar/loggedin.php";
        }
        else if ($loggedIn == false) {
            include "php/navbar/notloggedin.php";
        }
    ?>

        <div id="bottom-nav" class="bg-hazybrown full-width apply-grid">
            <?php 
                print '<a href="'. $pageOne .'" class="normal c-one c-'. $pagecolorOne .'">Home</a>';
                print '<a href="'. $pageTwo .'" class="normal c-two c-'. $pagecolorTwo .'">Store</a>';
                print '<a href="'. $pageThree .'" class="normal c-three c-'. $pagecolorThree .'">Updates</a>';
                print '<a href="'. $pageFour .'" class="normal c-four c-'. $pagecolorFour .'">Contact Us</a>';
            ?>
            <?php 
                print '<a href="'. $pageOne .'" class="shrunk column-width c-'. $pagecolorOne .'">Home</a>';
                print '<a href="'. $pageTwo .'" class="shrunk column-width c-'. $pagecolorTwo .'">Store</a>';
                print '<a href="'. $pageThree .'" class="shrunk column-width c-'. $pagecolorThree .'">Updates</a>';
                print '<a href="'. $pageFour .'" class="shrunk column-width c-'. $pagecolorFour .'">Contact Us</a>';
            ?>
        </div>
    </header>

    <main class="bg-lightbrown full-width">