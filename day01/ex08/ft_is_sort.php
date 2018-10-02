#!/usr/bin/php
<?php
    function    ft_is_sort($tab)
    {
        $sorted_tab = $tab;
        sort($sorted_tab);
        if ($tab == $sorted_tab)
        {
            return (TRUE);
        }
        else
        {
            return (FALSE);
        }
    }
?>