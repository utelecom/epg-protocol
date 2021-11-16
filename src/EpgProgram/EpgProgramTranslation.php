<?php

namespace Utelecom\EpgProtocol\EpgProgram;

class EpgProgramTranslation
{
    public string $lang;

    public string $title;

    public ?string $announce = null;

    public ?string $description = null;

    /**
     * @var string[]
     */
    public array $channels;

    /**
     * @var string[]
     */
    public array $categories;

    /**
     * @var string[]
     */
    public array $genres;
}
