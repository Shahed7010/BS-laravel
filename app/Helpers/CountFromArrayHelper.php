<?php

if (!function_exists('countChildrenInArray')) {
    function countChildrenInArray(array $array)
    {
        $count = 0;
        foreach ($array as $item) {
            if (count($item['children'])) {
                $count += countChildrenInArray($item['children']);
            }
            $count += count($item['items']) ?? 0;
        }
        return $count;
    }
}
