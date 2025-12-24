<?php

namespace App\Filament\Resources\ProcessSectionResource\Pages;

use App\Filament\Resources\ProcessSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProcessSections extends ListRecords
{
    protected static string $resource = ProcessSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
