#!/usr/bin/php

<?php

    function    ft_moyenne(&$tab){
        $ret = 0;
        $nb_note = 0;

        foreach ($tab as $elem){
            foreach($elem as $subelem){
                if ($subelem[1] != "moulinette") {
                    if ($subelem[0])
                    {
                        $ret += $subelem[0];
                        $nb_note++;
                    }
                }
            }
        }
        $ret = $ret / $nb_note; 
        echo "voici la moyenne hihi $ret\n";
    }


    function    ft_moyenne_user(&$tab) {
        ksort($tab);
        
        foreach($tab as $key => $elem) {
            $ret = 0;
            $nb_elem = 0;
            foreach ($elem as $subelem) {
                if ($subelem[0]) {
                    $ret += $subelem[0];
                    $nb_elem++;
                }
            }
            if ($nb_elem > 0)
            {
                $ret = $ret / $nb_elem;
                echo "$key:$ret\n";
            }
        }        

    }

    function    ft_ecart_moulinette($tab) {
        ksort($tab);
        
        foreach($tab as $key => $elem) {
            $ret = 0;
            $nb_elem = 0;
            $note_moulinette = 0;
            foreach ($elem as $subelem){
                if ($subelem[1] == "moulinette" && $subelem[0] && $subelem[2]) {
                    $note_moulinette = $subelem[0];
                    break ;
                }
            }
            foreach ($elem as $subelem) {
                if ($subelem[1] != "moulinette") {
                    $ret += $note_moulinette - $subelem[0];
                    $nb_elem++;
                }
            }
            if ($nb_elem > 0) {
           //     echo "ret $ret nb_elem $nb_elem\n";
                $ret = $ret / $nb_elem;
                echo "$key:$ret\n";
            }
        } 
    }

    $tab = array();
    if (fgets(STDIN) && $argc >= 2)
    {
        while ($stdin = fgets(STDIN)){
            $line_cur = explode(";", $stdin);
            if (array_key_exists($line_cur[0], $tab))
            {
                $tab[$line_cur[0]][] = Array($line_cur[1], $line_cur[2], $line_cur[3]);
            }
            else
            {
                $tab[$line_cur[0]] = array();
                $tab[$line_cur[0]][] = Array($line_cur[1], $line_cur[2], $line_cur[3]);
            }
        }
        if ($argv[1] == "moyenne"){
            ft_moyenne($tab);
        }
        else if ($argv[1] == "moyenne_user"){
            ft_moyenne_user($tab);
        }
        else if ($argv[1] == "ecart_moulinette") {
            ft_ecart_moulinette($tab);
        }

    }
?>