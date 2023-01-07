<?php
use Illuminate\Support\Facades\Storage;
use App\Enums\Configs\WebConfig;
if (!function_exists('upload_file')) {

    function upload_file($file, $folder = WebConfig::DefaultUploadPath): string
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
