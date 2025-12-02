<?php

namespace App\Filament\Resources\RoadmapItemResource\Pages;

use App\Filament\Resources\RoadmapItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoadmapItems extends ListRecords
{
    protected static string $resource = RoadmapItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
