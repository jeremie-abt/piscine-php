#!/usr/bin/php
<?php

    function    ft_cmp($a, $b)
    {
        $str_a = strtolower($a);
        $str_b = strtolower($b);

        for($i = 0; $str_a[$i] && $str_b[$i]; $i++)
        {
            if ($str_a[$i] != $str_b[$i])
            {
                $flag_a = 3;
                $flag_b = 3;
                if ($str_a[$i] >= 'a' && $str_a[$i] <= 'z')
                    $flag_a = 1;
                else if ($str_a[$i] >= '0' && $str_a[$i] <= '9')
                    $flag_a = 2;
                
                if ($str_b[$i] >= 'a' && $str_b[$i] <= 'z')
                    $flag_b = 1;
                else if ($str_b[$i] >= '0' && $str_b[$i] <= '9')
                    $flag_b = 2;
                
                if ($flag_a == $flag_b)
                {
                    if ($str_b[$i] > $str_a[$i])
                        return (-1);
                    else
                        return (1);
                }
                else if ($flag_b > $flag_a)
                    return (-1);
                else
                    return (1);
            }
            return (0);
        }

        {
            if (!($str_a[$i] >= 'a' && $str_a[$i] <= 'z') && !($str_a[$i] >= '0' && $str_a[$i] <= '9'))
            {
                $flag_a = 3;
                break ;
            }
            else if ($str_a[$i] >= '0' && $str_a[$i] <= '9')
            {
                $flag_a = 2;
            }
            else if ($flag_a == 0)
            {
                $flag_a = 1;
            }
        }
        
        for ($i = 0; $str_b[$i]; $i++)
        {
            if (!($str_b[$i] >= 'a' && $str_b[$i] <= 'z') && !($str_b[$i] >= '0' && $str_b[$i] <= '9'))
            {
                $flag_b = 3;
                break ;
            }
            else if ($str_b[$i] >= '0' && $str_b[$i] <= '9')
            {
                $flag_b = 2;
            }
            else if ($flag_b == 0)
            {
                $flag_b = 1;
            }
        }
        if ($flag_b == $flag_a)
        {
            if (strcmp($str_a, $str_b) > 0)
            {
                return (1);
            }
            else
            {
                return (-1);
            }
        }
        else if ($flag_b > $flag_a)
        {
            return (-1);
        }
        else
        {
            return (1);
        }
        return (-1);
    }

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
        $sorting_function = 'ft_cmp';
        uasort($tab, $sorting_function);
        foreach ($tab as $elem)
        {
            echo "$elem\n";
        }
    }
?>