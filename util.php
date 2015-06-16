<?php
class Util
{
    public static function println($message, $numTabs = 0) {
        while(($numTabs--) > 0) {
            echo "    ";
        }

        echo $message, "\n";
    }
}