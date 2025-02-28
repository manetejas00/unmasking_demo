<?php

namespace App\Filament\Resources\CustomersCountResource\Pages;

use App\Filament\Resources\CustomersCountResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomersCount extends CreateRecord
{
    protected static string $resource = CustomersCountResource::class;
}
