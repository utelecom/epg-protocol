<?php

namespace Utelecom\EpgProtocol;

use Utelecom\EpgProtocol\EpgChannel\EpgChannelImage;
use Utelecom\EpgProtocol\EpgChannel\EpgChannelTranslation;

class EpgChannel
{
    public string $id;

    public ?int $position;

    /**
     * @todo
     */
    public ?int $genreId;

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
