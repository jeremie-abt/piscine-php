#!/usr/bin/php
<?php
    if ($argc == 2) {
        $str = trim($argv[1]);
        $str = ltrim($str);
        $str = str_replace(" ", "", $str);

        if (($second_nb = strstr($str, "+")))
        {
            if (($first_nb = intval($str)) && ($second_nb = intval($second_nb)))
            {
                $ret = $first_nb + $second_nb;
                echo "$ret\n";
            }
            else
                echo "Syntax Error\n";
        }
        else if (($second_nb = strstr($str, "*"))) {
            if (($first_nb = intval($str)) && ($second_nb = intval($second_nb)))
            {
                $ret = $first_nb * $second_nb;
                echo "$ret\n";
            }
            else
                echo "Syntax Error\n";
        }
        else if (($second_nb = strrchr($str, "-"))) {
            if (($first_nb = intval($str)) && ($second_nb = intval($second_nb)))
            {
                echo "le - est casse";
        //        $ret = $first_nb - $second_nb;
          //      echo "first : $first_nb sec : $second_nb\n";
            //    echo "$ret\n";
            }
            else
                echo "Syntax Error\n"; 
        }
        else {
            echo "Syntax Error\n";
        }

    }
    else {
        echo "Incorrect Parameters\n";
    }
?>