<?php

namespace App\Filament\Resources\CatagoryResource\Pages;

use App\Filament\Resources\CatagoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCatagories extends ListRecords
{
    protected static string $resource = CatagoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
