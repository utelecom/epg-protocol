<?php

namespace Utelecom\EpgProtocol\EpgProgram;

class EpgProgramStream
{
    public string $channelId;

    /**
     * @example 1636938227
     */
    public int $validUntil;

    /**
     * @example 2000-01-01T00:00:00+00:00
     */
    public string $validUntilDate;

    /**
     * @example //host:port/chX/video-timeshift_abs-{utc}.m3u8?secret={secret}&token={token}
     */
    public string $timeshift;

    /**
     * @example //host:port/chX/video-{utc}-{duration}.m3u8?secret={secret}&token={token}
     */
    public string $catchup;
}
