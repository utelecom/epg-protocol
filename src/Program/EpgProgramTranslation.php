<?php

namespace Utelecom\EpgProtocol\Program;

class EpgProgramTranslation
{
    public string $lang;

    public string $title;

    public ?string $announce;

    public ?string $description;

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
