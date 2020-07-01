#!/usr/bin/env php
<?php
    function ft_is_sort($arr) {
        $new_arr = $arr;
        sort($new_arr);
        $result = array_diff_assoc($arr, $new_arr);
        if ($result == null)
            return true;
        return false;
    }
?>