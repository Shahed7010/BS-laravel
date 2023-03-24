<?php

if (!function_exists('countChildrenInArray')) {
    function countChildrenInArray(array $array)
    {
        $count = 0;
        foreach ($array as $item) {
            if (count($item['children'])) {
                $count += countChildrenInArray($item['children']);
            }
            $count += $item['items_count'] ?? 0;
        }
        return $count;
    }
}
