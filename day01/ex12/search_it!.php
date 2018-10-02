#!/usr/bin/php
<?php
    if ($argc > 2)
    {
        $to_search = $argv[1];
        $i = 0;
        $str_ret = "";
        
        foreach ($argv as $elem){
            if ($i == 2)
            {
                $pair = explode(":", $elem);
                if ($pair[0] == $to_search)
                    $str_ret = $pair[1];
            }
            else
                $i++;
        }
        if ($str_ret)
            echo "$str_ret\n";
    }
?>