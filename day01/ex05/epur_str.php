#!/usr/bin/php
<?php
    if ($argc == 2)
    {
        $str = ltrim($argv[1]);
        $str = trim($str);
        while (strpos($str, "  "))
        {
            $str = str_replace("  ", " ", $str);
        }
        print_r($str);
        echo "\n";
    }
?>