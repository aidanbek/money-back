<?php

declare(strict_types=1);

namespace Modules\Common\Traits;

trait IdAwareTrait
{
    protected int $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
