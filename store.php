<?php
    include "php/logininfo.php";
?>

<!DOCTYPE html>
<html>
        <?php
            include "php/navbar.php";
        ?>
 
        <div id="storefront" class="main-content bg-white apply-grid ptb">
            <form method="post" action="php/cartcontent.php" class="c-one-s-two column-width apply-grid">
                <div class="full-width ptb">
                    <img src="images/toilet-cleaner.jpg">
                    <h4>Toilet Cleaner</h4>
                    <p>Liquid product made to help break up tough toilet bowl stains</p>
                    <p>Price goes here</p>
                    <input type="submit" value="Add to cart" class="button bg-hazybrown c-white ptb text-center">
                    </input>
                </div>
            </form>
            <div class="c-three-s-two column-width ptb">
                <img src="images/sink-cleaner.jpg">
                <h4>Sink Cleaner</h4>
                <p>Temporary text</p>
                    <p>Price goes here</p>
                <input type="submit" value="Add to cart" class="button bg-hazybrown c-white ptb text-center">
                </input>
            </div>
            <div class="c-five-s-two cm-one-s-two column-width ptb">
                <img src="images/hand-soap.jpg">
                <h4>Hand Soap</h4>
                <p>Temporary text</p>
                    <p>Price goes here</p>
                <input type="submit" value="Add to cart" class="button bg-hazybrown c-white ptb text-center">
                </input>
            </div>
            <div class="c-one-s-two cm-three-s-two column-width ptb">
                <img src="images/the-paper.jpg">
                <h4>Toilet Paper</h4>
                <p>Currently out of stock due to the high demand caused by Covid-19</p>
                    <p>Price goes here</p>
                <input type="submit" value="Add to cart" class="button bg-hazybrown c-white ptb text-center">
                </input>
            </div>
            <div class="c-three-s-two cm-one-s-two column-width ptb">
                <img src="images/shampoo.jpg">
                <h4>Shampoo</h4>
                <p>Temporary text</p>
                    <p>Price goes here</p>
                <input type="submit" value="Add to cart" class="button bg-hazybrown c-white ptb text-center">
                </input>
            </div>
            <div class="c-five-s-two cm-three-s-two column-width ptb">
                <img src="images/towels.jpg">
                <h4>Towels</h4>
                <p>Temporary text</p>
                    <p>Price goes here</p>
                <input type="submit" value="Add to cart" class="button bg-hazybrown c-white ptb text-center">
                </input>
            </div>
        </div>

        <?php
            include "php/footer.php";
        ?>
</html>