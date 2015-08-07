<?php
function htmldump($variable, $height="20em") {
echo "<pre style=\"border: 1px solid #000; height: {$height}; overflow: auto; margin: 0.5em;\">";
var_dump($variable);
echo "</pre>\n";
}
?>