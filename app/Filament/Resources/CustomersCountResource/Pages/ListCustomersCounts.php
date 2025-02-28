<?php

namespace App\Filament\Resources\CustomersCountResource\Pages;

use App\Filament\Resources\CustomersCountResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomersCounts extends ListRecords
{
    protected static string $resource = CustomersCountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
