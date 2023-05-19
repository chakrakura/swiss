<?php

namespace App\Easyjet\SfsuBundle\Classes;

/**
 * PhpValues
 */
class PhpValues
{
    public static function postMaxSize($bytesMode = false)
    {
        if ($bytesMode) {
            return self::convertToBytes(ini_get("post_max_size"));
        } else {
            return ini_get("post_max_size");
        }
    }

    public static function uploadMaxFilesize($bytesMode = false)
    {
        if ($bytesMode) {
            return self::convertToBytes(ini_get("upload_max_filesize"));
        } else {
            return ini_get("upload_max_filesize");
        }
    }

    public static function maxUploadSize()
    {
        return min(self::postMaxSize(true), self::uploadMaxFilesize(true));
    }

    public static function maxHumanFileSize()
    {
        if (self::postMaxSize(true) < self::uploadMaxFilesize(true)) {
            return self::postMaxSize(false);
        } else {
            return self::uploadMaxFilesize(false);
        }
    }

    private static function convertToBytes($phpValue)
    {
        $phpValue = trim($phpValue);

        $last = strtolower($phpValue[strlen($phpValue) - 1]);
        $intval = intval(trim($phpValue));

        switch ($last) {
                // The 'G' modifier is available since PHP 5.1.0
            case 'g':
                $intval *= 1024;
            case 'm':
                $intval *= 1024;
            case 'k':
                $intval *= 1024;
        }

        return self::fixIntegerOverflow($intval);
    }

    // Fix for overflowing signed 32 bit integers,
    // works for sizes up to 2^32-1 bytes (4 GiB - 1):
    protected function fixIntegerOverflow($size)
    {
        if ($size < 0) {
            $size += 2.0 * (PHP_INT_MAX + 1);
        }
        return $size;
    }
}
