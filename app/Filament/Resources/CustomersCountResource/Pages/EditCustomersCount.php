<?php

namespace App\Filament\Resources\CustomersCountResource\Pages;

use App\Filament\Resources\CustomersCountResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomersCount extends EditRecord
{
    protected static string $resource = CustomersCountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
