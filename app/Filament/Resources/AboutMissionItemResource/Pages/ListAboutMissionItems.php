<?php

namespace App\Filament\Resources\AboutMissionItemResource\Pages;

use App\Filament\Resources\AboutMissionItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutMissionItems extends ListRecords
{
    protected static string $resource = AboutMissionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
