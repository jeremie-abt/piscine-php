#!/usr/bin/php
<?php
    if ($argc == 2) {
        $str = trim($argv[1]);
        $str = ltrim($str);
        $str = str_replace(" ", "", $str);

        if (($second_nb = strstr($str, "+")))
        {
        	
		$second_nb = substr($second_nb, 1);
		$second_nb = intval($second_nb);
		$first_nb = intval($str);
            if (($second_nb || ($second_nb[0] == '0' && !$second_nb[1])) && ($first_nb || ($first_nb[0] == '0' && !$first_nb[1])))
            {
                $ret = $first_nb + $second_nb;
                echo "$ret\n";
            }
            else
                echo "Syntax Error\n";

        }
	else if (($second_nb = strstr($str, "*"))) {
		$second_nb = substr($second_nb, 1);
		$second_nb = intval($second_nb);
		$first_nb = intval($str);
            if (($second_nb || ($second_nb[0] == '0' && !$second_nb[1])) && ($first_nb || ($first_nb[0] == '0' && !$first_nb[1])))
            {
                $ret = $first_nb * $second_nb;
                echo "$ret\n";
            }
            else
                echo "Syntax Error\n";
        }
        else if (($second_nb = strstr($str, "-"))) {
	
		$second_nb = substr($second_nb, 1);
		$second_nb = intval($second_nb);
		$first_nb = intval($str);
            if (($second_nb || ($second_nb[0] == '0' && !$second_nb[1])) && ($first_nb || ($first_nb[0] == '0' && !$first_nb[1])))
            {
                $ret = $first_nb - $second_nb;
                echo "$ret\n";
            }
            else
                echo "Syntax Error\n";	
	} 
	else if (($second_nb = strstr($str, "/"))) {
		$second_nb = substr($second_nb, 1);
		$second_nb = intval($second_nb);
		$first_nb = intval($str);
            if (($second_nb || ($second_nb[0] == '0' && !$second_nb[1])) && ($first_nb || ($first_nb[0] == '0' && !$first_nb[1])))
            {
                $ret = $first_nb / $second_nb;
                echo "$ret\n";
            }
            else
                echo "Syntax Error\n";
	}
	else if(($second_nb = strstr($str, "%"))) {

		$second_nb = substr($second_nb, 1);
		$second_nb = intval($second_nb);
		$first_nb = intval($str);
            if (($second_nb || ($second_nb[0] == '0' && !$second_nb[1])) && ($first_nb || ($first_nb[0] == '0' && !$first_nb[1])))
            {
                $ret = $first_nb % $second_nb;
                echo "$ret\n";
            }
            else
                echo "Syntax Error\n";

	}
	else {
        	echo "Incorrect Parameters\n";
	}
    }
    else {
        echo "Incorrect Parameters\n";
    }
?>
