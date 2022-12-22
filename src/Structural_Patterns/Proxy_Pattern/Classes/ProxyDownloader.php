<?php

namespace App\Structural_Patterns\Proxy_Pattern\Classes;

use App\Structural_Patterns\Proxy_Pattern\Interfaces\Downloader;

class ProxyDownloader  implements Downloader
{
    /**
     * @var RealDownloader
     */
    private $downloader;

    /**
     * @var string[]
     */
    private $cache = [];

    public function __construct(RealDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            echo "CacheProxy MISS. ";
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo "CacheProxy HIT. Retrieving result from cache.\n";
        }
        return $this->cache[$url];
    }
}