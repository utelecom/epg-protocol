<?php

namespace Utelecom\EpgProtocol\Program;

final class EpgProgramRating
{
    /**
     * @var string|null
     * @example 0|12|16|18
     */
    public ?string $ua;

    /**
     * @var string|null
     * @example G|PG|PG-13|R|NC-17
     */
    public ?string $mpaa;
}