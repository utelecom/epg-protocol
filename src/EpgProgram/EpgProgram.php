<?php

namespace Utelecom\EpgProtocol\EpgProgram;

final class EpgProgram
{
    /**
     * @example 9669020b-0354-45b4-8d82-918fc035b2b7
     */
    public string $id;

    /**
     * @example 1636757446
     */
    public int $start;

    /**
     * @example 1636757446
     */
    public int $stop;

    /**
     * @example 2000-01-01T00:00:00+00:00
     */
    public string $startDate;

    /**
     * @example 2000-01-01T00:00:00+00:00
     */
    public string $stopDate;

    /**
     * @var string[]
     */
    public array $channelsId = [];

    /**
     * @var string[]
     */
    public array $categoriesId = [];

    /**
     * @var string[]
     */
    public array $genresId = [];

    /**
     * @var EpgProgramTranslation[]
     */
    public array $translations = [];

    /**
     * @var EpgProgramImage[]
     */
    public array $images = [];

    public ?string $year;

    public ?EpgProgramRating $rating;

    public ?EpgProgramVote $vote;

    /**
     * @var EpgProgramStream[]
     */
    public array $streams;
}
