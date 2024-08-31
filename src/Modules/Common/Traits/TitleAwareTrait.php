<?php

declare(strict_types=1);

namespace Modules\Common\Traits;

trait TitleAwareTrait
{
    protected string $title;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
