<?php

namespace App\Filament\Resources\WarrantyFeatureSectionTwoResource\Pages;

use App\Filament\Resources\WarrantyFeatureSectionTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWarrantyFeatureSectionTwos extends ListRecords
{
    protected static string $resource = WarrantyFeatureSectionTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
