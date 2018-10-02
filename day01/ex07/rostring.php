#!/usr/bin/php
<?php
    if ($argc >= 2)
    {
        $str = ltrim($argv[1]);
        $str = trim($str);
        while (strpos($str, "  "))
        {
            $str = str_replace("  ", " ", $str);
        }
        

        $nb_word = str_word_count($str);
        $tab_str = explode(" ", $str);

        $i = 0;
        foreach ($tab_str as $elem){
            $tab_str[$i] = $elem . " ";
            $i++;
        }

        $tmp = $tab_str[0];
        $tab_str[0] = $tab_str[$nb_word - 1];
        $tab_str[$nb_word - 1] = $tmp;
        $str = implode($tab_str);
        $str = trim($str);
        print_r($str);
        echo "\n";
    }
?>