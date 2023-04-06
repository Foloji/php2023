<?php

/**
 * @param string $content
 * @return void
 */
function getContent(string $content): void
{
    if (is_array(FILE_EXT)) {
        foreach (FILE_EXT as $extension) {
            $filename = $content . '.' . $extension;
            if (file_exists($filename)) {
                include_once $filename;
            }
        }
    }
}

/**
 * @param int $country
 * @return string
 */
function getCountry(int $country): string
{
    if ($country == 1) {
        return 'Allemagne';
    } elseif ($country == 2) {
        return 'Belgique';
    } elseif ($country == 3) {
        return 'France';
    } else {
        return 'Inconnu';
    }
}