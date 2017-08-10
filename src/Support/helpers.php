<?php

use Caffeinated\Manifest\Manifest;

if (! function_exists('manifest')) {
    /**
     * Create a manifest from the given file.
     *
     * @param  null|string  $path
     * @return \Caffeinated\Manifest\Manifest
     */
    function manifest($path = null)
    {
        return new Manifest($path);
    }
}
