<!-- //Convert the string to all lowercase. -->
<!-- <?php

$text = "The quick brown fox jumps over the lazy dog.";
function manipulateString($text) {
    $text = strtolower($text);

    echo $text;
}

manipulateString($text);
?> -->


<!-- //Replace "brown" with "red" in the string. -->

<?php

$text = "The quick brown fox jumps over the lazy dog.";
function replaceText($text) {
    $modifiedText = str_replace("brown", "red", $text);

    echo $modifiedText;
}

replaceText($text);
?>

