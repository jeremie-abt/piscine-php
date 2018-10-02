#!/usr/bin/php
<?php
    if ($argc == 4)
    {
        $first_nb = str_replace(" ", "", $argv[1]);
        $operateur = str_replace(" ", "", $argv[2]);
        $second_nb = str_replace(" ", "", $argv[3]);
        $first_nb = str_replace("\t", "", $first_nb);
        $operateur = str_replace("\t", "", $operateur);
        $second_nb = str_replace("\t", "", $second_nb);
        
        if ($operateur == "+")
            echo $first_nb + $second_nb."\n";
        else if ($operateur == '*')
            echo $first_nb * $second_nb."\n";
        else if ($operateur == '%')
            echo $first_nb % $second_nb."\n";
        else if ($operateur == '-')
            echo $first_nb - $second_nb."\n";
        else if ($operateur == '/')
            echo $first_nb / $second_nb;
        else
            echo "Incorrect Parameters\n";

    }
    else{
        echo "Incorrect Parameters\n";
    }
?>