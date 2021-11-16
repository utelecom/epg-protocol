<?php

namespace Utelecom\EpgProtocol;

use Utelecom\EpgProtocol\EpgChannel\EpgChannelImage;
use Utelecom\EpgProtocol\EpgChannel\EpgChannelTranslation;

class EpgChannel
{
    public string $id;

    public ?int $position = null;

    /**
     * @todo
     */
    public ?int $genreId = null;

    /**
     * @var EpgChannelTranslation[]
     */
    public array $translations = [];

    /**
     * @var EpgChannelImage[]
     */
    public array $images = [];

    public bool $hasArchive;

    public bool $hasEpg;

    public bool $isAdult;

    public bool $isEnabled;
}
