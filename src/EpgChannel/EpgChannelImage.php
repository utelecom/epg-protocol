<?php

namespace Utelecom\EpgProtocol\EpgProgram;

final class EpgChannelImage
{
    public const TYPE_LOGO = 'logo';
    public const TYPE_PORTRAIT = 'portrait';
    public const TYPE_ALBUM = 'album';

    /**
     * @example //epg.prosto.tv/0123456789.jpg
     */
    public string $uri;

    /**
     * @example logo|portrait|album
     */
    public string $type;
}
