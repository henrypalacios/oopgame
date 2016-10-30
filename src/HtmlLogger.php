<?php


namespace App;


class HtmlLogger implements Logger
{
    public function info(string $message, $br = false)
    {
        echo "<p>$message</p>";
        if ($br)
            echo "</BR>";
    }
}