<?php
// Test
return function($string) {
    // https://stackoverflow.com/questions/1205889/how-to-prevent-code-injection-attacks-in-php
    return  htmlspecialchars(
        htmlentities($string)
    );
}
?>