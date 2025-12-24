<?php

namespace App\Filament\Resources\ProductFeatureSectionResource\Pages;

use App\Filament\Resources\ProductFeatureSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductFeatureSections extends ListRecords
{
    protected static string $resource = ProductFeatureSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
