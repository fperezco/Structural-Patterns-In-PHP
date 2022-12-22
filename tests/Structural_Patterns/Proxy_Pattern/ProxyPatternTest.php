<?php

namespace App\Tests\Structural_Patterns\Proxy_Pattern;

use App\Structural_Patterns\Proxy_Pattern\Classes\ProxyDownloader;
use App\Structural_Patterns\Proxy_Pattern\Classes\RealDownloader;
use PHPUnit\Framework\TestCase;

class ProxyPatternTest extends TestCase
{
    public function test_that_proxy_provide_the_same_interface_that_target_class_that_is_envolving()
    {
        //GIVEN
        $realDownloader = new RealDownloader();
        $proxyDownloader = new ProxyDownloader($realDownloader);

        //THEN
        $this->assertObjectFitDownloaderInterface($realDownloader);
        $this->assertObjectFitDownloaderInterface($proxyDownloader);
    }

    public function test_proxy_does_not_require_call_again_the_same_url_when_has_been_cached_previously()
    {
        //GIVEN
        $realDownloader = $this->createMock(REalDownloader::class);
        $proxyDownloader = new ProxyDownloader($realDownloader);

        //THEN
        $realDownloader->expects($this->once())->method('download');

        //WHEN
        $proxyDownloader->download('https://wwww.google.com');
        $proxyDownloader->download('https://wwww.google.com');
    }


    private function assertObjectFitDownloaderInterface(object $downloader)
    {
        //THEN
        $this->assertTrue(
            method_exists($downloader, 'download')
        );
    }

}