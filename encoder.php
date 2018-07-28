<?php
include_once __DIR__ . "/lib/usefull.php";

/* SOLUTION 

H4sIABXYXFsAA4WQTXOCMBRF9/waCc5oFi4gCg1fFoIBspNQAyYIU0SNv7447abTRVdvc+fe8w63
nLEArll7cKyAKwvLVwyoZ+1RHXjMrLp4cczhhJGQJXg03IpPVedeGZHi494LjGzhv7GmQjY0ks59
skN8qy5M8UvSc4u23Ep1gNJz5blPbsKpzE0VbsUQIj+lC0qoqyg5wCSh8S6VNSbyGuWq2RpU+vuM
4BGf7Ud0jhZxVlr7rWyDbAxeqxil8lhg8U4cVBaxSgCc6o7qGjW6sujEkOi/ydamESH5GWf2fb5/
Cv8j+QEZ9toWqLWFgZEzzF7GOk9VMa+W4CAKE+4I9U+FXrYheAxlC9WcubHZI9dryTylQ/1bA26X
rRFenJ4jvHo1z28FJyJXSGw2xhdB9b+/mgEAAA==

 */

/* proceedEncoding Can not be modified */
function proceedEncoding() {
    $C = "encoder_" . BaseConvert(rand(0, 1000), "0123456789", "QWERTYUIOPASDFGHJKLZXCVBNM");
    // Tip the folder contening the encoder_XXX is equal to round((XXX/50)+5000) 
    $c = new $C();
    echo $c->encode("Text to Encode:".$_POST["txt"]);
}

proceedEncoding();
