<?php
    mysqli_connect("localhost","root","root");
    mysqli_select_db("store");

    $itemQuery = "SELECT * FROM items";
    $result = mysqli_query($itemQuery);

    while ($value = mysqli_fetch_array($result)) {
        echo $value('item');
        echo $value('price');
    }

    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    echo $_SERVER['SERVER_PORT'];
?>