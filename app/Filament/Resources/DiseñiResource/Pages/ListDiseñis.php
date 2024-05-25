<?php

namespace App\Filament\Resources\DiseñiResource\Pages;

use App\Filament\Resources\DiseñiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDiseñis extends ListRecords
{
    protected static string $resource = DiseñiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
