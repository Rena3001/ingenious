<?php

namespace App\Filament\Resources\FeatureSectionThreeResource\Pages;

use App\Filament\Resources\FeatureSectionThreeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeatureSectionThrees extends ListRecords
{
    protected static string $resource = FeatureSectionThreeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
