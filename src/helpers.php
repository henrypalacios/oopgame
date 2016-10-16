<?php

if (!function_exists('show')) {
    function show($text, $br = false)
    {
        echo "<p>$text</p>";
        if ($br) :
            echo "</BR>";
        endif;
    }
}
