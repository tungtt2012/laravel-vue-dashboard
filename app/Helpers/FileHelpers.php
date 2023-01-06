<?php
use Illuminate\Support\Facades\Storage;

if (!function_exists('upload_file')) {

    function upload_file($file, $folder = ''): string
    {
        return $file->store($folder);
    }
}
if (!function_exists('pare_url_file')) {
    function pare_url_file($path): ?string
    {
        return url(Storage::url($path));
    }
}
