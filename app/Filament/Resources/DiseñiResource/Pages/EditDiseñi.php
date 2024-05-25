<?php

namespace App\Filament\Resources\DiseñiResource\Pages;

use App\Filament\Resources\DiseñiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiseñi extends EditRecord
{
    protected static string $resource = DiseñiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
