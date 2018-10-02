#!/usr/bin/php
<?php
    function    ft_split($str)
    {
        $new_str = ltrim($str);
        $new_str = trim($new_str);
        while (strpos($new_str, "  "))
        {
            $new_str = str_replace("  ", " ", $new_str);
        }
        $new_str = explode(" ", $new_str);
        sort($new_str);
        return ($new_str);
    }
   print_r(ft_split("Hello World AAA"));
?>