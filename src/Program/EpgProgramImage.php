<?php

namespace Utelecom\EpgProtocol\Program;

final class EpgProgramImage
{
    public const POSITION_PORTRAIT = 'portrait';
    public const POSITION_ALBUM = 'album';
    /**
     * @example //epg.prosto.tv/0123456789.jpg
     */
    public string $uri;

    /**
     * @example portrait|album
     */
    public string $position;

    public int $width;

    public int $height;

    public bool $official;

    /**
     * @example 2:3|4:3|16:9
     */
    public ?string $ratio = null;

    private int $pixels;

    public function setPixels(int $pixels): void
    {
        $this->pixels = $pixels;
    }

    public function getPixels(): int
    {
        return $this->pixels;
    }
}
