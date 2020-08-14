
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Placeholder name</title>

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

    <main class="bg-lightbrown full-width">