#!/usr/bin/php
<?php

    if ($argc >= 2)
    {
        $tab = array();    
    
        $i = 0;
        foreach ($argv as $elem){
            if ($i > 0)
            {
                $str = ltrim($elem);
                $str = trim($str);
                while (strpos($str, "  "))
                {
                $str = str_replace("  ", " ", $str);
                }
                $tab_tmp = explode(" ", $str);
                $tab = array_merge($tab, $tab_tmp);
            }
            else
            {
                $i++;
            }
        }
   
        sort($tab);
        foreach ($tab as $elem)
        {
            echo "$elem\n";
        }
    }
?>