<?php

declare(strict_types=1);

namespace Modules\Banks\Services;

use App\Helpers\StringHelper;
use Illuminate\Support\Collection;
use Modules\Banks\DataObjects\BankCreate;
use Modules\Banks\DataObjects\BankUpdate;
use Modules\Banks\Models\Bank;

class BankService
{
    public function get(): Collection
    {
        return Bank::orderBy('title')->get();
    }

    public function create(BankCreate $data): Bank
    {
        $bank = new Bank();
        $bank->title = $data->getTitle();
        $bank->clean_title = StringHelper::clearTitle($data->getTitle());
        $bank->save();

        return $bank;
    }

    public function update(BankUpdate $data): Bank
    {
        /** @var Bank $bank */
        $bank = Bank::findOrFail($data->getId());
        $bank->title = $data->getTitle();
        $bank->clean_title = StringHelper::clearTitle($data->getTitle());
        $bank->save();

        return $bank;
    }
}
