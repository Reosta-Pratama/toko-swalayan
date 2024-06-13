<?php

if (!function_exists('formatTanggal')) {
    /**
     * Format a date into "day month(year abbreviation) year" format.
     *
     * @param string|\DateTime $date
     * @return string
     */
    function formatTanggal($date)
    {
        if (!($date instanceof \DateTime)) {
            $date = new \DateTime($date);
        }

        $day = $date->format('d');
        $month = $date->format('M'); // Three-letter month abbreviation
        $year = $date->format('Y');

        return "{$day} {$month} {$year}";
    }
}
