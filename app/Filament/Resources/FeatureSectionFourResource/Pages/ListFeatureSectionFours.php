<?php

namespace App\Filament\Resources\FeatureSectionFourResource\Pages;

use App\Filament\Resources\FeatureSectionFourResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeatureSectionFours extends ListRecords
{
    protected static string $resource = FeatureSectionFourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
