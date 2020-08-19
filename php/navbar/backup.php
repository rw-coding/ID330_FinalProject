<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>
        <?php
            $page = basename($_SERVER['PHP_SELF']);
            $withoutphp = substr($page, 0, -4);
            $title = "Cleaning supplies - ". $withoutphp;
            echo $title;
        ?>
    </title>

</head>

<body class="bg-lightbrown">
    <header class="full-width ptb">
        <i onclick="backup()" class="fas fa-arrow-left fa-2x c-one cs-one c-hazybrown ptb"></i>
    </header>

    <div class="main-content bg-white apply-grid ptb">