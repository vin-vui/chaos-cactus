<?php

if (!function_exists('extractYouTubeId')) {
    function extractYouTubeId($url)
    {
        preg_match("/(youtu\.be\/|youtube\.com\/(watch\?(.*&)?v=|(embed|v|shorts)\/))([^\?&\"'>]+)/", $url, $matches);
        return $matches[5] ?? null;
    }
}
