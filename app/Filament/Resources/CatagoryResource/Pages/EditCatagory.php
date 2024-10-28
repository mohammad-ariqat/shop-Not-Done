<?php

namespace App\Filament\Resources\CatagoryResource\Pages;

use App\Filament\Resources\CatagoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCatagory extends EditRecord
{
    protected static string $resource = CatagoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
