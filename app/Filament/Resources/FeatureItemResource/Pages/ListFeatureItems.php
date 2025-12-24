<?php

namespace App\Filament\Resources\FeatureItemResource\Pages;

use App\Filament\Resources\FeatureItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeatureItems extends ListRecords
{
    protected static string $resource = FeatureItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
