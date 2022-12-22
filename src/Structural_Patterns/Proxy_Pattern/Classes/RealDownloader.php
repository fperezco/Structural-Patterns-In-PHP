<?php

namespace App\Structural_Patterns\Proxy_Pattern\Classes;

use App\Structural_Patterns\Proxy_Pattern\Interfaces\Downloader;

class RealDownloader implements Downloader
{
    public function download(string $url): string
    {
        echo "Downloading a file from the Internet.\n";
        $result = file_get_contents($url);
        echo "Downloaded bytes: " . strlen($result) . "\n";

        return $result;
    }
}