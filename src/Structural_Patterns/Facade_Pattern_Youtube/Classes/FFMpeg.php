<?php


namespace App\Structural_Patterns\Facade_Pattern_Youtube\Classes;


/**
 * The FFmpeg subsystem (a complex video/audio conversion library).
 */
class FFMpeg
{
    public static function create(): FFMpeg { /* ... */ }

    public function open(string $video): void { /* ... */ }

    // ...more methods and classes... RU: ...дополнительные методы и классы...
}