<?php

namespace App\Filament\Resources\AppProductSectionResource\Pages;

use App\Filament\Resources\AppProductSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAppProductSections extends ListRecords
{
    protected static string $resource = AppProductSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
