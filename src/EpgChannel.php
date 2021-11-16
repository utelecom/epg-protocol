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

    public function getTitle(?string $lang = null): ?string
    {
        $translation = $this->getTranslation($lang);
        if (null === $translation) {
            return null;
        }

        return $translation->title;
    }

    private function getTranslation(?string $lang = null): ?EpgChannelTranslation
    {
        if (empty($this->translations)) {
            return null;
        }

        if (null === $lang) {
            $firstKey = array_key_first($this->translations);
            return $this->translations[$firstKey];
        }

        foreach ($this->translations as $translation) {
            if ($lang === $translation->lang) {
                return $translation;
            }
        }

        return null;
    }
}
