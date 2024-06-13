<?php

if (!function_exists('formatRupiah')) {
    /**
     * Format a number into Indonesian Rupiah currency.
     *
     * @param float|int $number
     * @param string $prefix
     * @return string
     */
    function formatRupiah($number, $prefix = 'Rp')
    {
        return $prefix . ' ' . number_format($number, 0, ',', '.');
    }
}
