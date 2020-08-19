<?php
    include "php/logininfo.php";
?>

<!DOCTYPE html>
<html>
        <?php
            include "php/navbar.php";
        ?>
            <div class="hero">
                <img src="images/Cleaning.jpg">
            </div>
            <div class="main-content bg-white apply-grid">
                <h3 class="c-one-s-three column-width">Recent News</h3>
                <h4 class="c-one-s-three column-width">NOTICE</h4>
                <p class="c-one-s-six column-width">
                    In recent months, due to the situation that is currently happening due to 
                    Covid-19, some of our usual items are temporarily out of stock due to not 
                    enough of them being produced to meet the demand. We will get these items 
                    back in stock as soon as we possibly can and when these items are back in 
                    stock there will be a discount on them for a short time as an apology for 
                    being unavailable.
                </p>
                <h1>
                    <?php
                        // if(!$connection)
                        // {
                        //   die('Could not Connect MySql Server:');
                        // };
                    ?>
                </h1>
            </div>
        <?php
            include "php/footer.php";
        ?>
</html>