<?php


class Utils
{
    /**
     * Get string excerpt.
     *
     * @param $str string Input string
     * @param int    $length   Max length
     * @param string $trailing Trailing suffix
     *
     * @return string
     */
    public static function excerpt(string $str, int $length = 25, string $trailing = '…'): string
    {
        if (mb_strlen($str) > $length) {
            // string exceeded length, truncate and add trailing
            $excerpt = mb_substr($str, 0, $length);
            $lastSpace = mb_strrpos($excerpt, ' ');
            $excerpt = mb_substr($excerpt, 0, $lastSpace);
            $excerpt  .= $trailing;

            return $excerpt;
        }
        // string was already short enough, return the string
        return $str;
    }
}